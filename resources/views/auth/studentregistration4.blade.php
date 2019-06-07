

@if(session('student_id') != "")

<!doctype html>
<html>

<head>
	<title>Success Finished</title>
	<meta name="viewport" content="width=1024">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
window.scrollTo(0,0);
		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- /fonts -->
	<!-- css -->
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type='text/css' media="all" />
	<link href="{{ asset('css/registernew.css') }}" rel="stylesheet" type='text/css' media="all" />
	<!-- /css -->
</head>

<body>

	<div class="content-agileits">
		<h1 class="title">Student Enrolment - Finish</h1>
		<form enctype="multipart/form-data" id="center-upload-form" action="{{ URL::to('/Registration_store4') }}" method="post">
			@csrf
		 <div style="display:none">
			 <input type="hidden" value="af22b8f3a43fe074cfa5daf43f6250eba767f1bc" name="YII_CSRF_TOKEN" />
		 </div>
    <div style="background:#ccc; padding:50px;">
<a href="{{ asset('/') }}"  style="color:white; float:left; margin-top: 25px;" class="btn btn-primary">Go To Home</a>
      <div class="pagination ">

        <a class="active" href="{{ asset('studentregistration') }}" style="border:1px solid white; border-radius:50%;" target="_self" title="Student Enrolment - Student Information">1</a>
        <a  class="active" href="{{ asset('studentregistration2') }}" style="border:1px solid white; border-radius:50%;" title="Parent Information">2</a>
        <a class="active" href="{{ asset('studentregistration3') }}" style="border:1px solid white; border-radius:50%;" title="Documents Upload">3</a>
        <a class="active" href="{{ asset('studentregistration3') }}"style="border:1px solid black; border-radius:50%;" title="Finish">4</a>
      </div>
	<div>		<h1  style="font-size:40px; text-align:center;">ENROLLMENT FINISHED</h1>
<h2 style="background-color:#dee3ea; padding:5px;">
		The application has been submitted to School for further processing.<br>
<strong style=" font-weight: bold; ">		Your application number is :-  <?php $student_id = session('student_id'); echo $student_id; ?></strong>
	<br><i>	A message with the application summary will be send to the registered email.
		Please make note of the information as it is needed for all communications with  School regarding this application.	If you have any questions about the application review process, we encourage you to contact us at admin@example.com</i>
</h2><br>

<input type="submit"  style="float:right;" value="Register & Finish" class="btn btn-success">
</div>
</form>


    </div>

		<div class="clear"></div>
	</div>

	<!-- js -->
	<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<!-- //js -->

	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
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
</script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript">

jQuery(function($) {
jQuery('body').undelegate('#yt0','click').delegate('#yt0','click',function(){return confirm('Are you sure?');});
jQuery('#Students_date_of_birth').datepicker({'showAnim':'fold','dateFormat':'d M yy','changeMonth':true,'changeYear':true,'yearRange':'1900:'});
});

</script>
	<!-- /js files -->
</body>

</html>

@else

<script type="text/javascript">
    window.location = "{{ url('/home') }}";//here double curly bracket
</script>
@endif
