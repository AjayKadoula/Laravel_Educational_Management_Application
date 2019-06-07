@extends('layouts.appadmin')
@section('content')
	<link href="{{ asset('css/fullcalendar.css') }}" rel="stylesheet" type='text/css' media="all" />

	<!-- start: Content -->
	<div id="content" class="span10">


				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="index.html">Home</a>
						<i class="icon-angle-right"></i>
					</li>
					<li><a href="#">Charts</a></li>
				</ul>

				<div class="row-fluid">

					<div class="box">
						<div class="box-header">
							<h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Chart with points</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							<div id="sincos"  class="center" style="height:300px;" ></div>
							<p id="hoverdata">Mouse position at (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>
						</div>
					</div>

					<div class="box">
						<div class="box-header">
							<h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Flot</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							<div id="flotchart" class="center" style="height:300px"></div>
						</div>
					</div>

					<div class="box">
						<div class="box-header">
							<h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Stack Example</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							 <div id="stackchart" class="center" style="height:300px;"></div>

							<p class="stackControls center">
								<input class="btn" type="button" value="With stacking">
								<input class="btn" type="button" value="Without stacking">
							</p>

							<p class="graphControls center">
								<input class="btn-primary" type="button" value="Bars">
								<input class="btn-primary" type="button" value="Lines">
								<input class="btn-primary" type="button" value="Lines with steps">
							</p>
						</div>
					</div>

				</div><!--/row-->

				<div class="row-fluid sortable">
					<div class="box span6">
						<div class="box-header">
							<h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Pie</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
							</div>
						</div>
						<div class="box-content">
								<div id="piechart" style="height:300px"></div>
						</div>
					</div>

					<div class="box span6">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Donut</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							 <div id="donutchart" style="height: 300px;"></div>
						</div>
					</div>

				</div><!--/row-->

				<hr>

				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header">
							<h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Realtime</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							 <div id="realtimechart" style="height:190px;"></div>
							 <p>You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
							 <p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds</p>
						</div>
					</div>
				</div><!--/row-->

				<div class="row-fluid">

					<div class="widget span6" onTablet="span6" onDesktop="span6">
						<h2><span class="glyphicons facebook"><i></i></span>Facebook Fans</h2>
						<hr>
						<div class="content">
							<div id="facebookChart" style="height:300px" ></div>
						</div>
					</div><!--/span-->

					<div class="widget span6" onTablet="span6" onDesktop="span6">
						<h2><span class="glyphicons twitter"><i></i></span>Twitter Followers</h2>
						<hr>
						<div class="content">
							<div id="twitterChart" style="height:300px" ></div>
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
