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
				<li><a href="#">Dashboard</a><i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Fees</a></li>
			</ul>

			 <div class="list-group" class="box span12">
				 <div class="box-header" data-original-title>
			 <h2><i class="icon-eye-open"></i><span class="break"></span>CREATE FEES</h2>
			 <div class="box-icon">
				 <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			 </div>
			</div>
			<div class="box-content">
				<div>
				 @foreach ($errors->all() as $error)
				 <div class="alert alert-danger " style="text-align:center;">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<strong>Error!</strong>		{{ $error }}
				 </div>

				@endforeach
				</div>

	<form class="form-horizontal"enctype="multipart/form-data" action="{{ url('/home/fees/new_fees_create')}}" method="POST">
								@csrf

		<fieldset>
		<div class="control-group">
			<label class="control-label" for="typeahead">Fees Title </label>
			<div class="controls">
			<input type="text" name="fees_title" class="span4 typeahead" id="typeahead"> <span style="margin-left:3%;">Fees Description</span>
			<input type="text" name="fees_description" class="span4 typeahead" id="typeahead">
			</div>

		</div>
		<div class="control-group">
			<div class="controls">
     <b>Applicable to:</b>
		</div>
		</div>

		<div class="control-group">
<label class="control-label" for="selectError3">Select option</label>
<div class="controls">

	<label>
		<select id="selectError3" name="fees_courses" >
		<option>All Courses</option>
		<option>Grade 11</option>
		<option>Grade 12</option>
		<option>Humandity Art</option>
		</select>
		<select id="selectError3"  name="fees_batch" style="margin-left:3%;">
		<option>All Batch</option>
		</select>
		<select id="selectError3" name="fees_category" style="margin-left:3%;">
		<option>All Category</option>
		<option>General</option>
		</select>
	<select id="selectError3"  name="fees_type" style="margin-left:3%;">
		<option>Default</option>
		</select>
	</label>
</div>
</div>
<div class="control-group">
	<label class="control-label" for="typeahead">Fees Amount </label>
	<div class="controls">
	<input type="text" name="fees_amount" class="span9 typeahead" id="typeahead">
	</div>

</div>

		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Save changes</button>
			<button type="reset" class="btn">Reset</button>
		</div>
		</fieldset>
	</form>

</div>

				 </div>
<br><br>
<div class="list-group" class="box span12">
	<div class="box-header" data-original-title>
<h2><i class="icon-eye-open"></i><span class="break"></span>CREATE FEES PARTICULAR CANDIDATE</h2>
<div class="box-icon">
	<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
</div>
</div>
<div class="box-content">
<form class="form-horizontal"enctype="multipart/form-data" action="{{ url('/home/fees/new_fees_create1')}}" method="POST">
							@csrf
<fieldset>
<div class="control-group">
<label class="control-label" for="typeahead">Fees Title </label>
<div class="controls">
<input type="text" name="fees_title" class="span4 typeahead" id="typeahead"> <span style="margin-left:3%;">Fees Description</span>
<input type="text" name="fees_description" class="span4 typeahead" id="typeahead">
</div>

</div>
<div class="control-group">
<div class="controls">
<b>Applicable to Particular Candidate:</b>
</div>
</div>
<div class="control-group">
<label class="control-label" for="typeahead">User Email</label>
<div class="controls">
<input type="email" name="fees_user_email" class="span4 typeahead" id="typeahead"> <span style="margin-left:3%;">Fees Amount</span>
<input type="text" name="fees_amount" class="span4 typeahead" id="typeahead">
</div>


</div>

<div class="form-actions">
<button type="submit" class="btn btn-primary">Save changes</button>
<button type="reset" class="btn">Reset</button>
</div>
</fieldset>
</form>

</div>

	</div>








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
