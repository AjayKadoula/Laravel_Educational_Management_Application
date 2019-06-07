<?php

namespace App\Http\Controllers;
use  App\Http\Controllers\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Test;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use Redirect;
use Session;
class admincontroller extends Controller
{
  public function admingallery(Request $request)
  {
    $query = DB::table('studentsdetail')->get();
    return view('gallery',['query'=>$query]);
  }
  public function admin(Request $request)
  {
    $admin_count=DB::table('users')->where('role_id', '=','2')->COUNT('id');
     $query = DB::select("SELECT * FROM `users` Where `role_id`='2' ORDER BY `id` DESC  ") ;
     return view('AdminDetail',['query'=>$query,'admin_count'=>$admin_count]);
  }
  public function admin_registration(Request $request)
  {
    $request->validate( [
        'username' => 'required|string|max:255',
        'password'  => 'required',
        'email' => 'required|string|email|max:255|unique:users',
        'image'  => 'required',
        ]);

     $name=$request->input('username');
     $email=$request->input('email');
     $password=Hash::make($request->input('password'));
     $role_id="2";
     $student_id="0";
     $profile_picture=$request->file('image')->store('public/profile');

     $id1 = DB::table('users')->insertGetId(
       [
         'name' => $name,
         'email' => $email,
         'remember_token' => Str::random(40),
         'password' => $password,
         'role_id' => $role_id,
         'student_id' => $student_id,
         'profile_picture' => $profile_picture,

       ]
     );
     $admin_count=DB::table('users')->where('role_id', '=','2')->COUNT('id');
      $query =  DB::select("SELECT * FROM `users` Where `role_id`='2' ORDER BY `id` DESC  ") ;
      return view('AdminDetail',['query'=>$query,'admin_count'=>$admin_count]);


 }
  public function delete(Request $request)
  {
    $id=$request->input('id');
    DB::table('users')->where('id', '=', $id )->delete();
    $admin_count=DB::table('users')->where('role_id', '=','2')->COUNT('id');
     $query =  DB::select("SELECT * FROM `users` Where `role_id`='2' ORDER BY `id` DESC  ") ;
     return view('AdminDetail',['query'=>$query,'admin_count'=>$admin_count]);
}
public function teacher(Request $request)
{
   $query = DB::select("SELECT * FROM `users` Where `role_id`='4'  ") ;
   $teacher_count=DB::table('users')->where('role_id', '=','4')->COUNT('id');
    return view('Adminteacher',['query'=>$query,'teacher_count'=>$teacher_count]);
}
public function teacher_registration(Request $request)
{
  $request->validate( [
      'username' => 'required|string|max:255',
      'password'  => 'required',
      'email' => 'required|string|email|max:255|unique:users',
      'image'  => 'required',
      ]);

   $name=$request->input('username');
   $email=$request->input('email');
   $password=Hash::make($request->input('password'));
   $role_id="4";
   $student_id="0";
   $profile_picture=$request->file('image')->store('public/profile');

   $id1 = DB::table('users')->insertGetId(
     [
       'name' => $name,
       'email' => $email,
       'remember_token' => Str::random(40),
       'password' => $password,
       'role_id' => $role_id,
       'student_id' => $student_id,
       'profile_picture' => $profile_picture,

     ]
   );
   $query = DB::select("SELECT * FROM `users` Where `role_id`='4'  ") ;
   $teacher_count=DB::table('users')->where('role_id', '=','4')->COUNT('id');
    return view('Adminteacher',['query'=>$query,'teacher_count'=>$teacher_count]);

}
public function teacher_delete(Request $request)
{
  $id=$request->input('id');
  DB::table('users')->where('id', '=', $id )->delete();
  $query = DB::select("SELECT * FROM `users` Where `role_id`='4'  ") ;
  $teacher_count=DB::table('users')->where('role_id', '=','4')->COUNT('id');
   return view('Adminteacher',['query'=>$query,'teacher_count'=>$teacher_count]);
}

  public function userdelete(Request $request)
  {
    $id=$request->input('id');
    DB::table('users')->where('student_id', '=', $id )->delete();
    DB::table('studentsdetail')->where('user_id', '=', $id )->delete();
    $student_count=DB::table('users')->where('role_id', '=','1')->COUNT('id');
    $New_student_count=DB::table('studentsregistration')->COUNT('id');
     $query = DB::table('studentsdetail')->get();
     return view('Adminstudent',['query'=>$query,'query1'=>"",'student_count'=>$student_count,'New_student_count'=>$New_student_count]);

  }
  public function student(Request $request)
  {
    $student_count=DB::table('users')->where('role_id', '=','1')->COUNT('id');
    $New_student_count=DB::table('studentsregistration')->COUNT('id');
     $query = DB::table('studentsdetail')->get();
     return view('Adminstudent',['query'=>$query,'query1'=>"",'student_count'=>$student_count,'New_student_count'=>$New_student_count]);
  }
  public function studentdoc1(Request $request)
  {
     $id=$request->input('id');
     $query1 = DB::select("SELECT * FROM `studentdocument` where `student_id`= $id") ;
     $student_count=DB::table('users')->where('role_id', '=','1')->COUNT('id');
     $New_student_count=DB::table('studentsregistration')->COUNT('id');
      $query = DB::table('studentsdetail')->get();
      return view('Adminstudent',['query'=>$query,'query1'=>$query1,'student_count'=>$student_count,'New_student_count'=>$New_student_count]);
   }


  public function studentpending(Request $request)
  {
     $query = DB::select("SELECT * FROM `studentsregistration`") ;
     return view('Adminstudentpending',['query'=>$query])->with('query1', "");
  }
  public function studentdoc(Request $request)
  {
     $id=$request->input('id');
     $query = DB::select("SELECT * FROM `studentsregistration`") ;
     $query1 = DB::select("SELECT * FROM `studentdocument` where `student_id`= $id") ;

     return view('Adminstudentpending',['query'=>$query])->with('query1', $query1);
  }
  public function studentdelete(Request $request)
  {
    $id=$request->input('id');
    DB::table('studentsregistration')->where('id', '=', $id )->delete();
    return Redirect::back()->withErrors([ 'Sucessfully Deleted']);

  }
  public function studentuserdelete(Request $request)
  {
    $id=$request->input('id');
    DB::table('users')->where('id', '=', $id )->delete();

    $query = DB::select("SELECT * FROM `users` Where `role_id`='1'  ") ;
     return view('Adminstudent',['query'=>$query]);

  }
  public function accept(Request $request)
  {
     $name=$request->input('name');
     $email=$request->input('email');
     $password=Hash::make($request->input('password'));
     $role_id="1";
     $student_id=$request->input('student_id');
     $id=$request->input('student_id');
     $query = DB::select("SELECT * FROM `studentsregistration`") ;
     $query1 = DB::select("SELECT * FROM `studentdocument` where `student_id`= $id") ;
     $query2 = DB::select("SELECT * FROM `studentsregistration` where `id`= $id");
  foreach ($query2 as $user){
     $id1 = DB::table('users')->insertGetId(
       [
         'name' => $name,
         'email' => $email,
         'remember_token' => Str::random(40),
         'password' => $password,
         'role_id' => $role_id,
         'student_id' => $student_id,
         'profile_picture' => $user->student_image,

       ]
     );

     $id2 = DB::table('StudentsDetail')->insertGetId(
       [
         'user_id' => $id,
         'first_name' =>$user->first_name,
         'middle_name' => $user->middle_name,
         'last_name' => $user->last_name,
         'national_student_id' => $user->national_student_id,
         'batch_id' => $user->batch_id,
         'date_of_birth' => $user->date_of_birth,
         'birth_place' => $user->birth_place,
         'nationality_id' => $user->nationality_id,
         'language' => $user->language,
         'religion' => $user->religion,
         'blood_group' => $user->blood_group,
         'student_category_id' => $user->student_category_id,
         'gender' => $user->gender,
         'checkbox' => $user->checkbox,
         'demo' => $user->demo,
         'height' => $user->height,
         'demo1' => $user->demo1,
         'demo2' => $user->demo2,
         'demo3' => $user->demo3,
         'demo4' => $user->demo4,
         'demo5' => $user->demo5,
         'demo6' => $user->demo6,
         'dem' => $user->dem,
         'dem1' => $user->dem1,
         'demo7' => $user->demo7,
         'address_line1' => $user->address_line1,
         'address_line2' => $user->address_line2,
         'city' => $user->city,
         'state' => $user->state,
         'pin_code' => $user->pin_code,
         'country_id' => $user->country_id,
         'phone1' => $user->phone1,
         'phone2' => $user->phone2,
         'email' => $user->email,
         'student_image'  => $user->student_image,

       ]
     );


$id3=  DB::table('studentsregistration')->where('id', '=', $student_id )->delete();
   }
      if(isset($id3)){
       return Redirect::back()->withErrors([ 'Sucessfully Accepted']);
                }  else{
                    echo "try again";
                  }
  }


   public function parents(Request $request)
  {
    $parents_count=DB::table('users')->where('role_id', '=','3')->COUNT('id');
    $New_parents_count=DB::table('parentsregistration')->COUNT('id');
     $query = DB::table('parentsdetail')->get();
     return view('Adminparents',['query'=>$query,'parents_count'=>$parents_count,'New_parents_count'=>$New_parents_count]);
    }
    public function parentspending(Request $request)
    {
       $query = DB::select("SELECT * FROM `parentsregistration`") ;
       return view('Adminparentspending',['query'=>$query]);
    }

    public function parentsdelete(Request $request)
    {
      $id=$request->input('id');
      DB::table('parentsregistration')->where('id', '=', $id )->delete();
      return Redirect::back()->withErrors([ 'Sucessfully Deleted']);

    }
    public function parentsaccept(Request $request)
    {
       $id=$request->input('id');
       $name=$request->input('name');
       $password=Hash::make($request->input('password'));
       $role_id="3";
       $query2 = DB::select("SELECT * FROM `parentsregistration` where `id`= $id");
    foreach ($query2 as $user){
       $id1 = DB::table('users')->insertGetId(
         [
           'name' => $name,
           'email' => $user->email,
           'remember_token' => Str::random(40),
           'password' => $password,
           'role_id' => $role_id,
           'student_id' => $user->student_id,
           'profile_picture' => "public/profile/default_profile.jpg",

         ]
       );

       $id2 = DB::table('parentsdetail')->insertGetId(
         [
           'user_id' => $id1,
           'student_id' => $user->student_id,
           'first_name' =>$user->first_name,
           'last_name' => $user->last_name,
           'relation' => $user->relation,
           'Guardians_dob' => $user->Guardians_dob,
           'education' => $user->education,
           'occupation' => $user->occupation,
           'income' => $user->income,
           'test' => $user->test,
           'email' => $user->email,
           'mobile_phone' => $user->mobile_phone,
           'office_phone1' => $user->office_phone1,
           'office_phone2' => $user->office_phone2,
           'office_address_line1' => $user->office_address_line1,
           'office_address_line2' => $user->office_address_line2,
           'city' => $user->city,
           'state' => $user->state,
           'country_id' => $user->country_id,
           'test1' => $user->test1,
         ]
       );


  $id3=  DB::table('parentsregistration')->where('id', '=', $id )->delete();
     }
        if(isset($id3)){
         return Redirect::back()->withErrors([ 'Sucessfully Accepted']);
                  }  else{
                             echo "try again";
                         }
    }

    public function parentsuserdelete(Request $request)
    {
      $id=$request->input('id');
      DB::table('users')->where('id', '=', $id )->delete();
      DB::table('parentsdetail')->where('user_id', '=', $id )->delete();
      $parents_count=DB::table('users')->where('role_id', '=','3')->COUNT('id');
      $New_parents_count=DB::table('parentsregistration')->COUNT('id');
       $query = DB::table('parentsdetail')->get();
       return view('Adminparents',['query'=>$query,'parents_count'=>$parents_count,'New_parents_count'=>$New_parents_count]);
    }

    public function notifiaction(Request $request)
    {
      $query = DB::select("SELECT * FROM `adminnotifications` order by `id` desc limit 15  ") ;


     return view('notifications',['query'=>$query ]);

    }
    public function notifiaction_create(Request $request)
    {
      $request->validate( [
          'headline' => 'required',
          'brief'  => 'required',
          ]);

       $Admin_id=Auth::user()->id ;
       $headline=$request->input('headline');
       $brief=$request->input('brief');
       $file_name=$_FILES['file']['name'];
       if($_FILES['file']['name'] != ""){
         $file=$request->file('file')->store('public/notification');
      }else{
        $file= "";
      }


       $id1 = DB::table('adminnotifications')->insertGetId(
         [
           'Admin_id' => $Admin_id,
           'headline' => $headline,
           'brief' => $brief,
           'file_name' => $file_name,
           'file' =>$file,

         ]
       );


      return redirect()->action('admincontroller@notifiaction');

    }


    public function message(Request $request)
    {
      $id=Auth::user()->id ;
      $query = DB::table('users')->leftJoin('message', 'users.id', '=', 'message.message_from')->where('message.message_to', '=', "$id")->orderBy('message.id', 'desc')->limit(25)->get();


     return view('message',['query'=>$query, 'queryy'=>""]);

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
      return view('message',['query'=>$query, 'queryy'=>$queryy]);
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
        return redirect()->action('admincontroller@message');


    }

    public function fees(Request $request)
    {
      $query = DB::select("SELECT * FROM `create_fees_table` ORDER BY `id` DESC limit 25") ;
      $queryy = DB::select("SELECT * FROM `create_fees_table1` ORDER BY `id` DESC limit 25") ;
      $fees_category_count_1=DB::table('create_fees_table')->COUNT('id');
      $fees_category_count_2=DB::table('create_fees_table1')->COUNT('id');
     $fees_category_count = $fees_category_count_1 + $fees_category_count_2;
     foreach ($query as $user) {
       $user_id=$user->user_id;
       $name = DB::select("SELECT `email` FROM `users` where `id`='$user_id' ") ;

     }
     foreach ($queryy as $user) {
       $user_id=$user->user_id;
       $name1 = DB::select("SELECT `email` FROM `users` where `id`='$user_id' ") ;

     }

     return view('fees',['query'=>$query, 'queryy'=>$queryy,'fees_category_count'=>$fees_category_count,'name'=>$name,'name1'=>$name1]);

    }
    public function feescreate(Request $request)
    {

     return view('feescreate');

    }
    public function new_fees_create(Request $request)
    {
      $request->validate( [

          'fees_title'   => 'required',
          'fees_description'  => 'required',
          'fees_courses' => 'required',
          'fees_batch'  => 'required',
          'fees_category'  => 'required',
          'fees_type' => 'required',
          'fees_amount' => 'required',
          ]);

       $id=Auth::user()->id ;
       $fees_title=$request->input('fees_title');
       $fees_description=$request->input('fees_description');
       $fees_courses=$request->input('fees_courses');
       $fees_batch=$request->input('fees_batch');
       $fees_category=$request->input('fees_category');
       $fees_type=$request->input('fees_type');
       $fees_amount =$request->input('fees_amount');



       $id = DB::table('create_fees_table')->insertGetId(
         [
           'user_id' => $id,
           'fees_title' => $fees_title ,
           'fees_description' => $fees_description,
           'fees_courses' => $fees_courses,
           'fees_batch' => $fees_batch,
           'fees_category' => $fees_category,
           'fees_type' => $fees_type,
           'fees_amount' =>$fees_amount,

         ]
       );

        return redirect()->action('admincontroller@fees');

    }
    public function new_fees_create1(Request $request)
    {

      $request->validate( [

          'fees_title'   => 'required',
          'fees_description'  => 'required',
          'fees_user_email' => 'required',
          'fees_amount' => 'required',
          ]);

       $id=Auth::user()->id ;
       $fees_title=$request->input('fees_title');
       $fees_description=$request->input('fees_description');
       $fees_user_email=$request->input('fees_user_email');
       $fees_type="individual";
       $fees_amount =$request->input('fees_amount');



       $id = DB::table('create_fees_table1')->insertGetId(
         [
           'user_id' => $id,
           'fees_title' => $fees_title ,
           'fees_description' => $fees_description,
           'fees_user_email' => $fees_user_email,
           'fees_type' => $fees_type,
           'fees_amount' =>$fees_amount,

         ]
       );

        return redirect()->action('admincontroller@fees');
    }
}
