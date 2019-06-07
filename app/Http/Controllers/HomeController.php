<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $users = DB::table('users')->get();
         $sessions = DB::table('sessions')->get();
         foreach($sessions as $session){
         $session_all = DB::select("SELECT `id` FROM `save_all_sessions` ORDER BY `create_time` DESC LIMIT 1  ");
         foreach($session_all as $sessions_all){
        if($sessions_all->id != $session->id )
        { $session_all = DB::table('save_all_sessions')->insert(
           [
             'id'  => $session->id,
             'user_id'  => $session->user_id,
             'ip_address'  => $session->ip_address,
             'user_agent'  => $session->user_agent,
             'payload'  => $session->payload,
             'last_activity'  => $session->last_activity,
           ]
           );
        }

      }session(['session_id' => $session->user_id]);
      }
      $id=Auth::user()->id ;
      $message = DB::table('users')->leftJoin('message', 'users.id', '=', 'message.message_from')->where('message.message_to', '=', "$id")->orderBy('message.id', 'desc')->limit(5)->get();
      session(['message' => $message]);
      $notifys = DB::select("SELECT * FROM `adminnotifications` order by `id` desc limit 7  ") ;
     session(['notifys' => $notifys]);
         $users_session_details = DB::table('users')->leftJoin('save_all_sessions', 'users.id', '=', 'save_all_sessions.user_id')->orderBy('save_all_sessions.create_time', 'desc')->limit(4)->get();
         $admin_count=DB::table('users')->where('role_id', '=','2')->COUNT('id');
         $student_count=DB::table('users')->where('role_id', '=','1')->COUNT('id');
         $parents_count=DB::table('users')->where('role_id', '=','3')->COUNT('id');
         $teacher_count=DB::table('users')->where('role_id', '=','4')->COUNT('id');
         $message_count=DB::table('message')->where('status', '=','0')->where('message_to', '=',"$id")->COUNT('id');
session(['message_count' => $message_count]);
        return view(Auth::user()->role->name,['users' => $users, 'admin_count'=> $admin_count, 'student_count'=> $student_count, 'parents_count'=> $parents_count, 'teacher_count'=> $teacher_count, 'users_session_details'=>$users_session_details,'notifys'=>$notifys, 'message_count'=>$message_count ]);
    }
}
