@if(session('session_id') != "")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'School') }}</title>

	<meta name="description" content="School Admin Dashboard">
	<meta name="keyword" content="Dashboard,Admin">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	<!-- start: CSS -->
 <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type='text/css' media="all" />
 <link href="{{ asset('css/halflings.css') }}" rel="stylesheet" type='text/css' media="all" />
 <link href="{{ asset('css/glyphicons.css') }}" rel="stylesheet" type='text/css' media="all" />

  <link href="{{ asset('css/font-awesome-ie7.min.css') }}" rel="stylesheet" type='text/css' media="all" />

	<link id="bootstrap-style" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
  <link id="base-style" href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}

  #myImg {
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
  }

  #myImg:hover {opacity: 0.7;}

  /* The Modal (background) */
  .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
  }

  /* Modal Content (image) */
  .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
  }

  /* Caption of Modal Image */
  #caption {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      text-align: center;
      color: #ccc;
      padding: 10px 0;
      height: 150px;
  }

  /* Add Animation */
  .modal-content, #caption {
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
  }

  @-webkit-keyframes zoom {
      from {-webkit-transform:scale(0)}
      to {-webkit-transform:scale(1)}
  }

  @keyframes zoom {
      from {transform:scale(0)}
      to {transform:scale(1)}
  }

  /* The Close Button */
  .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
  }

  .close:hover,
  .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
  }

  /* 100% Image Width on Smaller Screens */
  @media only screen and (max-width: 700px){
      .modal-content {
          width: 100%;
      }
  }
  </style>



</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{{ asset('/home') }}"><span>School Student</span></a>

        <!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-bell"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>Recently Notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
                   @foreach (session('notifys') as $notify )


                    	<li>
                              <a href="#">
									            	<span class="icon blue"><i class=" icon-bell"></i></span>
									            	<span class="message">{{$notify->headline}}</span>
								            		<span class="time" style="font-size:10px;">{{$notify->create_time}}</span>
                              </a>
                      </li>
                      @endforeach
							                  <li class="dropdown-menu-sub-footer">
                                  <a href="{{ asset('/home/student/notifications') }}" onclick="event.preventDefault();
                      													document.getElementById('notifiaction').submit();">View all notifications</a>
							                 	</li>
							</ul>
						</li>
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
                <span class="badge red">
                {{ session('message_count') }}
                   </span>

							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>Your Recently messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
                @foreach (session('message') as $message )
              	<li>
                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	{{$message->name}}
										  </span>
											<span class="time">
										    	{{$message->create_time}}
										  </span>
										</span>
                    <span class="message">
                    {{substr("$message->title", 0,25)}}
                    </span>
                      </a>
                  </li>
                  @endforeach

								<li>
                  <a href="{{ asset('/home/student/notifications') }}" onclick="event.preventDefault();
                                document.getElementById('messagesList').submit();">View all notifications</a>
               </li>
							</ul>
						</li>

						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>{{ Auth::user()->name }}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#" >
                          <i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"><i class="halflings-icon off"></i>{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
			</div>
		</div>
	</div>
	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{ asset('/home') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a href="{{ asset('/home/student/message') }}"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
            <li><a href="{{ asset('/home/student/notifications') }}" onclick="event.preventDefault();
                          document.getElementById('notification').submit();">
            <form id="notification" action="{{ asset('/home/student/notifications') }}" method="POST" style="display: none;">
                @csrf
            </form><i class="icon-tasks"></i><span class="hidden-tablet"> Notifications</span></a></li>
      	</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
      <main class="py-4">
          @yield('content')
      </main>
</body>
</html>
@else

<script type="text/javascript">
    window.location = "{{ url('/') }}";//here double curly bracket
</script>
@endif
