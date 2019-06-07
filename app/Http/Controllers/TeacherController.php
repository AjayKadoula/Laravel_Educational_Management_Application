<?php

namespace App\Http\Controllers;
use  App\Http\Controllers\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Test;
use Illuminate\Support\Facades\Hash;
use DB;
use auth;
use Redirect;
use Session;
class teachercontroller extends Controller
{


    public function notifiaction(Request $request)
    {
      $query = DB::select("SELECT * FROM `adminnotifications` order by `id` desc limit 15  ") ;
      foreach ($query as $notify){
      $now = time(); // or your date as well
      $your_date = strtotime("$notify->create_time");
      $datediff = $now - $your_date;

       $date=round($datediff / (60 * 60 * 24));
    }

     return view('teachernotifications',['query'=>$query ,'date'=>$date]);

    }
    public function message(Request $request)
    {
      $id=Auth::user()->id ;
      $query = DB::table('users')->leftJoin('message', 'users.id', '=', 'message.message_from')->where('message.message_to', '=', "$id")->orderBy('message.id', 'desc')->limit(25)->get();


     return view('messageteacher',['query'=>$query, 'queryy'=>""]);

    }
    public function messageshow(Request $request)
    {
      $request->validate( [
          'from_id' => 'required'
          ]);
      $id=Auth::user()->id ;
      $from_id=$request->input('from_id');
      DB::table('message')->where('id', '=', "$from_id" )->update(['status' => '1']);
      $query = DB::table('users')->leftJoin('message', 'users.id', '=', 'message.message_from')->where('message.message_to', '=', "$id")->orderBy('message.id', 'desc')->limit(25)->get();
      $queryy = DB::table('users')->leftJoin('message', 'users.id', '=', 'message.message_from')->where('message.message_to', '=', "$id")->where('message.id', '=', "$from_id")->get();
      return view('messageteacher',['query'=>$query, 'queryy'=>$queryy]);
    }
    public function message_send(Request $request)
    {
      $request->validate( [
          'toemail' => 'required',
          'title'  => 'required',
          'body'  => 'required',
          ]);

       $fromemail=Auth::user()->id ;
       $toemail=$request->input('toemail');
       $title=$request->input('title');
       $body=$request->input('body');
      $query = DB::select("SELECT * FROM `users` where `email`='$toemail'") ;
     foreach($query as $user)
      {


       $id = DB::table('message')->insertGetId(
         [
           'message_from' => $fromemail,
           'message_to' => $user->id,
           'title' => $title,
           'body' => $body,
           'status' => "0",

         ]
       );
        }
        return redirect()->action('TeacherController@message');


    }


}
