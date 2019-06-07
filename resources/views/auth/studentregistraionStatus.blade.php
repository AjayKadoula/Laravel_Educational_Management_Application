@extends('layouts.app')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
@section('content')<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border:1px solid green;  text-align:center;">
                <div class="card-header">
                  <h2>Student Admission</h2>
            	       <p>Enter your application ID to check status</p>
</div>

                <div class="card-body">
                  @foreach ($errors->all() as $error)
            			<div class="alert alert-danger " style="text-align:center;">
            			 <a href="#" class="close" data-dismiss="alert">&times;</a>
            			 <strong>Error!</strong>		{{ $error }}
            			</div>
                  @endforeach
                  <form enctype="multipart/form-data" id="center-upload-form" action="{{ URL::to('/Registration_store_5') }}" method="post">
            				     @csrf
            		      	 <div style="display:none">
            			        	 <input type="hidden" value="af22b8f3a43fe074cfa5daf43f6250eba767f1bc" name="YII_CSRF_TOKEN" />
            		      	 </div>
                        <div class="form-group">
                              <input placeholder="Application Id" name="student_id" id="ApplicationStatus_registration_id" class="form-control"type="text" />
                        </div>
                        @if($query != "")
                         @foreach ($query as $user)
                          <div class='alert alert-info'>
                              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>

                          <strong>Your Email is Sucessfully Registered ! </strong> {{ $user->email }}
                          <p>Please Reset your Password As Forget Password </p>
                         </div>
                        @endforeach

                      @endif
                        <div class="form-group">
                            @if($query != "")
                              <p>** if email is not showing then try after some time your application is under processing ** </p>

                              <a href ="{{ asset('studentregistrationStatus')}}" class="btn btn-primary" >Back </a>
                            @else
                            <input type="submit" class="btn btn-primary" name="yt0" value="Check Status" />
                          @endif
                        </div>
                      </form>
                    <a href="{{ asset('studentregistration') }}">  <h4><strong> New Registraion & New Admission</strong> ?</h4></a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
