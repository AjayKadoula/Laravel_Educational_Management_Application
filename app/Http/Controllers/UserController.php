<?php

namespace App\Http\Controllers;
use  App\Http\Controllers\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Notifications\registration_details;
use App\Test;
use DB;
use Session;
use App\User;
class UserController extends Controller
{
  public function store(Request $request)
  {

     $request->validate( [
         'first_name' => 'required|string|max:255',
         'last_name' => 'required|string|max:255',
         'date_of_birth' => 'required|date|date_format:Y-m-d',
         'nationality_id' => 'required|string|max:255',
         'gender' => 'required|in:male,female',
         'address_line1' => 'required|string|max:255',
         'address_line2' => 'required|string|max:255',
         'city' => 'required|string|max:255',
         'state' => 'required|string|max:255',
         'pin_code' => 'required|string|max:255',
         'country_id' => 'required|string|max:255',
         'phone1' => 'required|string|max:255',
         'email' => 'required|string|email|max:255|unique:users',
         'image'  => 'required',
         ]);
        $first_name=$request->input('first_name');
        $middle_name = $request->input('middle_name');
        $last_name = $request->input('last_name');
        $national_student_id = $request->input('national_student_id');
        $batch_id = $request->input('batch_id');
        $date_of_birth = $request->input('date_of_birth');
        $birth_place = $request->input('birth_place');
        $nationality_id = $request->input('nationality_id');
        $language = $request->input('language');
        $religion = $request->input('religion');
        $blood_group = $request->input('blood_group');
        $student_category_id = $request->input('student_category_id');
        $gender = $request->input('gender');
        $checkbox = $request->input('checkbox');
        $demo = $request->input('demo');
        $height = $request->input('height');
        $demo1 = $request->input('demo1');
        $demo2 = $request->input('demo2');
        $demo3 = $request->input('demo3');
        $demo4 = $request->input('demo4');
        $demo5 = $request->input('demo5');
        $demo6 = $request->input('demo6');
        $dem = $request->input('dem');
        $dem1 = $request->input('dem1');
        $demo7 = $request->input('demo7');
        $address_line1 = $request->input('address_line1');
        $address_line2 = $request->input('address_line2');
        $city = $request->input('city');
        $state = $request->input('state');
        $pin_code = $request->input('pin_code');
        $country_id = $request->input('country_id');
        $phone1 = $request->input('phone1');
        $phone2 = $request->input('phone2');
        $email = $request->input('email');
        $student_image = $request->file('image')->store('public/profile');


  $id = DB::table('studentsregistration')->insertGetId(
    [
      'first_name' => $first_name,
      'middle_name' => $middle_name,
      'last_name' => $last_name,
      'national_student_id' => $national_student_id,
      'batch_id' => $batch_id,
      'date_of_birth' => $date_of_birth,
      'birth_place' => $birth_place,
      'nationality_id' => $nationality_id,
      'language' => $language,
      'religion' => $religion,
      'blood_group' => $blood_group,
      'student_category_id' => $student_category_id,
      'gender' => $gender,
      'checkbox' => $checkbox,
      'demo' => $demo,
      'height' => $height,
      'demo1' => $demo1,
      'demo2' => $demo2,
      'demo3' => $demo3,
      'demo4' => $demo4,
      'demo5' => $demo5,
      'demo6' => $demo6,
      'dem' => $dem,
      'dem1' => $dem1,
      'demo7' => $demo7,
      'address_line1' => $address_line1,
      'address_line2' => $address_line2,
      'city' => $city,
      'state' => $state,
      'pin_code' => $pin_code,
      'country_id' => $country_id,
      'phone1' => $phone1,
      'phone2' => $phone2,
      'email' => $email,
      'student_image'  => $student_image,
    ]

);
    session(['student_id' => $id]);
    session(['email' => $email]);
     return redirect('studentregistration2');
  }
  public function store2(Request $request)
  {


     $request->validate( [
       'document_type' => 'required|string|max:255',
       'StudentDocument'  => 'required',
       ]);
       $document_type = $request->input('document_type');
       $StudentDocument = $request->file('StudentDocument')->store('public/upload');
       $student_id = session('student_id');

       $doc_id = DB::table('studentdocument')->insertGetId(
         [
           'student_id' => $student_id,
           'document_type'  => $document_type,
           'studentdocument'  => $StudentDocument,
         ]

     );
     session(['StudentDocument' => $document_type]);
     $query = DB::select("SELECT * FROM `studentdocument` WHERE `student_id` = '$student_id'") ;
     return view('auth.studentregistration3',['query'=>$query]);

  }
  public function store3(Request $request)
  {
    $request->session()->flush();
    return redirect('home');
  }
  public function check(Request $request)
  { $request->validate( [
      'student_id' => 'required|string|max:255',
    ]);
     $student_id = $request->input('student_id');
     $query = DB::select("SELECT * FROM `users` WHERE `student_id` = '$student_id'") ;
     return view('auth.studentregistraionStatus',['query'=>$query]);
  }
  public function notificationmail(Request $request)
  {
    $student_id = session('student_id');
    $user = User::where('id','=','1')->first();
    $user->notify(new registration_details("Your application number is :- $student_id" ));
    return view('auth.studentregistration4');
  }

}
