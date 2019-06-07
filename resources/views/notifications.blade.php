@extends('layouts.appadmin')
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

	<div class="span5">
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
				<div class="date" style="font-size:11px;">{{$notify->create_time}}<span style="font-size:8px;"> time</span></div>

			</div>
		</div>
		<div class="clearfix"></div>
@endforeach


	</div>

	<div class="span7 noMarginLeft">

		<div class="dark">

		<h1>Create Notification</h1>

		<div class="timeline">
			<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="halflings-icon white edit"></i><span class="break"></span>Create A New Notification</h2>
					<div class="box-icon">
						<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<form class="form-horizontal" enctype="multipart/form-data" action="{{ url('/home/notifications/Create_New_Notifiactions')}}" method="POST">
												@csrf

						<fieldset>
						<div class="control-group">
							<label class="control-label" >Notification Headline <span style="color:red;">*</span> </label>
							<div class="controls">
							<input type="text" required="required" class="span6 typeahead" name="headline" id="typeahead"  >
							<p class="help-block"> Enter The Notification Headline</p>
							</div>
						</div>
				<!--		<div class="control-group">
							<label class="control-label" for="date01">Date input</label>
							<div class="controls">
							<input type="text" class="input-xlarge datepicker" id="date01" >
							</div>
						</div>-->
	          
						<div class="control-group">
							<label class="control-label" for="fileInput">File input</label>
							<div class="controls">
							<input class="input-file uniform_on" name="file" id="fileInput" type="file">
							<p class="help-block"> You May Give Any File With Notification</p>
							</div>
						</div>
						<div class="control-group hidden-phone">
							<label class="control-label" for="textarea2">Notification Textarea</label>
							<div class="controls">
							<textarea class="cleditor" name="brief" id="textarea2" rows="3"></textarea>
							<p class="help-block"> Enter Brief Notification Details</p>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Save changes</button>
							<button type="reset" class="btn">Reset</button>
						</div>
						</fieldset>
					</form>

				</div>
			</div><!--/span-->


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
