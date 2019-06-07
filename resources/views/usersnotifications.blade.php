@extends('layouts.appstudent')
@section('content')
	<link href="{{ asset('css/jquery.cleditor.css') }}" rel="stylesheet" type='text/css' />

	<!-- start: Content -->
	<div id="content" class="span10">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="#">Home</a>
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<i class="icon-edit"></i>
			<a href="#">Notification</a>
		</li>
	</ul>
	<div class="row-fluid">

	<div class="span12">
		<h1>Notification</h1>

		<div class="priority high"><span>Recently 15 Notification</span></div>
@foreach ($query as $notify)


		<div class="task high">
			<div class="desc">

				<summary class="title"> {{$notify->headline}}
				</summary>
				@if($notify->brief !="")
				<details>
				<div><?php echo $notify->brief ;?></div>
				@if($notify->file!="")
		  	<div >
					<a href="{{asset('storage/'.substr($notify->file,7))}}" download>
              <i style="margin-left:5px;" class="halflings-icon download"></i>
							File:- {{ $notify->file_name }}
					</a>
		  	</div>
			@endif
			</details>
		@endif
			</div>

			<div class="time">
				<div class="date" style="font-size:20px;">{{$date}}<span style="font-size:10px;"> Days Before</span></div>
			<div style="font-size:8px;">{{$notify->create_time}}</div>
			</div>
		</div>
		<div class="clearfix"></div>
@endforeach


	</div>



		</div>
	</div>

	</div>

</div>
<br><br>
	<div class="row-fluid sortable">

	</div><!--/row-->


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
