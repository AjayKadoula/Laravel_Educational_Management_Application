@extends('layouts.appadmin')
@section('content')
	<link href="{{ asset('css/fullcalendar.css') }}" rel="stylesheet" type='text/css' media="all" />

	<!-- start: Content -->

	<!-- start: Content -->
	<div id="content" class="span10">


	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.html">Home</a>
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Widgets</a></li>
	</ul>

	<div class="row-fluid">

		<div class="box black span4" onTablet="span6" onDesktop="span4">
			<div class="box-header">
				<h2><i class="halflings-icon white list"></i><span class="break"></span>Weekly Stat Metro Style</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<ul class="dashboard-list metro">
					<li>
						<a href="#">
							<i class="icon-arrow-up green"></i>
							<strong>92</strong>
							New Comments
						</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-arrow-down red"></i>
						<strong>15</strong>
						New Registrations
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-minus blue"></i>
						<strong>36</strong>
						New Articles
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-comment yellow"></i>
						<strong>45</strong>
						User reviews
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-arrow-up green"></i>
						<strong>112</strong>
						New Comments
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-arrow-down red"></i>
						<strong>31</strong>
						New Registrations
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-minus blue"></i>
						<strong>93</strong>
						New Articles
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-comment yellow"></i>
						<strong>256</strong>
						User reviews
					</a>
					</li>
				</ul>
			</div>
		</div><!--/span-->

		<div class="box black span4" onTablet="span6" onDesktop="span4">
			<div class="box-header">
				<h2><i class="halflings-icon white user"></i><span class="break"></span>Last Users Metro Style</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<ul class="dashboard-list metro">
					<li class="green">
						<a href="#">
							<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
						</a>
						<strong>Name:</strong> Dennis Ji<br>
						<strong>Since:</strong> Jul 25, 2012 11:09<br>
						<strong>Status:</strong> Approved
					</li>
					<li class="yellow">
						<a href="#">
							<img class="avatar" alt="Bill" src="img/avatar.jpg">
						</a>
						<strong>Name:</strong> Dennis Ji<br>
						<strong>Since:</strong> Jul 25, 2012 11:09<br>
						<strong>Status:</strong> Pending
					</li>
					<li class="red">
						<a href="#">
							<img class="avatar" alt="Jane" src="img/avatar.jpg">
						</a>
						<strong>Name:</strong> Dennis Ji<br>
						<strong>Since:</strong> Jul 25, 2012 11:09<br>
						<strong>Status:</strong> Banned
					</li>
					<li class="blue">
						<a href="#">
							<img class="avatar" alt="Kate" src="img/avatar.jpg">
						</a>
						<strong>Name:</strong> Dennis Ji<br>
						<strong>Since:</strong> Jul 25, 2012 11:09<br>
						<strong>Status:</strong> Updated
					</li>
				</ul>
			</div>
		</div><!--/span-->

		<div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
			<div class="box-header">
				<h2><i class="halflings-icon white check"></i><span class="break"></span>To Do List Metro Style</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="todo metro">
					<ul class="todo-list">
						<li class="red">
							<a class="action icon-check-empty" href="#"></a>
							Windows Phone 8 App
							<strong>today</strong>
						</li>
						<li class="red">
							<a class="action icon-check-empty" href="#"></a>
							New frontend layout
							<strong>today</strong>
						</li>
						<li class="yellow">
							<a class="action icon-check-empty" href="#"></a>
							Hire developers
							<strong>tommorow</strong>
						</li>
						<li class="yellow">
							<a class="action icon-check-empty" href="#"></a>
							Windows Phone 8 App
							<strong>tommorow</strong>
						</li>
						<li class="green">
							<a class="action icon-check-empty" href="#"></a>
							New frontend layout
							<strong>this week</strong>
						</li>
						<li class="green">
							<a class="action icon-check-empty" href="#"></a>
							Hire developers
							<strong>this week</strong>
						</li>
						<li class="blue">
							<a class="action icon-check-empty" href="#"></a>
							New frontend layout
							<strong>this month</strong>
						</li>
						<li class="blue">
							<a class="action icon-check-empty" href="#"></a>
							Hire developers
							<strong>this month</strong>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<div class="row-fluid">

		<div class="box span4" onTablet="span6" onDesktop="span4">
			<div class="box-header">
				<h2><i class="halflings-icon white list"></i><span class="break"></span>Weekly Stat Alt.</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<ul class="dashboard-list">
					<li>
						<a href="#">
							<i class="icon-arrow-up green"></i>
							<span class="green">92</span>
							New Comments
						</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-arrow-down red"></i>
						<span class="red">15</span>
						New Registrations
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-minus blue"></i>
						<span class="blue">36</span>
						New Articles
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-comment yellow"></i>
						<span class="yellow">45</span>
						User reviews
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-arrow-up green"></i>
						<span class="green">112</span>
						New Comments
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-arrow-down red"></i>
						<span class="red">31</span>
						New Registrations
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-minus blue"></i>
						<span class="blue">93</span>
						New Articles
					</a>
					</li>
					<li>
					<a href="#">
						<i class="icon-comment yellow"></i>
						<span class="yellow">254</span>
						User reviews
					</a>
					</li>
				</ul>
			</div>
		</div><!--/span-->

		<div class="box span4" onTablet="span6" onDesktop="span4">
			<div class="box-header">
				<h2><i class="halflings-icon white user"></i><span class="break"></span>Last Users Alt.</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<ul class="dashboard-list">
					<li>
						<a href="#">
							<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
						</a>
						<strong>Name:</strong> <a href="#">Dennis Ji</a><br>
						<strong>Since:</strong> Jul 25, 2012 11:09<br>
						<strong>Status:</strong> <span class="label label-success">Approved</span>
					</li>
					<li>
						<a href="#">
							<img class="avatar" alt="" src="img/avatar.jpg">
						</a>
						<strong>Name:</strong> <a href="#">Dennis Ji</a><br>
						<strong>Since:</strong> Jul 25, 2012 11:09<br>
						<strong>Status:</strong> <span class="label label-warning">Pending</span>
					</li>
					<li>
						<a href="#">
							<img class="avatar" alt="" src="img/avatar.jpg">
						</a>
						<strong>Name:</strong> <a href="#">Dennis Ji</a><br>
						<strong>Since:</strong> Jul 25, 2012 11:09<br>
						<strong>Status:</strong> <span class="label label-important">Banned</span>
					</li>
					<li>
						<a href="#">
							<img class="avatar" alt="" src="img/avatar.jpg">
						</a>
						<strong>Name:</strong> <a href="#">Dennis Ji</a><br>
						<strong>Since:</strong> Jul 25, 2012 11:09<br>
						<strong>Status:</strong> <span class="label label-info">Updates</span>
					</li>
				</ul>
			</div>
		</div><!--/span-->

		<div class="box span4 noMargin" onTablet="span12" onDesktop="span4">
			<div class="box-header">
				<h2><i class="halflings-icon white check"></i><span class="break"></span>To Do List Alt.</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="todo">
					<ul class="todo-list">
						<li>
							Windows Phone 8 App <span class="label label-important">today</span>
												<span class="todo-actions">
													<a href="#"><i class="halflings-icon ok"></i></a>
													<a href="#" class="todo-remove"><i class="halflings-icon white remove"></i></a>
												</span>
						</li>
						<li>New frontend layout <span class="label label-important">today</span>
											<span class="todo-actions">
												<a href="#"><i class="halflings-icon ok"></i></a>
												<a href="#" class="todo-remove"><i class="halflings-icon white remove"></i></a>
											</span>
						</li>
						<li>Hire developers <span class="label label-warning">tommorow</span>
											<span class="todo-actions">
												<a href="#"><i class="halflings-icon ok"></i></a>
												<a href="#" class="todo-remove"><i class="halflings-icon white remove"></i></a>
											</span>
						</li>
						<li>Windows Phone 8 App <span class="label label-warning">tommorow</span>
											<span class="todo-actions">
												<a href="#"><i class="halflings-icon ok"></i></a>
												<a href="#" class="todo-remove"><i class="halflings-icon white remove"></i></a>
											</span>
						</li>
						<li>New frontend layout <span class="label label-success">this week</span>
											<span class="todo-actions">
												<a href="#"><i class="halflings-icon ok"></i></a>
												<a href="#" class="todo-remove"><i class="halflings-icon white remove"></i></a>
											</span>
						</li>
						<li>Hire developers <span class="label label-success">this week</span>
											<span class="todo-actions">
												<a href="#"><i class="halflings-icon ok"></i></a>
												<a href="#" class="todo-remove"><i class="halflings-icon white remove"></i></a>
											</span>
						</li>
						<li>New frontend layout <span class="label label-info">this month</span>
											<span class="todo-actions">
												<a href="#"><i class="halflings-icon ok"></i></a>
												<a href="#" class="todo-remove"><i class="halflings-icon white remove"></i></a>
											</span>
						</li>
						<li>Hire developers <span class="label label-info">this month</span>
											<span class="todo-actions">
												<a href="#"><i class="halflings-icon ok"></i></a>
												<a href="#" class="todo-remove"><i class="halflings-icon white remove"></i></a>
											</span>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<hr>

	<div class="row-fluid">

		<div class="box black span6 noMargin" onTablet="span6" onDesktop="span6">
			<div class="box-header">
				<h2><i class="halflings-icon white list"></i><span class="break"></span>Support tickets Metro</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<ul class="tickets metro">
					<li class="ticket blue">
						<a href="#">
							<span class="header">
								<span class="title">Server unavaible</span>
								<span class="number">[ #199278 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority">[ Low priority ]</span>
								<span class="status">Status: [ Complete ]</span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
						<li class="ticket yellow">
						<a href="#">
							<span class="header">
								<span class="title">Mobile App Problem</span>
								<span class="number">[ #199277 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority">[ Normal priority ]</span>
								<span class="status">Status: [ Pending ]</span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
					<li class="ticket red">
						<a href="#">
							<span class="header">
								<span class="title">ARM issue</span>
								<span class="number">[ #199276 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority">[ High priority ]</span>
								<span class="status">Status: [ In progress ]</span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
					<li class="ticket green">
						<a href="#">
							<span class="header">
								<span class="title">IE7 problem</span>
								<span class="number">[ #199275 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority">[ Low priority ]</span>
								<span class="status">Status: [ Rejected ]</span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
					<li class="ticket blue">
						<a href="#">
							<span class="header">
								<span class="title">Server unavaible</span>
								<span class="number">[ #199274 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority">[ Low priority ]</span>
								<span class="status">Status: [ Complete ]</span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
						<li class="ticket yellow">
						<a href="#">
							<span class="header">
								<span class="title">Mobile App Problem</span>
								<span class="number">[ #199273 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority">[ Normal priority ]</span>
								<span class="status">Status: [ Pending ]</span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
					<li class="ticket red">
						<a href="#">
							<span class="header">
								<span class="title">ARM issue</span>
								<span class="number">[ #199272 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority">[ High priority ]</span>
								<span class="status">Status: [ In progress ]</span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div><!--/span-->

		<div class="box black span6" onTablet="span6" onDesktop="span6">
			<div class="box-header">
				<h2><i class="halflings-icon white comment"></i><span class="break"></span>Chat Metro</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<ul class="chat metro yellow">
					<li class="left">
						<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
						<span class="message"><span class="arrow"></span>
							<span class="from">Dennis Ji</span>
							<span class="time">Jul 25, 2012 11:09</span>
							<span class="text">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</span>
						</span>
					</li>
					<li class="right">
						<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
						<span class="message"><span class="arrow"></span>
							<span class="from">Dennis Ji</span>
							<span class="time">Jul 25, 2012 11:08</span>
							<span class="text">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</span>
						</span>
					</li>
					<li class="left">
						<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
						<span class="message"><span class="arrow"></span>
							<span class="from">Dennis Ji</span>
							<span class="time">Jul 25, 2012 11:07</span>
							<span class="text">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</span>
						</span>
					</li>
					<li class="right">
						<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
						<span class="message"><span class="arrow"></span>
							<span class="from">Dennis Ji</span>
							<span class="time">Jul 25, 2012 11:06</span>
							<span class="text">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</span>
						</span>
					</li>
				</ul>
				<div class="chat-form black">
					<textarea></textarea>
					<button class="btn btn-warning">Send message</button>
				</div>
			</div>
		</div><!--/span-->

	</div>

	<div class="row-fluid">

		<div class="box span4" onTablet="span12" onDesktop="span4">
			<div class="box-header">
				<h2><i class="halflings-icon white calendar"></i><span class="break"></span>Calendar</h2>
			</div>
			<div class="box-content">
				<div id="main_calendar_phone"></div>
				<div class="clearfix"></div>
			</div>
		</div><!--/span-->

		<div class="box span4 noMargin" onTablet="span6" onDesktop="span4">
			<div class="box-header">
				<h2><i class="halflings-icon white list"></i><span class="break"></span>Support tickets</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<ul class="tickets">
					<li class="ticket">
						<a href="#">
							<span class="header">
								<span class="title">Server unavaible</span>
								<span class="number">[ #199278 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority blue">[ Low priority ]</span>
								<span class="status">Status: <span class="green">[ Complete ]</span></span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
						<li class="ticket">
						<a href="#">
							<span class="header">
								<span class="title">Mobile App Problem</span>
								<span class="number">[ #199277 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority yellow">[ Normal priority ]</span>
								<span class="status">Status: <span class="yellow">[ Pending ]</span></span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
					<li class="ticket">
						<a href="#">
							<span class="header">
								<span class="title">PayPal issue</span>
								<span class="number">[ #199276 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority red">[ High priority ]</span>
								<span class="status">Status: <span class="blue">[ In progress ]</span></span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
					<li class="ticket">
						<a href="#">
							<span class="header">
								<span class="title">IE7 problem</span>
								<span class="number">[ #199275 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority blue">[ Low priority ]</span>
								<span class="status">Status: <span class="red">[ Rejected ]</span></span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
					<li class="ticket">
						<a href="#">
							<span class="header">
								<span class="title">Server unavaible</span>
								<span class="number">[ #199274 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority blue">[ Low priority ]</span>
								<span class="status">Status: <span class="green">[ Complete ]</span></span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
						<li class="ticket">
						<a href="#">
							<span class="header">
								<span class="title">Mobile App Problem</span>
								<span class="number">[ #199273 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority yellow">[ Normal priority ]</span>
								<span class="status">Status: <span class="yellow">[ Pending ]</span></span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
					<li class="ticket">
						<a href="#">
							<span class="header">
								<span class="title">PayPal issue</span>
								<span class="number">[ #199272 ]</span>
							</span>
							<span class="content">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="name">Dennis Ji</span>
								<span class="priority red">[ High priority ]</span>
								<span class="status">Status: <span class="blue">[ In progress ]</span></span>
								<span class="date">Jul 25, 2012 11:09</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div><!--/span-->

		<div class="box span4" onTablet="span6" onDesktop="span4">
			<div class="box-header">
				<h2><i class="halflings-icon white comment"></i><span class="break"></span>Chats</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<ul class="chat">
					<li class="left">
						<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
						<span class="message"><span class="arrow"></span>
							<span class="from">Dennis Ji</span>
							<span class="time">Jul 25, 2012 11:09</span>
							<span class="text">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</span>
						</span>
					</li>
					<li class="right">
						<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
						<span class="message"><span class="arrow"></span>
							<span class="from">Dennis Ji</span>
							<span class="time">Jul 25, 2012 11:08</span>
							<span class="text">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</span>
						</span>
					</li>
					<li class="left">
						<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
						<span class="message"><span class="arrow"></span>
							<span class="from">Dennis Ji</span>
							<span class="time">Jul 25, 2012 11:07</span>
							<span class="text">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</span>
						</span>
					</li>
					<li class="right">
						<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
						<span class="message"><span class="arrow"></span>
							<span class="from">Dennis Ji</span>
							<span class="time">Jul 25, 2012 11:06</span>
							<span class="text">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</span>
						</span>
					</li>
				</ul>
				<div class="chat-form">
					<textarea></textarea>
					<button class="btn btn-info">Send message</button>
				</div>
			</div>
		</div><!--/span-->

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
