@extends('layouts.appadmin')
@section('content')

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

					<li>
						<a href="#">Students Details</a>
						<i class="icon-angle-right"></i>
					</li>
					<li><a href="{{ asset('/home/student/Pending') }}">New Students Details</a></li>
				</ul>

			<div class="list-group">
				@if($errors->any())
			<center>	<h4 style="color:green;">{{$errors->first()}}</h4></center>
				@endif
		<table style="background-color:;" class="table table-bordered">
   	<thead>
		<tr>
			<th>Profile</th>
			<th>Firstname</th>
			<th>Email & Phone No</th>
			<th>Delete</th>
		</tr>
     	</thead>
      <tbody>

				<tr>
					<div style="border:1px solid lightgrey; padding:20px; background-color:#d7dde2;">
						<div style="background-color:#dee0e2;">
				@foreach ($query as $user)


						<td><span ><img style="width:100px; height:100px;" src="{{asset('storage/'.substr($user->student_image,7))}}"></span></td>
            <td>  <h1 style="display:inline-block; align:center;  text-transform:capitalize;">{{$user->first_name}}</h1></td>
					<td>	 <h2 style="display:inline-block; "> {{$user->email}} </h2><h2>{{$user->phone1}}</h2> </td>
					<td>	<div style="display:inline;">
						<form action="{{ url('/home/admin/accept')}}" method="POST">
													@csrf
													<input type="text" value="{{$user->first_name}} {{$user->last_name}}" name="name" style="display:none;">
													<input type="text" value="{{$user->email}}" name="email" style="display:none;">

													<input type="text" value="School.{{$user->id}}" name="password" style="display:none;">
                          <input type="text" value="{{$user->id}}" name="student_id" style="display:none;">
												<button type="submit" class="btn btn-success btn-block">Accept</button>


						</form>
						<form style="margin-top:-15px;" action="{{ url('/home/student/Pending/delete')}}" method="POST">
													@csrf
                          <input type="text" value="{{$user->id}}" name="id" style="display:none;">
												 <button type="submit" class="btn btn-danger btn-lg btn-block" >Delete</button>
													<div data-toggle="collapse" class=" btn btn-primary btn-block" data-target="#demo{{$user->id}}">View More Detail</div>
        	</form>
					<form style="margin-top:-15px;" action="{{ url('/home/admin/studentdocument')}}" method="POST">
												@csrf
												<input type="text" value="{{$user->id}}" name="id" style="display:none;">

				<button type="submit" data-toggle="collapse" class=" btn btn-primary btn-block" data-target="#dem{{$user->id}}">View Documents</button>
         </form>


					</div>

					</td>



 </tr>
 <tr>

    <td colspan="4">
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

@if($user1->student_id == $user->id)
 <tr>
	 <td colspan="4">
		 <div  class="container" class="collapse" style=" margin-left:33%;">
			 <img id="myImg{{$user1->id}}" src="{{asset('storage/'.substr($user1->StudentDocument,7))}}" alt="Snow" style="width:100%;max-width:300px">

		 </div>
<!-- The Modal -->
<div style="overflow-y: scroll ;height:100%; margin-left:1%;" id="myModal{{$user1->id}}"  class="modal">
  <span id="close{{$user1->id}}" class="close">&times;</span>
  <img style="overflow-y: scroll ;height:100%; " class="modal-content" id="img01{{$user1->id}}">
  <div  id="caption{{$user1->id}}"></div>
</div>


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
		</div>
	</div>
		</tbody>
				</table>

		</div>

	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

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
