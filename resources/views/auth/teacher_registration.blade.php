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

					<li><a href="#">Teachers Details</a>
					<i class="icon-angle-right"></i>
				</li>
					<li><a href="#">Teacher Registration</a></li>
				</ul>


				<div class="container-fluid-full" >
				<div class="row-fluid" >

					<div class="row-fluid">
						<div class="login-box">
							<div class="icons">
								<a href="{{ asset('/home') }}"><i class="halflings-icon home"></i></a>

							</div>
							<div>
							 @foreach ($errors->all() as $error)
							 <div class="alert alert-danger " style="text-align:center;">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<strong>Error!</strong>		{{ $error }}
							 </div>

							@endforeach
							</div>
						<center>	<h1>Create Teacher Account</h1></center>

							<form autocomplete="on" enctype="multipart/form-data" id="students-_step1-form" action="{{asset('/home/teacher_registration') }}" method="POST">
								@csrf
				       <div style="display:none"><input type="hidden" value="af22b8f3a43fe074cfa5daf43f6250eba767f1bc" name="YII_CSRF_TOKEN" /></div>
				      <fieldset>

									<div class="input-prepend" title="Username">
										<span class="add-on"><i class="halflings-icon user"></i></span>
										<input class="input-large span10" name="username" id="username" type="text" placeholder="Enter User Full Name"/>
									</div>
									<div class="input-prepend" title="E-Mail">
										<span class="add-on"><i class="halflings-icon user"></i></span>
										<input class="input-large span10" name="email" id="username" type="email" placeholder="Enter E-mail"/>
									</div>
									<div class="input-prepend" title="Password">
										<span class="add-on"><i class="halflings-icon lock"></i></span>
										<input class="input-large span10" name="password" minlength="6" id="password" type="password" placeholder="Enter Password"/>
									</div>
									<div class="clearfix"></div>
									<div class="input-prepend" title="Upload Photo">
									<h4 class="text-success">Upload Photo</h4>
									 <div class="row mb10">
											<div class="col-sm-12">
											<div class="custm_file">
													<input id="ytStudents_photo_data" type="hidden" value="" name="image" />
													<input  onchange="return fileValidation()" required="required" name="image" id="Students_photo_data" type="file" />
													<span id="display-file-name"> <div id="imagePreview"></div></span>

											 </div>

											<div class="row mb12">
																<div id="image_size_error" style="color:#F00;"></div>
																<div style="padding-left:10px;" class="upload_file_not">Maximum file size is 1MB. Allowed file types are png,gif,jpeg,jpg</div>
											</div>
											</div>
									</div>
									</div>


									<div class="button-login">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
									<div class="clearfix"></div>
							</form>
							<hr>

						</div><!--/span-->
					</div><!--/row-->


			</div><!--/.fluid-container-->


	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->


	<div class="clearfix"></div>

	<footer>
		<script src="{{ asset('js/validator.min.js') }}"></script>
		<script type="text/javascript">
	$('#submit_button_form').click(function(ev) {
		var file_size = $('#Students_photo_data')[0].files[0].size;
		if(file_size>1048576)//File upload size limit to 1mb
		{
			$('#image_size_error').html('File size is greater than 1MB');
			return false;
		}
	});


	function readFileName() {
		var name	= $('#Students_photo_data')[0].files[0].name;
		$('#display-file-name').html(name);
	}
	function fileValidation(){
			var fileInput = document.getElementById('Students_photo_data');
			var filePath = fileInput.value;
			var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
			if(!allowedExtensions.exec(filePath)){
					alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
					fileInput.value = '';
					return false;
			}else{
					//Image preview
					if (fileInput.files && fileInput.files[0]) {
							var reader = new FileReader();
							reader.onload = function(e) {
									document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
							};
							reader.readAsDataURL(fileInput.files[0]);
					}
			}
	}
	</script>


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
