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

					<li><a href="#">Students Details</a></li>
				</ul>
     <div style="padding-bottom:20px;">
			<div style="float:right;">
				<a href="{{ asset('/home/student/Pending') }}"   class="btn btn-primary"> New Admissions</a>
				<a href="{{ asset('studentregistration') }}"   class="btn btn-primary"> Create New Student</a>
				<!--  <a href="{{ asset('/home/student/Pending') }}"   class="btn btn-primary"> Manage Student Details</a> -->

			<div style="padding-top:10px;" class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div>
		  </div>

				<div class="os-overview-block" style="display:inline-block;" >

					<div >
						<div class="overviewbox ovbox1">
					    	<h1><strong>Total Students</strong></h1>
					                <div class="ovrBtm">{{$student_count}}</div>
					    </div>
					    <div class="overviewbox ovbox2">
					    	<h1><strong>New Admissions</strong></h1>
					        <div class="ovrBtm">{{$New_student_count}}</div>
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
			<th>Roll No</th>
			<th>Profile</th>
			<th>Name</th>
			<th>Course/Batch</th>
			<th>Email</th>
			<th>Gender</th>
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
						<td><span ><img style="width:100px; height:100px;" src="{{asset('storage/'.substr($user->student_image,7))}}" /></span></td>
            <td>  <h1 style="display:inline-block; align:center;  text-transform:capitalize;">{{$user->first_name}} {{$user->last_name}}</h1></td>
					<td>	 <h2 style="display:inline-block; "> {{$user->national_student_id}}/{{$user->batch_id}}</h2></td>
					<td>	 <h2 style="display:inline-block; "> {{$user->email}}</h2></td>
					<td>	 <h2 style="display:inline-block; "> {{$user->gender}}</h2></td>
					<td>	<div style="display:inline;">
						<form action="{{ url('/home/student/userdelete')}}" method="POST">
													@csrf
                          <input type="text" value="{{$user->user_id}}" name="id" style="display:none;">
                          <div data-toggle="collapse" class=" btn btn-primary btn-block" data-target="#demo{{$user->id}}">View More Detail</div>
													<button type="submit" class="btn btn-danger btn-block" >Delete</button>

						</form>
						<form style="margin-top:-15px;" action="{{ url('/home/admin/studentdocument1')}}" method="POST">
													@csrf
													<input type="text" value="{{$user->user_id}}" name="id" style="display:none;">

					<button type="submit" data-toggle="collapse" class=" btn btn-primary btn-block" data-target="#dem{{$user->id}}">View Documents</button>
	         </form>
					</div></td>
			</div>
		</div>

 </tr>
 <tr>

		<td colspan="7">
	<div id="demo{{$user->id}}" class="collapse">
		<div style="width:95%; height:100%;" class="container">
			<img style="position:static; width:100%; " src="{{ asset('images/studentscreen2.jpg') }}">
		<div style="min-height:1200px;  background-color:lightgrey;">
	 <div>
				<div>
				<div style="position:absolute; font-size:20px;  margin-left:1.4%; ">First Name</div>
				<div style="position:absolute; font-size:20px;  margin-left:32.3%; ">Middle Name</div>
				<div style="position:absolute; font-size:20px;  margin-left:63.3%; ">Last Name</div>
				</div>
			<div style="color:grey; text-transform:capitalize;">
			<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:3%; margin-left:1.4%; overflow:auto;">{{$user->first_name}}</div>
			<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:3%; margin-left:32.3%; overflow:auto;">{{$user->middle_name}}</div>
			<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:3%; margin-left:63.3%; overflow:auto;">{{$user->last_name}}</div>
			</div>
	</div>
	<div>
			 <div>
					 <div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:7%;">Student Id</div>
					 <div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:7%;">Batch</div>
					 <div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:7%;">Date Of Birth</div>
			 </div>
			 <div style="color:grey; text-transform:capitalize;">
					 <div style="position:absolute; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:10%; margin-left:1.4%; overflow:auto;">{{$user->national_student_id}}</div>
					<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:10%; margin-left:32.3%; overflow:auto;">{{$user->batch_id}}</div>
					<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:10%; margin-left:63.3%; overflow:auto;">{{$user->date_of_birth}}</div>
			 </div>
	 </div>
 <div>
			<div>
				 <div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:14%;">Birth Place</div>
				 <div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:14%;">Nationality</div>
				 <div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:14%;">Language</div>
			</div>
			<div style="color:grey; text-transform:capitalize;">
				 <div style="position:absolute; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:17%; margin-left:1.4%; overflow:auto;">{{$user->birth_place}}</div>
				 <div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:17%; margin-left:32.3%; overflow:auto;">{{$user->nationality_id}}</div>
				 <div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:17%; margin-left:63.3%; overflow:auto;">{{$user->language}}</div>
			</div>
 </div>
 <div>
		 <div>
				<div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:21%;">Religion</div>
				<div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:21%;">Blood Group</div>
				<div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:21%;">Category</div>
		 </div>
		 <div style="color:grey; text-transform:capitalize;">
				<div style="position:absolute; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:24%; margin-left:1.4%; overflow:auto;">{{$user->religion}}</div>
				<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:24%; margin-left:32.3%; overflow:auto;">{{$user->blood_group}}</div>
				<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:24%; margin-left:63.3%; overflow:auto;">{{$user->student_category_id}}</div>
		 </div>
 </div>
 <div>
		<div>
			 <div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:28%;">Gender</div>
			 <div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:28%;">Checkbox</div>
			 <div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:28%;">Demo</div>
		</div>
		<div style="color:grey; text-transform:capitalize;">
			 <div style="position:absolute; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:31%; margin-left:1.4%; overflow:auto;">{{$user->gender}}</div>
			 <div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:31%; margin-left:32.3%; overflow:auto;">{{$user->checkbox}}</div>
			 <div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:31%; margin-left:63.3%; overflow:auto;">{{$user->demo}}</div>
		</div>
 </div>
 <div>
	 <div>
			<div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:36%;">Height</div>
			<div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:36%;">Demo1</div>
			<div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:36%;">Demo2</div>
	 </div>
	 <div style="color:grey; text-transform:capitalize;">
			<div style="position:absolute; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:39%; margin-left:1.4%; overflow:auto;">{{$user->height}}</div>
			<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:39%; margin-left:32.3%; overflow:auto;">{{$user->demo1}}</div>
			<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:39%; margin-left:63.3%; overflow:auto;">{{$user->demo2}}</div>
	 </div>
 </div>
 <div>
	 <div>
			<div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:43%;">Demo3</div>
			<div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:43%;">Demo4</div>
			<div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:43%;">Demo5</div>
	 </div>
	 <div style="color:grey; text-transform:capitalize;">
			<div style="position:absolute; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:45.5%; margin-left:1.4%; overflow:auto;">{{$user->demo3}}</div>
			<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:45.5%; margin-left:32.3%; overflow:auto;">{{$user->demo4}}</div>
			<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:45.5%; margin-left:63.3%; overflow:auto;">{{$user->demo5}}</div>
	 </div>
 </div>
 <div>
	<div>
		 <div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:49.5%;">Demo6</div>
		 <div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:49.5%;">Demo7</div>
		 <div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:49.5%;">Demo8</div>
	</div>
	<div style="color:grey; text-transform:capitalize;">
		 <div style="position:absolute; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:52%; margin-left:1.4%; overflow:auto;">{{$user->demo6}}</div>
		 <div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:52%; margin-left:32.3%; overflow:auto;">{{$user->dem}}</div>
		 <div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:52%; margin-left:63.3%; overflow:auto;">{{$user->dem1}}</div>
	</div>
 </div>
 <div>
 <div>
		<div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:56%;">Demo9</div>
 </div>
 <div style="color:grey; text-transform:capitalize;">
		<div style="position:absolute; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:59%; margin-left:1.4%; overflow:auto;">{{$user->demo7}}</div>
 </div>
 </div>
 <div style="color:green;margin-left:1.8%; position:absolute; margin-top:64%;" >
	 <h2>Contact Detail: </h2>
 </div>
 <div>
 <div>
		<div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:67%;">Address Line1</div>
		<div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:67%;">Address Line2</div>
		<div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:67%;">City</div>
 </div>
 <div style="color:grey; ">
		<div style="position:absolute; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:70%; margin-left:1.4%; overflow:auto; ">{{$user->address_line1}}</div>
		<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:70%; margin-left:32.3%; overflow:auto;">{{$user->address_line2}}</div>
		<div style="position:absolute; text-transform:capitalize; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:70%; margin-left:63.3%; overflow:auto;">{{$user->city}}</div>
 </div>
 </div>
 <div>
 <div>
	 <div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:75%;">State</div>
	 <div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:75%;">Pin Code</div>
	 <div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:75%;">Country</div>
 </div>
 <div style="color:grey; text-transform:capitalize;">
	 <div style="position:absolute; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:78%; margin-left:1.4%; overflow:auto;">{{$user->state}}</div>
	 <div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:78%; margin-left:32.3%; overflow:auto;">{{$user->pin_code}}</div>
	 <div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:78%; margin-left:63.3%; overflow:auto;">{{$user->country_id}}</div>
 </div>
 </div>
 <div>
 <div>
	<div style="position:absolute; font-size:20px;  margin-left:1.4%; margin-top:82%;">Phone</div>
	<div style="position:absolute; font-size:20px;  margin-left:32.3%; margin-top:82%;">Phone 2</div>
	<div style="position:absolute; font-size:20px;  margin-left:63.3%; margin-top:82%;">Email</div>
 </div>
 <div style="color:grey; ">
	<div style="position:absolute; padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:85%; margin-left:1.4%; overflow:auto;">{{$user->phone1}}</div>
	<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:85%; margin-left:32.3%; overflow:auto;">{{$user->phone2}}</div>
	<div style="position:absolute;padding: 10px; width:28%; border-radius:10px; min-height:20px; font-size:18px; font-family:arial;background-color: white; margin-top:85%; margin-left:63.3%; overflow:auto;">{{$user->email}}</div>
 </div>
 </div>

	</div>
</div>
 </div>
 </td>
 </tr>
 @if ($query1 != "" )
 @foreach ($query1 as $user1)

@if($user1->student_id == $user->user_id)
 <tr>
	<td colspan="7">
		<h1>{{$user1->document_type}}</h1>
		<div  class="container" class="collapse" style=" margin-left:33%;">
			<img id="myImg{{$user1->id}}" src="{{asset('storage/'.substr($user1->StudentDocument,7))}}" alt="Snow" style="width:100%;max-width:300px">
<a style="margin-left:-110px; margin-top:30%; float:top;" href="{{asset('storage/'.substr($user1->StudentDocument,7))}}" download class="btn"><i class="fa fa-download"></i> Download</a>
		</div>
<!-- The Modal -->
<div style="overflow-y: scroll ;height:100%; margin-left:1%;" id="myModal{{$user1->id}}"  class="modal">
	<span id="close{{$user1->id}}" class="close">&times;</span>
	<img style="overflow-y: scroll ;height:100%; " class="modal-content" id="img01{{$user1->id}}">

	<div  id="caption{{$user1->id}}"></div>
</div>
<p><h2>Upladed At Time:</h2>{{$user1->create_time}}</p>

<script>
// Get the modal
var modal = document.getElementById('myModal{{$user1->id}}');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg{{$user1->id}}');
var modalImg = document.getElementById("img01{{$user1->id}}");
var captionText = document.getElementById("caption{{$user1->id}}");
img.onclick = function(){
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementById("close{{$user1->id}}");

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
		modal.style.display = "none";
}
</script>
</td>
</tr>
	@endif

 @endforeach
	@endif
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
