

@if(session('student_id') != "")

<!doctype html>
<html>

<head>
	<title>Parent Information</title>
  <meta name="viewport" content="width=1024">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content=""	/>
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

	<div class="content-agileits" >
		<h1 class="title">Student Enrolment - Parent Information</h1>

    <div style="background:#ccc; padding:50px;">
       <a href="{{ asset('/') }}"  style="color:white; float:left; margin-top: 25px;" class="btn btn-primary">Go To Home</a>
      <div class="pagination ">
        <a class="active" href="{{ asset('studentregistration') }}" style="border:1px solid white; border-radius:50%;" target="_self" title="Student Enrolment - Student Information">1</a>
        <a  class="active" href="{{ asset('studentregistration2') }}" style="border:1px solid black; border-radius:50%;" title="Parent Information">2</a>
        <a href="#" title="Documents Upload">3</a>
        <a href="#" title="Finish">4</a>
      </div>
		@foreach ($errors->all() as $error)
			<div class="alert alert-danger " style="text-align:center;">
			 <a href="#" class="close" data-dismiss="alert">&times;</a>
			 <strong>Error!</strong>		{{ $error }}
			</div>

		 @endforeach
      <form autocomplete="on" id="parent-details-_step2-form" action="{{ URL::to('/Registration_store2') }}" method="post">
				@csrf
			 <div style="display:none"><input type="hidden" value="af22b8f3a43fe074cfa5daf43f6250eba767f1bc" name="YII_CSRF_TOKEN" /></div>
        		<p class="note">Fields with <span class="required">*</span> are required.</p>

         <div id="disable">
          <h4 class="text-success">Personal Details</h4>
          <div class="row mb10">
						  	  <div class="col-sm-4">
                          <label class="control-label required" for="Guardians_first_name">First Name <span class="required">*</span></label>
													<input class="form-control" placeholder="First Name" name="first_name" id="Guardians_first_name" type="text" />
                  </div>


                  <div class="col-sm-4">
                      <label class="control-label required" for="Guardians_last_name">Last Name <span class="required">*</span></label>
										  <input class="form-control" placeholder="Last Name" name="last_name" id="Guardians_last_name" type="text" />
                  </div>


                  <div class="col-sm-4">
                      <label class="control-label required" for="Guardians_relation">Relation <span class="required">*</span></label>
											<input class="form-control" placeholder="Relation" name="relation" id="Guardians_relation" type="text" />
                  </div>


                  <div class="col-sm-4">
                      <label class="control-label" for="Guardians_dob">Date Of Birth</label>
											<input class="form-control" placeholder="Date Of Birth" id="Guardians_dob" name="dob]" type="date" />
                  </div>

                 <div class="col-sm-4">
                      <label class="control-label" for="Guardians_education">Education</label>
											<input class="form-control" placeholder="Education" name="education" id="Guardians_education" type="text" />
                  </div>


                  <div class="col-sm-4">
                      <label class="control-label" for="Guardians_occupation">Occupation</label>
											<input class="form-control" placeholder="Occupation" name="occupation" id="Guardians_occupation" type="text" />
                  </div>


                 <div class="col-sm-4">
                      <label class="control-label" for="Guardians_income">Income</label>
											<input class="form-control" placeholder="Income" name="income" id="Guardians_income" type="text" />
                  </div>


                 <div class="col-sm-4">
                     	<label class="control-label" for="Guardians_test">Test 1</label>
											<input placeholder="Test 1" class="form-control" name="test" id="Guardians_test" type="text" value="" />
                 </div>

          </div>
          <h4 class="text-success">Contact Details</h4>

<br>

          <div class="row mb10">
          	            <div class="col-sm-4">
                            <label class="control-label required" for="Guardians_email">Email <span class="required">*</span></label>
														<input class="form-control" placeholder="Email" name="email" id="Guardians_email" type="text" />
                         </div>


                         <div class="col-sm-4">
                             <label class="control-label required" for="Guardians_mobile_phone">Mobile Phone <span class="required">*</span></label>
														 <input class="form-control" placeholder="Mobile Phone" name="mobile_phone" id="Guardians_mobile_phone" type="text" />
                          </div>


                         <div class="col-sm-4" id="hide_1">
                              <label class="control-label" for="Guardians_office_phone1">Office Phone 1</label>
															<input class="form-control" placeholder="Office Phone 1" name="office_phone1" id="Guardians_office_phone1" type="text" />
                         </div>



          <div id="hide_2">
                          <div class="col-sm-4">
                               <label class="control-label" for="Guardians_office_phone2">Office Phone 2</label>
															 <input class="form-control" placeholder="Office Phone 2" name="office_phone2" id="Guardians_office_phone2" type="text" />
                          </div>


                         <div class="col-sm-4">
                               <label class="control-label" for="Guardians_office_address_line1">Office Address Line 1</label>
															 <input class="form-control" placeholder="Office Address Line 1" name="office_address_line1" id="Guardians_office_address_line1" type="text" />
                         </div>


                      <div class="col-sm-4">
                               <label class="control-label" for="Guardians_office_address_line2">Office Address Line 2</label>
															 <input class="form-control" placeholder="Office Address Line 2" name="office_address_line2" id="Guardians_office_address_line2" type="text" />
                      </div>

                      <div class="col-sm-4">
                                <label class="control-label" for="Guardians_city">City </label>
																<input class="form-control" placeholder="City " name="city" id="Guardians_city" type="text" />
                      </div>


                      <div class="col-sm-4">
                                <label class="control-label" for="Guardians_state">State</label>
																<input class="form-control" placeholder="State" name="state" id="Guardians_state" type="text" />
                      </div>


                      <div class="col-sm-4">
                                <label class="control-label" for="Guardians_country_id">Country</label>
														<select class="form-control" name="country_id" id="Guardians_country_id">
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
			            </div>
                        <div class="col-sm-4">
                                	<label class="control-label" for="Guardians_test1">Test 2</label>
																	<input class="form-control" placeholder="Test 2" readonly="readonly" id="Guardians_test1" name="test1" type="text" value="" />
                        </div>
                    </div>
                    </div>
          <br />
           <div class="row mb10">
            	<div class="col-sm-4">
                <div class="row buttons" style="padding-left:15px;">
                  <input class="btn btn-success btn-block" type="submit" name="yt1" value="Save &amp; Continue" />
								</div>
               </div>
            </div>


  </form>


  <script type="text/javascript">
  $('input[type="checkbox"]#Guardians_same_address').change(function(e) {
  	var that	= this;
      if($(that).is(':checked')){
  		$('#hide_1').hide();
  		$('#hide_2').hide();
  	}else{
  		$('#hide_1').show();
  		$('#hide_2').show();
  		$('#hide_1').find('select,input').val('');
  		$('#hide_2').find('select,input').val('');
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
