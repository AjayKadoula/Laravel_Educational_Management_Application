@extends('layouts.appadmin')
@section('content')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

	.overviewbox h1 {
	    background: #4f5560;
	    color: #fff;
	    font-size: 12px;
	    font-weight: normal;
	    margin: 0;
	    padding: 10px 0;
	    text-align: center;
	}
	.ovrBtm {
	    color: #666;
	    font-size: 31px;
	    padding: 20px 0px;
	    text-align: center;
	    font-weight: bold;
	    text-shadow: 1px 1px white, -1px -1px #fff;
	}
	.overviewbox {
	    width: 226px;
	}
	.overviewbox {
	    padding: 0px;
	    background: #f4f4f6;
	    float: left;
	    margin: 5px;
	    width: 221px;
	}
	</style>
			<!-- start: Content -->
			<div id="content" class="span10">
				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="{{ asset('/home') }}">Home</a>
						<i class="icon-angle-right"></i>
					</li>
					<li>
						<a href="{{ asset('/home') }}">Dashboard</a>
						<i class="icon-angle-right"></i>

					</li>

					<li><a href="#">Parents Details</a></li>
				</ul>
     <div style="padding-bottom:20px;">
			<div style="float:right;">
				<a href="{{ asset('/home/parents/Pending') }}"   class="btn btn-primary"> Panding Request</a>
				<a href="{{ asset('studentregistration') }}"   class="btn btn-primary"> Create Parents Account</a>
				<!--  <a href="{{ asset('/home/student/Pending') }}"   class="btn btn-primary"> Manage Student Details</a> -->

			<div style="padding-top:10px;" class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div>
		  </div>

				<div class="os-overview-block" style="display:inline-block;" >

					<div >
						<div class="overviewbox ovbox1">
					    	<h1><strong>Total Parents</strong></h1>
					                <div class="ovrBtm">{{$parents_count}}</div>
					    </div>
					    <div class="overviewbox ovbox2">
					    	<h1><strong>Panding Request </strong></h1>
					        <div class="ovrBtm">{{$New_parents_count}}</div>
					    </div>
					  <div class="clear"></div>

					</div>
					<div class="clear"></div>

				</div>

			</div>

	<div class="list-group" class="box span12">
		<div class="box-header" data-original-title>
	<h2><i class="halflings-icon white user"></i><span class="break"></span>Members</h2>
	<div class="box-icon">
		<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
	</div>
</div>
		<table style="background-color:;" class="table table-bordered">
   	<thead>
		<tr>
			<th>Id No</th>
			<th>Student Id</th>
			<th>Name</th>
			<th>Relation</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Button</th>
		</tr>
     	</thead>
      <tbody>
				<tr>
					@if($errors->any())
				<center>	<h4 style="color:green;">{{$errors->first()}}</h4></center>
					@endif
					<div style="border:1px solid lightgrey; padding:20px; background-color:#d7dde2;">
						<div style="background-color:#dee0e2;">
				@foreach ($query as $user)

            <td>	 <h2 style="display:inline-block; "> {{$user->id}}</h2></td>
						<td>	 <h2 style="display:inline-block; "> {{$user->student_id}}</h2></td>
				    <td>  <h1 style="display:inline-block; align:center;  text-transform:capitalize;">{{$user->first_name}} {{$user->last_name}}</h1></td>
					<td>	 <h2 style="display:inline-block; "> {{$user->relation}}</h2></td>
					<td>	 <h2 style="display:inline-block; "> {{$user->email}}</h2></td>
					<td>	 <h2 style="display:inline-block; "> {{$user->mobile_phone}}</h2></td>
					<td>	<div style="display:inline;">
						<form action="{{ url('/home/parents/parentsdelete')}}" method="POST">
													@csrf
                          <input type="text" value="{{$user->user_id}}" name="id" style="display:none;">
                          <div data-toggle="collapse" class=" btn btn-primary btn-block" data-target="#demo{{$user->id}}">View More Detail</div>
													<button type="submit" class="btn btn-danger btn-block" >Delete</button>

						</form>

					</div></td>
			</div>
		</div>

 </tr>
 <tr>

    <td colspan="7">
	 <div id="demo{{$user->id}}" class="collapse">
		 <div style="width:95%; height:100%;" class="container">
			 <img style="position:static; width:100%; " src="{{ asset('images/studentscreen1.jpg') }}">
    <div style="min-height:740px;  background-color:lightgrey;">
		<div>
				 <div>
				 <div style="position:absolute; font-size:20px;  margin-left:1.4%; ">First Name</div>
				 <div style="position:absolute; font-size:20px;  margin-left:32.3%; ">Last Name</div>
				 <div style="position:absolute; font-size:20px;  margin-left:63.3%; ">Relation</div>
			   </div>
			 <div style="color:#626468; text-transform:capitalize;">
			 <div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:3%; margin-left:1.4%; overflow:auto;">{{$user->first_name}}</div>
			 <div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:3%; margin-left:32.3%; overflow:auto;">{{$user->last_name}}</div>
			 <div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:3%; margin-left:63.3%; overflow:auto;">{{$user->relation}}</div>
		   </div>
	 </div>
	 <div>
				<div>
				    <div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:7%;">Guardians DOB</div>
			    	<div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:7%;">Education</div>
			     	<div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:7%;">Occupation</div>
				</div>
		    <div style="color:#626468; text-transform:capitalize;">
		      	<div style="position:absolute; padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:10%; margin-left:1.4%; overflow:auto;">{{$user->Guardians_dob}}</div>
			     <div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:10%; margin-left:32.3%; overflow:auto;">{{$user->education}}</div>
			     <div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:10%; margin-left:63.3%; overflow:auto;">{{$user->occupation}}</div>
			  </div>
 	</div>
	<div>
			 <div>
			    <div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:14%;">Income</div>
			    <div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:14%;">Test</div>
			 </div>
			 <div style="color:#626468; text-transform:capitalize;">
					<div style="position:absolute; padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:17%; margin-left:1.4%; overflow:auto;">{{$user->income}}</div>
					<div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:17%; margin-left:32.3%; overflow:auto;">{{$user->test}}</div>
			 </div>
 </div>
 <div>
<h2 style="position:absolute; Color:green; font-size:20px; margin-left:1.5%; margin-top:24%;">Contact Details:-</h2>
 </div>

 <div>
		 <div>
				<div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:28%;">Email</div>
				<div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:28%;">Mobile Phone</div>
				<div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:28%;">Office Phone 1</div>
		 </div>
		 <div style="color:#626468; ">
				<div style="position:absolute; padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:31%; margin-left:1.4%; overflow:auto;">{{$user->email}}</div>
				<div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:31%; margin-left:32.3%; overflow:auto;">{{$user->mobile_phone}}</div>
				<div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:31%; margin-left:63.3%; overflow:auto;">{{$user->office_phone1}}</div>
		 </div>
 </div>
 <div>
		<div>
			 <div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:36%;">office_phone2</div>
			 <div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:36%;">office_address_line1</div>
			 <div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:36%;">office_address_line2</div>
		</div>
		<div style="color:#626468; ">
			 <div style="position:absolute; padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:39%; margin-left:1.4%; overflow:auto;">{{$user->office_phone2}}</div>
			 <div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:39%; margin-left:32.3%; overflow:auto;">{{$user->office_address_line1}}</div>
			 <div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:39%; margin-left:63.3%; overflow:auto;">{{$user->office_address_line2}}</div>
		</div>
 </div>
 <div>
		<div>
			 <div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:43%;">City</div>
			 <div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:43%;">State</div>
			 <div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:43%;">Country Id</div>
		</div>
		<div style="color:#626468; text-transform:capitalize;">
			 <div style="position:absolute; padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:45.5%; margin-left:1.4%; overflow:auto;">{{$user->city}}</div>
			 <div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:45.5%; margin-left:32.3%; overflow:auto;">{{$user->state}}</div>
			 <div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:45.5%; margin-left:63.3%; overflow:auto;">{{$user->country_id}}</div>
		</div>
 </div>
 <div>
	 <div>
			<div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:49.5%;">Test 1</div>
			<div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:49.5%;">Created Date</div>
	 </div>
	 <div style="color:#626468; text-transform:capitalize;">
			<div style="position:absolute; padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:52%; margin-left:1.4%; overflow:auto;">{{$user->test1}}</div>
			<div style="position:absolute;padding: 10px; min-height:25px; width:28%; border-radius:10px;  font-size:18px; font-family:arial;background-color: white; margin-top:52%; margin-left:32.3%; overflow:auto;">{{$user->create_time}}</div>
	 </div>
 </div>



	 </div>
</div>
 </div>
 </td>
 </tr>

	    @endforeach
		</tbody>
				</table>

		</div>

	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->


	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2018 <a href="#">School Admin</a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->

		<script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ asset('js/jquery-migrate-1.0.0.min.js') }}"></script>

		<script src="{{ asset('js/jquery-ui-1.10.0.custom.min.js') }}"></script>

		<script src="{{ asset('js/jquery.ui.touch-punch.js') }}"></script>

		<script src="{{ asset('js/modernizr.js') }}"></script>

		<script src="{{ asset('js/bootstrap.min.js') }}"></script>

		<script src="{{ asset('js/jquery.cookie.js') }}"></script>

		<script src="{{ asset('js/fullcalendar.min.js') }}"></script>

		<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

		<script src="{{ asset('js/excanvas.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>

		<script src="{{ asset('js/jquery.chosen.min.js') }}"></script>

		<script src="{{ asset('js/jquery.uniform.min.js') }}"></script>

		<script src="{{ asset('js/jquery.cleditor.min.js') }}"></script>

		<script src="{{ asset('js/jquery.noty.js') }}"></script>

		<script src="{{ asset('js/jquery.elfinder.min.js') }}"></script>

		<script src="{{ asset('js/jquery.raty.min.js') }}"></script>

		<script src="{{ asset('js/jquery.iphone.toggle.js') }}"></script>

		<script src="{{ asset('js/jquery.uploadify-3.1.min.js') }}"></script>

		<script src="{{ asset('js/jquery.gritter.min.js') }}"></script>

		<script src="{{ asset('js/jquery.imagesloaded.js') }}"></script>

		<script src="{{ asset('js/jquery.masonry.min.js') }}"></script>

		<script src="{{ asset('js/jquery.knob.modified.js') }}"></script>

		<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>

		<script src="{{ asset('js/counter.js') }}"></script>

		<script src="{{ asset('js/retina.js') }}"></script>

		<script src="{{ asset('js/custom.js') }}"></script>
	<!-- end: JavaScript-->
@endsection
