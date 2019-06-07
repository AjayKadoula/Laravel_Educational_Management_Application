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
				<li><a href="#">Dashboard</a></li>
			</ul>

			<div class="row-fluid">

				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">


					<div class="number">{{$admin_count}}<i class="halflings-icon white user"></i></div>

					<div  style="margin-left:60px; margin-top:-10px;"><h1>Admins</h1>authantication</div>
					<div class="footer">
						<a href="{{ asset('home/admin') }}" onclick="event.preventDefault();
													document.getElementById('admin-form').submit();"> View All List</a>
						<form id="admin-form" action="{{ asset('home/admin') }}" method="POST" style="display: none;">
								@csrf
						</form>
					</div>
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="number">{{$student_count}}<i class="halflings-icon white user"></i></div>
					<div  style="margin-left:60px; margin-top:-10px;"><h1>Student</h1>authantication</div>
					<div class="footer">
						<a href="{{ asset('home/student') }}" onclick="event.preventDefault();
													document.getElementById('student-form').submit();"> View All List</a>
						<form id="student-form" action="{{ asset('home/student') }}" method="POST" style="display: none;">
								@csrf
						</form>
					</div>
				</div>
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					<div class="number">{{$teacher_count}}<i class="halflings-icon white user"></i></div>
					<div  style="margin-left:50px; margin-top:-10px;"><h1>Teachers</h1>authantication</div>
					<div class="footer">
						<a href="{{ asset('home/teacher') }}" onclick="event.preventDefault();
													document.getElementById('teacher-form').submit();"> View All List</a>
													<form id="teacher-form" action="{{ asset('home/teacher') }}" method="POST" style="display: none;">
															@csrf
													</form>
					</div>
				</div>
				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					<div class="number">{{$parents_count}}<i class="halflings-icon white user"></i></div>
					<div  style="margin-left:60px; margin-top:-10px;"><h1>Parents</h1>authantication</div>
					<div class="footer">
						<a href="{{ asset('home/parents') }}" onclick="event.preventDefault();
													document.getElementById('parents-form').submit();"> View All List</a>
													<form id="parents-form" action="{{ asset('home/parents') }}" method="POST" style="display: none;">
															@csrf
													</form>
					</div>
				</div>

			</div>




			<div class="row-fluid hideInIE8 circleStats">

				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox yellow">
						<div class="header"></div>

						<span ><br><br><h1 style="font-size:40px;">Courses</h1></span>
						<div class="footer">

						</div>
                	</div>
				</div>

				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox green">
						<div class="header"></div>

						<span ><br><br><h1>Examination</h1></span>
						<div class="footer">
						</div>
                	</div>
				</div>

				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox red">
						<div class="header"></div>

						<span ><br><br><h1 >Attendance</h1></span>
						<div class="footer">
						</div>
                	</div>
				</div>

				<div class="span2 noMargin" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox pink">
						<div class="header"></div>

						<span ><br><br><h1 >Time Table</h1></span>


						<div class="footer">


						</div>
                	</div>
				</div>

				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox blue">
						<div class="header"></div>
						<span ><br><br><h1 style="font-size:40px;">Fees</h1></span>

						<div class="footer">


						</div>
                	</div>
				</div>

				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox green">
						<div class="header"></div>
						<span ><br><br><h1 style="font-size:40px;">Hostel</h1></span>

						<div class="footer">


						</div>
                	</div>
				</div>

			</div>

			<div class="row-fluid">

		<!--		<a class="quick-button metro yellow span2">
					<i class="icon-group"></i>
					<p>Users</p>
					<span class="badge">237</span>
				</a>
				<a class="quick-button metro red span2">
					<i class="icon-comments-alt"></i>
					<p>Comments</p>
					<span class="badge">46</span>
				</a>
				<a class="quick-button metro blue span2">
					<i class="icon-shopping-cart"></i>
					<p>Orders</p>
					<span class="badge">13</span>
				</a>
				<a class="quick-button metro green span2">
					<i class="icon-barcode"></i>
					<p>Products</p>
				</a>
				<a class="quick-button metro pink span2">
					<i class="icon-envelope"></i>
					<p>Messages</p>
					<span class="badge">88</span>
				</a>
				<a class="quick-button metro black span2">
					<i class="icon-calendar"></i>
					<p>Calendar</p>
				</a>

			</div>/row-->
			<div class="clearfix"></div>
		<div class="row-fluid" style="padding-top:20px;">

			<div class="box black span4" onTablet="span6" onDesktop="span4">
				<div class="box-header">
					<h2><i class="halflings-icon white list"></i><span class="break"></span>Last User IP Address</h2>
					<div class="box-icon">
						<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<ul class="dashboard-list metro">
						@foreach ($users_session_details as $last_users)
						<li>
							<a href="#">
								<i class="icon-arrow-up green"></i>
								<h6 style="text-transform:capitalize;">Name:	{{$last_users->name}}</h6>
								<strong> IP: {{ $last_users->ip_address }}   </strong>
                <strong style="float:right;">Time:{{$last_users->create_time}}</strong>
							</a>
						</li>
					@endforeach
					</ul>
				</div>
			</div><!--/span-->

			<div class="box black span4" onTablet="span6" onDesktop="span4">
				<div class="box-header">
					<h2><i class="halflings-icon white user"></i><span class="break"></span>Last Users</h2>
					<div class="box-icon">
						<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<ul class="dashboard-list metro">
						@foreach ($users_session_details as $last_users)

						<li class="green">
							<br>
							<a href="#">
								<img class="avatar" alt="Dennis Ji" src="{{asset('storage/'.substr($last_users->profile_picture,7))}}">
							</a>
							<strong>Name:</strong> <span Style="text-transform:capitalize;"> {{$last_users->name}}</span><br>
							<strong>Email:</strong> {{$last_users->email}}<br>
							<strong>Time:</strong> {{$last_users->create_time}}
						</li>
           @endforeach
					</ul>
				</div>
			</div><!--/span-->

			<div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
				<div class="box-header">
					<h2><i class="halflings-icon white check"></i><span class="break"></span>Last User Browser</h2>
					<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<div class="todo metro">
						<ul class="todo-list">
           @foreach ($users_session_details as $last_users)
							<li class="blue">
							<h6 style="text-transform:capitalize;">Name:	{{$last_users->name}}</h6>
								<i class="halflings-icon globe" href="#"></i>
								{{$last_users->user_agent}}
								<strong>{{$last_users->create_time}}</strong>
							</li>
						@endforeach
						</ul>
					</div>
				</div>
			</div>

		</div>



	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->


	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2018 <a href="#" alt="#">School Admin</a></span>

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
@endsection
