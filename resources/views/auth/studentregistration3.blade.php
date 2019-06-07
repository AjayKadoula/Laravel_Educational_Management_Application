@if(session('student_id') != "")
<!doctype html>
<html>

<head>
	<title>Documents Upload</title>
	<meta name="viewport" content="width=1024">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.js"></script>
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
	<link href="{{ asset('css/style.default.css') }}" rel="stylesheet" type='text/css' media="all" />
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type='text/css' media="all" />
	<link href="{{ asset('css/registernew.css') }}" rel="stylesheet" type='text/css' media="all" />
	<!-- /css -->
</head>

<body style="overflow: scroll;">



	<div class="content-agileits">
		<h1 class="title">Student Enrolment - Documents Upload</h1>

    <div style="background:#ccc; padding:20px;">
       <a href="{{ asset('/') }}"  style="color:white; float:left; margin-top: 25px;" class="btn btn-primary">Go To Home</a>
      <div class="pagination ">

        <a class="active" href="{{ asset('studentregistration') }}" style="border:1px solid white; border-radius:50%;" target="_self" title="Student Enrolment - Student Information">1</a>
        <a  class="active" href="{{ asset('studentregistration2') }}" style="border:1px solid white; border-radius:50%;" title="Parent Information">2</a>
        <a class="active" href="{{ asset('studentregistration3') }}" style="border:1px solid black; border-radius:50%;" title="Documents Upload">3</a>
        <a href="#" title="Finish">4</a>
      </div>
     <?php $id = session()->get( 'StudentDocument' ); ?>
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger " style="text-align:center;">
			 <a href="#" class="close" data-dismiss="alert">&times;</a>
			 <strong>Error!</strong>		{{ $error }}
			</div>

		 @endforeach
			<form enctype="multipart/form-data"  autocomplete="on" id="center-upload-form" action="{{ URL::to('/Registration_store3') }}" method="post">
				@csrf
			 <div style="display:none">
				 <input type="hidden" value="af22b8f3a43fe074cfa5daf43f6250eba767f1bc" name="YII_CSRF_TOKEN" />
			 </div>
       <div class="form">
                	<div class="os_panel-body os_online_mandatory">
                        <div class="row" id="innerDiv">
                          <div class="col-md-12">
                             <div class="row">
                               <div class="documnt_addlist">
                                  <div class="col-md-6">
									                  <label for="StudentDocument_Document">Document</label>
                                  <div class="choosen-box">
										                <select class="form-control mb15 title-field" name="document_type" id="StudentDocument_title">
		                									<option value="">Select Document Type</option>
										                	<option value="ID Proof">ID Proof</option>
											                <option value="Transfer Certificate">Transfer Certificate</option>
                                   </select>
										               <span style="color:red;" class="title-error"></span>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <br />
                                    <div class="custm_file">
                                        <label for="StudentDocument_file" class="custom-file-upload"><i class="fa fa-cloud-upload"></i> Upload File</label>
                                        <span class="clearfix" ></span>
										                    <input id="ytStudentDocument_file" type="hidden" value="" name="StudentDocument" />
																				<input class="upload_file" name="StudentDocument" id="StudentDocument_file" type="file" />                                                                                <span class="file-error"></span>
                                        <p style="font-size:11px;">(Only files with these extensions are allowed: jpg, png, pdf, doc, txt.)</p>
                                    </div>

                                  </div>
                                </div>
																@foreach($query as $user)
																	<div class='alert alert-info'>
																			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>

																	<strong>Sucessfully Uploaded ! </strong> {{ $user->document_type }}
															</div>
															@endforeach
                              </div>
 					                  </div>
				                   </div>
                     	        <input type="hidden" id="count-value" />
                        <div class="row" style="padding-top:20px;">
                            <input value="1" name="StudentDocumentdocument" id="StudentDocument_document" type="hidden" />
                        </div>

		                    <div class="row" id="created_at">
                            <input name="StudentDocumentcreated_at" id="StudentDocument_created_at" type="hidden" />                                                    </div>

                      <div>

                           <input class="btn btn-success" id="save-btn" type="submit" name="yt2" value="Save" />
												<a class="btn btn-warning" href="{{ asset('studentregistration4') }}" id="yt3">Finish & Next</a>
									   </div>
					</div>
				</div>
			</form>
<script type="text/javascript">
$('.upload_file').change(function(ev){
	var name	= $(this)[0].files[0].name;
	$(this).closest('.custm_file').find('.clearfix').html(name);
});

$('#add-another-btn').click(function(ev){
	var count	= $('#count-value').val();
	if(count != ''){
		var current_count	= parseInt(count) + parseInt(1);
		$('#count-value').val(current_count);
	}
	else{
		$('#count-value').val(1);
	}
});

$('#save-btn').click(function(ev){
	var flag	= 0;
	$('.title-error').html('');
	$('.file-error').html('');
	var extenstion_arr	= ['jpg', 'jpeg','png', 'pdf', 'doc', 'txt'];
	$('.documnt_addlist').each(function(){
		var title	=  $(this).find('.title-field').val();
		var file	=  $(this).find('.upload_file').val();
		if(title != '' || file != ''){
			if(title == ''){
				$(this).find('.title-error').html("Document cannot be blank");
				flag	= 1;
			}
			if(file == ''){
				$(this).find('.file-error').html("File cannot be blank");
				flag	= 1;
			}
		}
	});
	if(flag == 1){
		return false;
	}
});
</script>




    </div>
		<div class="clear"></div>
	</div>

	<!-- js -->
	<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<!-- //js -->

	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/validator.min.js') }}"></script>

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
