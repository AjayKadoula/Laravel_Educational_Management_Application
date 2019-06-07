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

					<li><a href="#">Teacher Details</a></li>
				</ul>
				<div style="padding-bottom:20px;">
				 <div style="float:right;">
					<!-- <a href="{{ asset('/home/student/Pending') }}"   class="btn btn-primary"> New Admissions</a> -->
					 <a style="margin-left:125px;" href="{{ asset('/home/teacher_registration') }}"   class="btn btn-primary"> Create New Teacher</a>
					 <!--  <a href="{{ asset('/home/student/Pending') }}"   class="btn btn-primary"> Manage Student Details</a> -->

				 <div style="padding-top:10px;" class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div>
				 </div>

					 <div class="os-overview-block" style="display:inline-block;" >

						 <div >
							 <div class="overviewbox ovbox1">
									 <h1><strong>Total Teacher</strong></h1>
														 <div class="ovrBtm">{{$teacher_count}}</div>
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
<table  class="table table-bordered">
<thead>
<tr>
	<th>Profile</th>
	<th>Firstname</th>
	<th>Email</th>
	<th>Delete</th>
</tr>
	</thead>
	<tbody>
		<tr>
			<div style="border:1px solid lightgrey; padding:20px; background-color:#d7dde2;">
				<div style="background-color:#dee0e2;">
		@foreach ($query as $user)


				<td><span ><img style="width:100px; height:100px;" src="{{asset('storage/'.substr($user->profile_picture,7))}}"></span></td>
				<td>  <h1 style="display:inline-block; align:center;  text-transform:capitalize;">{{$user->name}}</h1></td>
			<td>	 <h2 style="display:inline-block; "> {{$user->email}}</h2></td>
			<td>	<div style="display:inline;">
				<form action="{{ url('/home/admin/delete')}}" method="POST">
											@csrf
											<input type="text" value="{{$user->id}}" name="id" style="display:none;">
											<button type="submit" class="btn btn-danger btn-lg" >Delete</button>
				</form></div></td>
	</div>
</div>

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
