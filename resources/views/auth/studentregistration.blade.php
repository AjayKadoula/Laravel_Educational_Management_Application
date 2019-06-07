<?php $query;?>
<!doctype html>
<html>

<head>
	<title>Student Enrolment - Student Information</title>
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

<body style="overflow:hide;">

	<div class="content-agileits">
		<h1 class="title">Student Enrolment - Student Information</h1>

    <div style="background:#ccc; padding:20px;">
       <a href="{{ asset('/') }}"  style="color:white; float:left; margin-top: 25px;" class="btn btn-primary">Go To Home</a>
      <div class="pagination ">

        <a class="active" href="{{ asset('studentregistration') }}" target="_self" title="Student Enrolment - Student Information">1</a>
        <a  href="#" title="Parent Information">2</a>
        <a href="#" title="Documents Upload">3</a>
        <a href="#" title="Finish">4</a>
      </div>
      <div>
			 @foreach ($errors->all() as $error)
			 <div class="alert alert-danger " style="text-align:center;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
				<strong>Error!</strong>		{{ $error }}
			 </div>

      @endforeach
			</div>
      <form autocomplete="on" enctype="multipart/form-data" id="students-_step1-form" action="{{ URL::to('/Registration_store') }}" method="post">
				@csrf
       <div style="display:none"><input type="hidden" value="af22b8f3a43fe074cfa5daf43f6250eba767f1bc" name="YII_CSRF_TOKEN" /></div>
       <h4 class="text-success">Personal Details</h4>
       <div class="row mb10">

						<div class="col-sm-4">
                 <label class="control-label required" for="Students_first_name">First Name <span class="required">*</span></label>
                  <input class="form-control" placeholder="First Name" required="required" name="first_name" id="Students_first_name" type="text" />
             </div>

             <div class="col-sm-4">
                 <label class="control-label" for="Students_middle_name">Middle Name</label>
                <input class="form-control" placeholder="Middle Name" name="middle_name" id="Students_middle_name" type="text" />
             </div>



             <div class="col-sm-4">
                 <label class="control-label required" required="required" for="Students_last_name">Last Name <span class="required">*</span></label>
                 <input class="form-control" required="required" placeholder="Last Name" name="last_name" id="Students_last_name" type="text" />
             </div>

             <div class="col-sm-4">
                 <label class="control-label" for="Students_national_student_id">Student ID</label>
                 <input class="form-control"  placeholder="Student ID" name="national_student_id" id="Students_national_student_id" type="text" />
             </div>

            <div class="col-sm-4">
                <label class="control-label" id="batch_label" for="Students_batch_id">Batch</label>
                <select class="form-control" id="batch_id" name="batch_id">
                  <option value="">Select Batch</option>
                  <option value="Grade_11-Class_A">Grade 11 - Class_A</option>
                  <option value="Grade_11-Class_B">Grade 11 - Class_B</option>
                  <option value="Grade_12-Class_A">Grade 12 - Class_A</option>
                  <option value="Grade_12-Class_B">Grade 12 - Class_B</option>
                  <option value="Humanities_and_Arts-Psychology">Humanities and Arts - Psychology</option>
                  <option value="Humanities_and_Arts-Creative_arts">Humanities and Arts - Creative arts</option>
               </select>
           </div>


           <div class="col-sm-4">
                 <label class="control-label required" required="required" for="Students_date_of_birth">Date Of Birth <span class="required">*</span></label>
                 <input class="form-control" placeholder="Date Of Birth" id="Students_date_of_birth" name="date_of_birth" type="date" />
            </div>

             <div class="col-sm-4">
                 <label class="control-label" for="Students_birth_place">Birth Place</label>
                 <input class="form-control" placeholder="Birth Place" name="birth_place" id="Students_birth_place" type="text" />
             </div>


             <div class="col-sm-4">
                 <label class="control-label required" for="Students_nationality_id">Nationality <span class="required">*</span></label>
								   <select class="form-control" name="nationality_id" id="Students_nationality_id">
										 <option value="">Country...</option>
										 <option value="Afganistan">Afghanistan</option>
										 <option value="Albania">Albania</option>
										 <option value="Algeria">Algeria</option>
										 <option value="American Samoa">American Samoa</option>
										 <option value="Andorra">Andorra</option>
										 <option value="Angola">Angola</option>
										 <option value="Anguilla">Anguilla</option>
										 <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
										 <option value="Argentina">Argentina</option>
										 <option value="Armenia">Armenia</option>
										 <option value="Aruba">Aruba</option>
										 <option value="Australia">Australia</option>
										 <option value="Austria">Austria</option>
										 <option value="Azerbaijan">Azerbaijan</option>
										 <option value="Bahamas">Bahamas</option>
										 <option value="Bahrain">Bahrain</option>
										 <option value="Bangladesh">Bangladesh</option>
										 <option value="Barbados">Barbados</option>
										 <option value="Belarus">Belarus</option>
										 <option value="Belgium">Belgium</option>
										 <option value="Belize">Belize</option>
										 <option value="Benin">Benin</option>
										 <option value="Bermuda">Bermuda</option>
										 <option value="Bhutan">Bhutan</option>
										 <option value="Bolivia">Bolivia</option>
										 <option value="Bonaire">Bonaire</option>
										 <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
										 <option value="Botswana">Botswana</option>
										 <option value="Brazil">Brazil</option>
										 <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
										 <option value="Brunei">Brunei</option>
										 <option value="Bulgaria">Bulgaria</option>
										 <option value="Burkina Faso">Burkina Faso</option>
										 <option value="Burundi">Burundi</option>
										 <option value="Cambodia">Cambodia</option>
										 <option value="Cameroon">Cameroon</option>
										 <option value="Canada">Canada</option>
										 <option value="Canary Islands">Canary Islands</option>
										 <option value="Cape Verde">Cape Verde</option>
										 <option value="Cayman Islands">Cayman Islands</option>
										 <option value="Central African Republic">Central African Republic</option>
										 <option value="Chad">Chad</option>
										 <option value="Channel Islands">Channel Islands</option>
										 <option value="Chile">Chile</option>
										 <option value="China">China</option>
										 <option value="Christmas Island">Christmas Island</option>
										 <option value="Cocos Island">Cocos Island</option>
										 <option value="Colombia">Colombia</option>
										 <option value="Comoros">Comoros</option>
										 <option value="Congo">Congo</option>
										 <option value="Cook Islands">Cook Islands</option>
										 <option value="Costa Rica">Costa Rica</option>
										 <option value="Cote DIvoire">Cote D'Ivoire</option>
										 <option value="Croatia">Croatia</option>
										 <option value="Cuba">Cuba</option>
										 <option value="Curaco">Curacao</option>
										 <option value="Cyprus">Cyprus</option>
										 <option value="Czech Republic">Czech Republic</option>
										 <option value="Denmark">Denmark</option>
										 <option value="Djibouti">Djibouti</option>
										 <option value="Dominica">Dominica</option>
										 <option value="Dominican Republic">Dominican Republic</option>
										 <option value="East Timor">East Timor</option>
										 <option value="Ecuador">Ecuador</option>
										 <option value="Egypt">Egypt</option>
										 <option value="El Salvador">El Salvador</option>
										 <option value="Equatorial Guinea">Equatorial Guinea</option>
										 <option value="Eritrea">Eritrea</option>
										 <option value="Estonia">Estonia</option>
										 <option value="Ethiopia">Ethiopia</option>
										 <option value="Falkland Islands">Falkland Islands</option>
										 <option value="Faroe Islands">Faroe Islands</option>
										 <option value="Fiji">Fiji</option>
										 <option value="Finland">Finland</option>
										 <option value="France">France</option>
										 <option value="French Guiana">French Guiana</option>
										 <option value="French Polynesia">French Polynesia</option>
										 <option value="French Southern Ter">French Southern Ter</option>
										 <option value="Gabon">Gabon</option>
										 <option value="Gambia">Gambia</option>
										 <option value="Georgia">Georgia</option>
										 <option value="Germany">Germany</option>
										 <option value="Ghana">Ghana</option>
										 <option value="Gibraltar">Gibraltar</option>
										 <option value="Great Britain">Great Britain</option>
										 <option value="Greece">Greece</option>
										 <option value="Greenland">Greenland</option>
										 <option value="Grenada">Grenada</option>
										 <option value="Guadeloupe">Guadeloupe</option>
										 <option value="Guam">Guam</option>
										 <option value="Guatemala">Guatemala</option>
										 <option value="Guinea">Guinea</option>
										 <option value="Guyana">Guyana</option>
										 <option value="Haiti">Haiti</option>
										 <option value="Hawaii">Hawaii</option>
										 <option value="Honduras">Honduras</option>
										 <option value="Hong Kong">Hong Kong</option>
										 <option value="Hungary">Hungary</option>
										 <option value="Iceland">Iceland</option>
										 <option value="India">India</option>
										 <option value="Indonesia">Indonesia</option>
										 <option value="Iran">Iran</option>
										 <option value="Iraq">Iraq</option>
										 <option value="Ireland">Ireland</option>
										 <option value="Isle of Man">Isle of Man</option>
										 <option value="Israel">Israel</option>
										 <option value="Italy">Italy</option>
										 <option value="Jamaica">Jamaica</option>
										 <option value="Japan">Japan</option>
										 <option value="Jordan">Jordan</option>
										 <option value="Kazakhstan">Kazakhstan</option>
										 <option value="Kenya">Kenya</option>
										 <option value="Kiribati">Kiribati</option>
										 <option value="Korea North">Korea North</option>
										 <option value="Korea Sout">Korea South</option>
										 <option value="Kuwait">Kuwait</option>
										 <option value="Kyrgyzstan">Kyrgyzstan</option>
										 <option value="Laos">Laos</option>
										 <option value="Latvia">Latvia</option>
										 <option value="Lebanon">Lebanon</option>
										 <option value="Lesotho">Lesotho</option>
										 <option value="Liberia">Liberia</option>
										 <option value="Libya">Libya</option>
										 <option value="Liechtenstein">Liechtenstein</option>
										 <option value="Lithuania">Lithuania</option>
										 <option value="Luxembourg">Luxembourg</option>
										 <option value="Macau">Macau</option>
										 <option value="Macedonia">Macedonia</option>
										 <option value="Madagascar">Madagascar</option>
										 <option value="Malaysia">Malaysia</option>
										 <option value="Malawi">Malawi</option>
										 <option value="Maldives">Maldives</option>
										 <option value="Mali">Mali</option>
										 <option value="Malta">Malta</option>
										 <option value="Marshall Islands">Marshall Islands</option>
										 <option value="Martinique">Martinique</option>
										 <option value="Mauritania">Mauritania</option>
										 <option value="Mauritius">Mauritius</option>
										 <option value="Mayotte">Mayotte</option>
										 <option value="Mexico">Mexico</option>
										 <option value="Midway Islands">Midway Islands</option>
										 <option value="Moldova">Moldova</option>
										 <option value="Monaco">Monaco</option>
										 <option value="Mongolia">Mongolia</option>
										 <option value="Montserrat">Montserrat</option>
										 <option value="Morocco">Morocco</option>
										 <option value="Mozambique">Mozambique</option>
										 <option value="Myanmar">Myanmar</option>
										 <option value="Nambia">Nambia</option>
										 <option value="Nauru">Nauru</option>
										 <option value="Nepal">Nepal</option>
										 <option value="Netherland Antilles">Netherland Antilles</option>
										 <option value="Netherlands">Netherlands (Holland, Europe)</option>
										 <option value="Nevis">Nevis</option>
										 <option value="New Caledonia">New Caledonia</option>
										 <option value="New Zealand">New Zealand</option>
										 <option value="Nicaragua">Nicaragua</option>
										 <option value="Niger">Niger</option>
										 <option value="Nigeria">Nigeria</option>
										 <option value="Niue">Niue</option>
										 <option value="Norfolk Island">Norfolk Island</option>
										 <option value="Norway">Norway</option>
										 <option value="Oman">Oman</option>
										 <option value="Pakistan">Pakistan</option>
										 <option value="Palau Island">Palau Island</option>
										 <option value="Palestine">Palestine</option>
										 <option value="Panama">Panama</option>
										 <option value="Papua New Guinea">Papua New Guinea</option>
										 <option value="Paraguay">Paraguay</option>
										 <option value="Peru">Peru</option>
										 <option value="Phillipines">Philippines</option>
										 <option value="Pitcairn Island">Pitcairn Island</option>
										 <option value="Poland">Poland</option>
										 <option value="Portugal">Portugal</option>
										 <option value="Puerto Rico">Puerto Rico</option>
										 <option value="Qatar">Qatar</option>
										 <option value="Republic of Montenegro">Republic of Montenegro</option>
										 <option value="Republic of Serbia">Republic of Serbia</option>
										 <option value="Reunion">Reunion</option>
										 <option value="Romania">Romania</option>
										 <option value="Russia">Russia</option>
										 <option value="Rwanda">Rwanda</option>
										 <option value="St Barthelemy">St Barthelemy</option>
										 <option value="St Eustatius">St Eustatius</option>
										 <option value="St Helena">St Helena</option>
										 <option value="St Kitts-Nevis">St Kitts-Nevis</option>
										 <option value="St Lucia">St Lucia</option>
										 <option value="St Maarten">St Maarten</option>
										 <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
										 <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
										 <option value="Saipan">Saipan</option>
										 <option value="Samoa">Samoa</option>
										 <option value="Samoa American">Samoa American</option>
										 <option value="San Marino">San Marino</option>
										 <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
										 <option value="Saudi Arabia">Saudi Arabia</option>
										 <option value="Senegal">Senegal</option>
										 <option value="Serbia">Serbia</option>
										 <option value="Seychelles">Seychelles</option>
										 <option value="Sierra Leone">Sierra Leone</option>
										 <option value="Singapore">Singapore</option>
										 <option value="Slovakia">Slovakia</option>
										 <option value="Slovenia">Slovenia</option>
										 <option value="Solomon Islands">Solomon Islands</option>
										 <option value="Somalia">Somalia</option>
										 <option value="South Africa">South Africa</option>
										 <option value="Spain">Spain</option>
										 <option value="Sri Lanka">Sri Lanka</option>
										 <option value="Sudan">Sudan</option>
										 <option value="Suriname">Suriname</option>
										 <option value="Swaziland">Swaziland</option>
										 <option value="Sweden">Sweden</option>
										 <option value="Switzerland">Switzerland</option>
										 <option value="Syria">Syria</option>
										 <option value="Tahiti">Tahiti</option>
										 <option value="Taiwan">Taiwan</option>
										 <option value="Tajikistan">Tajikistan</option>
										 <option value="Tanzania">Tanzania</option>
										 <option value="Thailand">Thailand</option>
										 <option value="Togo">Togo</option>
										 <option value="Tokelau">Tokelau</option>
										 <option value="Tonga">Tonga</option>
										 <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
										 <option value="Tunisia">Tunisia</option>
										 <option value="Turkey">Turkey</option>
										 <option value="Turkmenistan">Turkmenistan</option>
										 <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
										 <option value="Tuvalu">Tuvalu</option>
										 <option value="Uganda">Uganda</option>
										 <option value="Ukraine">Ukraine</option>
										 <option value="United Arab Erimates">United Arab Emirates</option>
										 <option value="United Kingdom">United Kingdom</option>
										 <option value="United States of America">United States of America</option>
										 <option value="Uraguay">Uruguay</option>
										 <option value="Uzbekistan">Uzbekistan</option>
										 <option value="Vanuatu">Vanuatu</option>
										 <option value="Vatican City State">Vatican City State</option>
										 <option value="Venezuela">Venezuela</option>
										 <option value="Vietnam">Vietnam</option>
										 <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
										 <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
										 <option value="Wake Island">Wake Island</option>
										 <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
										 <option value="Yemen">Yemen</option>
										 <option value="Zaire">Zaire</option>
										 <option value="Zambia">Zambia</option>
										 <option value="Zimbabwe">Zimbabwe</option>

									 </select>
            </div>


             <div class="col-sm-4">
                 <label class="control-label" for="Students_language">Language</label>
                 <input class="form-control" placeholder="Language" name="language" id="Students_language" type="text" />
             </div>


             <div class="col-sm-4">
                   <label class="control-label" for="Students_religion">Religion</label>
	                 <input class="form-control" placeholder="Religion" name="religion" id="Students_religion" type="text" />
             </div>



             <div class="col-sm-4">

                 <label class="control-label" for="Students_blood_group">Blood </label><br />
                 <select class="form-control" name="blood_group" id="Students_blood_group">
									 <option value="">Unknown</option>
									 <option value="A+">A+</option>
									 <option value="A-">A-</option>
									 <option value="B+">B+</option>
									 <option value="B-">B-</option>
									 <option value="O+">O+</option>
									 <option value="O-">O-</option>
									 <option value="AB+">AB+</option>
									 <option value="AB-">AB-</option>
						  	 </select>

             </div>


             <div class="col-sm-4">
               <label class="control-label" for="Students_student_category_id">Student Category</label>
		            <select class="form-control" name="student_category_id" id="Students_student_category_id">
										<option value="General">General</option>
										<option value="OBC">OBC</option>
										<option value="SC">sc</option>
					   		</select>
             </div>

             <div class="col-sm-4">
                 <label class="control-label required" for="Students_gender">Gender <span class="required">*</span></label><br />
                 <input id="ytStudents_gender" required="required" type="hidden" value="" name="gender" />
								 <input id="Students_gender_0" value="male" type="radio" name="gender" />
								 <label for="Students_gender_0">Male</label>
								  <input id="Students_gender_1" value="female" type="radio" name="gender" />
									<label for="Students_gender_1">Female</label>
             </div>


         <div class="col-sm-4">
                  <label class="control-label" for="Students_checkbox">checkbox</label>	<br />
									<input id="ytStudents_checkbox" type="hidden" value="0" name="checkbox" />
									<input value="0" style="float:left;" name="checkbox" id="Students_checkbox" checked="checked" type="checkbox" />&nbsp;
									<label style="float:left; margin-left:5px;" for="Students_checkbox"></label>
									<div class="clear"></div>
					</div>
					<div class="col-sm-4">
									<label class="control-label" for="Students_demo">demo</label>
									<select class="form-control" name="demo" id="Students_demo">
									<option value="">Select demo</option>
									</select>
					</div>
					<div class="col-sm-4">
									<label class="control-label" for="Students_height">Height</label>
									<input placeholder="Height" class="form-control" name="height" id="Students_height" type="text" value="" />
					</div>
					<div class="col-sm-4">
									<label class="control-label" for="Students_demo1">demo</label>
									<input placeholder="demo" class="form-control" name="demo1" id="Students_demo1" type="text" value="" />
					</div>
					<div class="col-sm-4">
									<label class="control-label" for="Students_demo2">demo1</label>
					  			<input placeholder="demo1" class="form-control" name="demo2" id="Students_demo2" type="text" value="" />
					</div>
					<div class="col-sm-4">
									<label class="control-label" for="Students_demo3">demo2</label>
							   	<input placeholder="demo2" class="form-control" name="demo3" id="Students_demo3" type="text" value="" />
					</div>
					<div class="col-sm-4">
									<label class="control-label" for="Students_demo4">demo3</label>
									<input placeholder="demo3" class="form-control" name="demo4" id="Students_demo4" type="text" value="" />
					</div>
		   		<div class="col-sm-4">
									<label class="control-label" for="Students_demo5">demo4</label>
									<input placeholder="demo4" class="form-control" name="demo5" id="Students_demo5" type="text" value="" />
					</div>
					<div class="col-sm-4">
									<label class="control-label" for="Students_demo6">demo5</label>
							   	<input placeholder="demo5" class="form-control" name="demo6" id="Students_demo6" type="text" value="" />
					</div>
					<div class="col-sm-4">
									<label class="control-label" for="Students_dem">dem6</label>
									<input placeholder="dem6" class="form-control" name="dem" id="Students_dem" type="text" value="" />
					</div>
					<div class="col-sm-4">
									<label class="control-label" for="Students_dem1">dem6</label>
									<input placeholder="dem6" class="form-control" name="dem1" id="Students_dem1" type="text" value="" />
					</div>
					<div class="col-sm-4">
									<label class="control-label" for="Students_demo7">demo7</label>
									<select class="form-control" name="demo7" id="Students_demo7">
									    <option value="">Select demo7</option>
									</select>
					</div>


     </div>
     <br />
     <h4 class="text-success">Contact Details</h4>
     <div class="row mb10">

             <div class="col-sm-4">
                    <label class="control-label required" required="required" for="Students_address_line1">Address Line 1 <span class="required">*</span></label>
								    <input class="form-control" placeholder="Address Line 1" name="address_line1" id="Students_address_line1" type="text" />
             </div>



             <div class="col-sm-4">
                     <label class="control-label required" required="required" for="Students_address_line2">Address Line 2 <span class="required">*</span></label>
		                 <input class="form-control" placeholder="Address Line 2" name="address_line2" id="Students_address_line2" type="text" />
             </div>


             <div class="col-sm-4">
                 <label class="control-label required" for="Students_city">City <span class="required">*</span></label>
                 <input class="form-control" required="required" placeholder="City" name="city" id="Students_city" type="text" />
             </div>



             <div class="col-sm-4">
                  <label class="control-label required" for="Students_state">State <span class="required">*</span></label>
                  <input class="form-control" required="required" placeholder="State" name="state" id="Students_state" type="text" />
             </div>


             <div class="col-sm-4">
                  <label class="control-label required"  for="Students_pin_code">Pin Code <span class="required">*</span></label>
                  <input class="form-control" required="required" placeholder="Pin Code" name="pin_code" id="Students_pin_code" type="text" />
             </div>


             <div class="col-sm-4">
                 <label class="control-label required" for="Students_country_id">Country <span class="required">*</span></label>
		                 <select class="form-control" required="required" name="country_id" id="Students_country_id">
											 <option value="">Country...</option>
											 <option value="Afganistan">Afghanistan</option>
											 <option value="Albania">Albania</option>
											 <option value="Algeria">Algeria</option>
											 <option value="American Samoa">American Samoa</option>
											 <option value="Andorra">Andorra</option>
											 <option value="Angola">Angola</option>
											 <option value="Anguilla">Anguilla</option>
											 <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
											 <option value="Argentina">Argentina</option>
											 <option value="Armenia">Armenia</option>
											 <option value="Aruba">Aruba</option>
											 <option value="Australia">Australia</option>
											 <option value="Austria">Austria</option>
											 <option value="Azerbaijan">Azerbaijan</option>
											 <option value="Bahamas">Bahamas</option>
											 <option value="Bahrain">Bahrain</option>
											 <option value="Bangladesh">Bangladesh</option>
											 <option value="Barbados">Barbados</option>
											 <option value="Belarus">Belarus</option>
											 <option value="Belgium">Belgium</option>
											 <option value="Belize">Belize</option>
											 <option value="Benin">Benin</option>
											 <option value="Bermuda">Bermuda</option>
											 <option value="Bhutan">Bhutan</option>
											 <option value="Bolivia">Bolivia</option>
											 <option value="Bonaire">Bonaire</option>
											 <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
											 <option value="Botswana">Botswana</option>
											 <option value="Brazil">Brazil</option>
											 <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
											 <option value="Brunei">Brunei</option>
											 <option value="Bulgaria">Bulgaria</option>
											 <option value="Burkina Faso">Burkina Faso</option>
											 <option value="Burundi">Burundi</option>
											 <option value="Cambodia">Cambodia</option>
											 <option value="Cameroon">Cameroon</option>
											 <option value="Canada">Canada</option>
											 <option value="Canary Islands">Canary Islands</option>
											 <option value="Cape Verde">Cape Verde</option>
											 <option value="Cayman Islands">Cayman Islands</option>
											 <option value="Central African Republic">Central African Republic</option>
											 <option value="Chad">Chad</option>
											 <option value="Channel Islands">Channel Islands</option>
											 <option value="Chile">Chile</option>
											 <option value="China">China</option>
											 <option value="Christmas Island">Christmas Island</option>
											 <option value="Cocos Island">Cocos Island</option>
											 <option value="Colombia">Colombia</option>
											 <option value="Comoros">Comoros</option>
											 <option value="Congo">Congo</option>
											 <option value="Cook Islands">Cook Islands</option>
											 <option value="Costa Rica">Costa Rica</option>
											 <option value="Cote DIvoire">Cote D'Ivoire</option>
											 <option value="Croatia">Croatia</option>
											 <option value="Cuba">Cuba</option>
											 <option value="Curaco">Curacao</option>
											 <option value="Cyprus">Cyprus</option>
											 <option value="Czech Republic">Czech Republic</option>
											 <option value="Denmark">Denmark</option>
											 <option value="Djibouti">Djibouti</option>
											 <option value="Dominica">Dominica</option>
											 <option value="Dominican Republic">Dominican Republic</option>
											 <option value="East Timor">East Timor</option>
											 <option value="Ecuador">Ecuador</option>
											 <option value="Egypt">Egypt</option>
											 <option value="El Salvador">El Salvador</option>
											 <option value="Equatorial Guinea">Equatorial Guinea</option>
											 <option value="Eritrea">Eritrea</option>
											 <option value="Estonia">Estonia</option>
											 <option value="Ethiopia">Ethiopia</option>
											 <option value="Falkland Islands">Falkland Islands</option>
											 <option value="Faroe Islands">Faroe Islands</option>
											 <option value="Fiji">Fiji</option>
											 <option value="Finland">Finland</option>
											 <option value="France">France</option>
											 <option value="French Guiana">French Guiana</option>
											 <option value="French Polynesia">French Polynesia</option>
											 <option value="French Southern Ter">French Southern Ter</option>
											 <option value="Gabon">Gabon</option>
											 <option value="Gambia">Gambia</option>
											 <option value="Georgia">Georgia</option>
											 <option value="Germany">Germany</option>
											 <option value="Ghana">Ghana</option>
											 <option value="Gibraltar">Gibraltar</option>
											 <option value="Great Britain">Great Britain</option>
											 <option value="Greece">Greece</option>
											 <option value="Greenland">Greenland</option>
											 <option value="Grenada">Grenada</option>
											 <option value="Guadeloupe">Guadeloupe</option>
											 <option value="Guam">Guam</option>
											 <option value="Guatemala">Guatemala</option>
											 <option value="Guinea">Guinea</option>
											 <option value="Guyana">Guyana</option>
											 <option value="Haiti">Haiti</option>
											 <option value="Hawaii">Hawaii</option>
											 <option value="Honduras">Honduras</option>
											 <option value="Hong Kong">Hong Kong</option>
											 <option value="Hungary">Hungary</option>
											 <option value="Iceland">Iceland</option>
											 <option value="India">India</option>
											 <option value="Indonesia">Indonesia</option>
											 <option value="Iran">Iran</option>
											 <option value="Iraq">Iraq</option>
											 <option value="Ireland">Ireland</option>
											 <option value="Isle of Man">Isle of Man</option>
											 <option value="Israel">Israel</option>
											 <option value="Italy">Italy</option>
											 <option value="Jamaica">Jamaica</option>
											 <option value="Japan">Japan</option>
											 <option value="Jordan">Jordan</option>
											 <option value="Kazakhstan">Kazakhstan</option>
											 <option value="Kenya">Kenya</option>
											 <option value="Kiribati">Kiribati</option>
											 <option value="Korea North">Korea North</option>
											 <option value="Korea Sout">Korea South</option>
											 <option value="Kuwait">Kuwait</option>
											 <option value="Kyrgyzstan">Kyrgyzstan</option>
											 <option value="Laos">Laos</option>
											 <option value="Latvia">Latvia</option>
											 <option value="Lebanon">Lebanon</option>
											 <option value="Lesotho">Lesotho</option>
											 <option value="Liberia">Liberia</option>
											 <option value="Libya">Libya</option>
											 <option value="Liechtenstein">Liechtenstein</option>
											 <option value="Lithuania">Lithuania</option>
											 <option value="Luxembourg">Luxembourg</option>
											 <option value="Macau">Macau</option>
											 <option value="Macedonia">Macedonia</option>
											 <option value="Madagascar">Madagascar</option>
											 <option value="Malaysia">Malaysia</option>
											 <option value="Malawi">Malawi</option>
											 <option value="Maldives">Maldives</option>
											 <option value="Mali">Mali</option>
											 <option value="Malta">Malta</option>
											 <option value="Marshall Islands">Marshall Islands</option>
											 <option value="Martinique">Martinique</option>
											 <option value="Mauritania">Mauritania</option>
											 <option value="Mauritius">Mauritius</option>
											 <option value="Mayotte">Mayotte</option>
											 <option value="Mexico">Mexico</option>
											 <option value="Midway Islands">Midway Islands</option>
											 <option value="Moldova">Moldova</option>
											 <option value="Monaco">Monaco</option>
											 <option value="Mongolia">Mongolia</option>
											 <option value="Montserrat">Montserrat</option>
											 <option value="Morocco">Morocco</option>
											 <option value="Mozambique">Mozambique</option>
											 <option value="Myanmar">Myanmar</option>
											 <option value="Nambia">Nambia</option>
											 <option value="Nauru">Nauru</option>
											 <option value="Nepal">Nepal</option>
											 <option value="Netherland Antilles">Netherland Antilles</option>
											 <option value="Netherlands">Netherlands (Holland, Europe)</option>
											 <option value="Nevis">Nevis</option>
											 <option value="New Caledonia">New Caledonia</option>
											 <option value="New Zealand">New Zealand</option>
											 <option value="Nicaragua">Nicaragua</option>
											 <option value="Niger">Niger</option>
											 <option value="Nigeria">Nigeria</option>
											 <option value="Niue">Niue</option>
											 <option value="Norfolk Island">Norfolk Island</option>
											 <option value="Norway">Norway</option>
											 <option value="Oman">Oman</option>
											 <option value="Pakistan">Pakistan</option>
											 <option value="Palau Island">Palau Island</option>
											 <option value="Palestine">Palestine</option>
											 <option value="Panama">Panama</option>
											 <option value="Papua New Guinea">Papua New Guinea</option>
											 <option value="Paraguay">Paraguay</option>
											 <option value="Peru">Peru</option>
											 <option value="Phillipines">Philippines</option>
											 <option value="Pitcairn Island">Pitcairn Island</option>
											 <option value="Poland">Poland</option>
											 <option value="Portugal">Portugal</option>
											 <option value="Puerto Rico">Puerto Rico</option>
											 <option value="Qatar">Qatar</option>
											 <option value="Republic of Montenegro">Republic of Montenegro</option>
											 <option value="Republic of Serbia">Republic of Serbia</option>
											 <option value="Reunion">Reunion</option>
											 <option value="Romania">Romania</option>
											 <option value="Russia">Russia</option>
											 <option value="Rwanda">Rwanda</option>
											 <option value="St Barthelemy">St Barthelemy</option>
											 <option value="St Eustatius">St Eustatius</option>
											 <option value="St Helena">St Helena</option>
											 <option value="St Kitts-Nevis">St Kitts-Nevis</option>
											 <option value="St Lucia">St Lucia</option>
											 <option value="St Maarten">St Maarten</option>
											 <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
											 <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
											 <option value="Saipan">Saipan</option>
											 <option value="Samoa">Samoa</option>
											 <option value="Samoa American">Samoa American</option>
											 <option value="San Marino">San Marino</option>
											 <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
											 <option value="Saudi Arabia">Saudi Arabia</option>
											 <option value="Senegal">Senegal</option>
											 <option value="Serbia">Serbia</option>
											 <option value="Seychelles">Seychelles</option>
											 <option value="Sierra Leone">Sierra Leone</option>
											 <option value="Singapore">Singapore</option>
											 <option value="Slovakia">Slovakia</option>
											 <option value="Slovenia">Slovenia</option>
											 <option value="Solomon Islands">Solomon Islands</option>
											 <option value="Somalia">Somalia</option>
											 <option value="South Africa">South Africa</option>
											 <option value="Spain">Spain</option>
											 <option value="Sri Lanka">Sri Lanka</option>
											 <option value="Sudan">Sudan</option>
											 <option value="Suriname">Suriname</option>
											 <option value="Swaziland">Swaziland</option>
											 <option value="Sweden">Sweden</option>
											 <option value="Switzerland">Switzerland</option>
											 <option value="Syria">Syria</option>
											 <option value="Tahiti">Tahiti</option>
											 <option value="Taiwan">Taiwan</option>
											 <option value="Tajikistan">Tajikistan</option>
											 <option value="Tanzania">Tanzania</option>
											 <option value="Thailand">Thailand</option>
											 <option value="Togo">Togo</option>
											 <option value="Tokelau">Tokelau</option>
											 <option value="Tonga">Tonga</option>
											 <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
											 <option value="Tunisia">Tunisia</option>
											 <option value="Turkey">Turkey</option>
											 <option value="Turkmenistan">Turkmenistan</option>
											 <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
											 <option value="Tuvalu">Tuvalu</option>
											 <option value="Uganda">Uganda</option>
											 <option value="Ukraine">Ukraine</option>
											 <option value="United Arab Erimates">United Arab Emirates</option>
											 <option value="United Kingdom">United Kingdom</option>
											 <option value="United States of America">United States of America</option>
											 <option value="Uraguay">Uruguay</option>
											 <option value="Uzbekistan">Uzbekistan</option>
											 <option value="Vanuatu">Vanuatu</option>
											 <option value="Vatican City State">Vatican City State</option>
											 <option value="Venezuela">Venezuela</option>
											 <option value="Vietnam">Vietnam</option>
											 <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
											 <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
											 <option value="Wake Island">Wake Island</option>
											 <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
											 <option value="Yemen">Yemen</option>
											 <option value="Zaire">Zaire</option>
											 <option value="Zambia">Zambia</option>
											 <option value="Zimbabwe">Zimbabwe</option>

									 </select>


             </div>



             <div class="col-sm-4">
                     <label class="control-label required" for="Students_phone1">Phone Number <span class="required">*</span></label>
                     <input class="form-control" required="required" placeholder="Phone Number" name="phone1" id="Students_phone1" type="text" />
             </div>


             <div class="col-sm-4">
                     <label class="control-label" for="Students_phone2">Phone 2</label>
                     <input class="form-control" placeholder="Phone 2" name="phone2" id="Students_phone2" type="text" />
             </div>


             <div class="col-sm-4">
                 <label class="control-label required" for="Students_email">Email <span class="required">*</span></label>
                 <input class="form-control" required="required" placeholder="Email" name="email" id="Students_email" type="text" />
             </div>


     </div>
<br>

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

 <br />
      <div class="row mb10 ">
       <div class="col-md-4">
             <input id="submit_button_form" class="btn btn-success btn-block btn btn-primary btn-lg pull-right" type="submit" name="yt1" value="Save &amp; Continue" />            </div>
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
