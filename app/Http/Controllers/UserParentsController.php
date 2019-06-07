<?php

namespace App\Http\Controllers;
use  App\Http\Controllers\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Test;
use DB;
use App\user;
use Redirect;
use Session;
class UserParentsController extends Controller
{

  public function store(Request $request)
  {

     $request->validate( [
         'first_name' => 'required|string|max:255',
         'last_name' => 'required|string|max:255',
         'relation' => 'required|string|max:255',
         'email' => 'required|string|email|max:255|unique:users',
         'mobile_phone' => 'required|string|max:255',
         ]);

         $first_name=$request->input('first_name');
         $last_name = $request->input('last_name');
         $relation = $request->input('relation');
         $Guardians_dob = $request->input('Guardians_dob');
         $education = $request->input('education');
         $occupation = $request->input('occupation');
         $income = $request->input('income');
         $test = $request->input('test');
         $email = $request->input('email');
         $mobile_phone = $request->input('mobile_phone');
         $office_phone1 = $request->input('office_phone1');
         $office_phone2 = $request->input('office_phone2');
         $office_address_line1 = $request->input('office_address_line1');
         $office_address_line2 = $request->input('office_address_line2');
         $city = $request->input('city');
         $state = $request->input('state');
         $country_id = $request->input('country_id');
         $test1 = $request->input('test1');
          $student_id = session('student_id');
    if((session('email') != $email)){
   $id = DB::table('parentsregistration')->insertGetId(
     [
       'student_id' => $student_id,
       'first_name' => $first_name,
       'last_name' => $last_name,
       'relation' => $relation,
       'Guardians_dob' => $Guardians_dob,
       'education' => $education,
       'occupation' => $occupation,
       'income' => $income,
       'test' => $test,
       'email' => $email,
       'mobile_phone' => $mobile_phone,
       'office_phone1' => $office_phone1,
       'office_phone2' => $office_phone2,
       'office_address_line1' => $office_address_line1,
       'office_address_line2' => $office_address_line2,
       'city' => $city,
       'state' => $state,
       'country_id' => $country_id,
       'test1' => $test1,
     ]

 );

 $query = DB::select("SELECT * FROM `studentdocument` WHERE `student_id` = '$student_id'") ;
 return view('auth.studentregistration3',['query'=>$query]);
}else{return Redirect::back()->withErrors([ 'Email has been Already exists']);}
  }
}
