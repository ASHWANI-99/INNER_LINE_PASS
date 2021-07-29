 @extends('layouts.ash')
<stylE>

li{

     MARGIN : 10PX;
    padding: 4px ;
} 
#submit{
    margin: 5px 100px 30px 100px;
}

 

</stylE>

<link rel="shortcut icon" href="img/mseg.ico" type="image/x-icon">
@section('content')
<div class="application_form">
    <div class="nav_form_af">
      
      <center><h2 class="navbar_af">Application Form</h2></center> 
    </div>
    
    <div class="Applicationform">
        <form action="/gettingback/retrieve/{{$application_forms->id}}" method="post" enctype="multipart/form-data">
        @csrf
            <ol>
            <div id="personalDetail" class="block">
              <center><h3 >Personal Detail :--</h3></center>  
            
                <li>Application no: <input  value="{{$application_forms->Application_No}}" name="Application_No" ></li>
                <li>Applicant Name*: <input  value="{{$application_forms->Applicant_Name}} " name="Applicant_Name"placeholder="Applicant Name" required></li>
                <li>Appellation* :
                    <select name="Appellation" >
                        <option selected  >{{$application_forms->Appellation}}</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                    </select>
                </li>
                <li>Suffix* :
                    <select name="Suffix" >
                        <option alue="0"selected >{{$application_forms->Suffix}}</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                    </select>
                </li>
                <li>Application date : <input  value="{{ $application_forms->Application_date}} " name="Application_date"  required></li>
                <li>EPIC / UID No.* : <input  value="{{ $application_forms->EPIC_UID_No}} " name="EPIC_UID_No" placeholder=""></li>
                <li>Date of Birth* : <input  name="DOB"value="{{ $application_forms->DOB}} " placeholder="Date of Birth"></li>
                <li>Gender* :
                    <select name="gender" >
                        <option selected >{{ $application_forms->gender}} </option>
                        <option value="M">MALE</option>
                        <option value="F">FEMALE</option>
                        <option value="Others">OTHERS</option>
                    </select>
                </li>
                <li>Age* : <input type="number" name='Age' placeholder="Age"  value="{{$application_forms->Age}}"  required></li>
                <li>Religion* : 
                    <select name="Religion"  >
                        <option  selected  >{{$application_forms->Religion}}</option>
                        <option value="Hinduism">Hinduism</option>
                        <option value="Chistianism">Chistianism</option>
                        <option value="Islam">Islam</option>
                        <option value="Janism">Janism</option>
                        <option value="Buddism">Buddism</option>
                        <option value="Others">Others</option>
                    </select>
                </li>
                <li>Occupation* : 
                    <select name="Occupation">
                        <option selected  >{{ $application_forms->Occupation}} </option>
                        <option value="Farmer">Farmer</option>
                        <option value="Business man">Business man</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Teacher">Teacher</option>
                        
                        <option value="others">others</option>
                    </select>
                </li>
                <li>Education* : 
                    <select name="Education">
                        <option selected  >{{ $application_forms->Education}}</option>
                        <option value="10+2"></option>
                        <option value="10"></option>
                        <option value="graduated"></option>
                        <option value="others">others</option>
                    </select>
                </li>
                <li> Identification Mark* : <textarea name="IdentificationMark"   value="{{ $application_forms->IdentificationMark}}" cols="30" rows="10" required>{{ $application_forms->IdentificationMark}}</textarea></li>
                <li> Email : <input type="email"   value="{{$application_forms->Email}} " name="Email" placeholder="abc@mail.com"></li>
                <li>Contact No* : <input type="number" value="{{ $application_forms->Contact_No}}"  name="Contact_No" placeholder="" required></li>
                <li>Father’s Name* : <input type="text" value="{{ $application_forms->Fathers_Name }}" name="Fathers_Name" placeholder="" required></li>
                </div>
                <li>Appellation* :
                    <select name="Appellation_F" >
                        <option selected >{{ $application_forms->Appellation_F }}</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                    </select>
                </li>
                <li>Suffix* :
                    <select name="Suffix_F" >
                        <option selected >{{ $application_forms->Suffix_F }}</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                    </select>
                </li>
                <div id="present_address" class="block">
                <li>
                <p class="address">Present Address :--</p>
                    <ul class="address_list">
                        <li>House no.* : <input type="text" value="{{ $application_forms->Present_Address_Hno }}"name="Present_Address_Hno" id='Present_Address_Hno'placeholder="H/no." required></li>
                        <li>Sub locality 1* : <input type="text" value="{{ $application_forms->Present_Address_Sub_locality1 }}"name="Present_Address_Sub_locality1" id="Present_Address_Sub_locality1" placeholder="Sub locality 1" required></li>
                        <li>Sub locality 2 : <input type="text" value="{{ $application_forms->Present_Address_Sub_locality2 }}"name="Present_Address_Sub_locality2" id="Present_Address_Sub_locality2" placeholder="Sub locality 2" ></li>
                        <li>Location* : <input type="text" value="{{ $application_forms->Present_Address_Location }}"name="Present_Address_Location" id="Present_Address_Location" placeholder="Location" required></li>
                        <li>Sub District* : <input type="text" value="{{ $application_forms->Present_Address_Sub_District }}"name="Present_Address_Sub_District" id="Present_Address_Sub_District" placeholder="Sub District" required></li>
                        <li>District* : <input type="text"name="Present_Address_District" value="{{ $application_forms->Present_Address_District }}" id="Present_Address_District" placeholder="District" required></li>
                        <li>State* : <input type="text" value="{{ $application_forms->Present_Address_State }}"name="Present_Address_State" id="Present_Address_State" placeholder="State" required></li>
                        <li>Pin code* : <input type="text" value="{{ $application_forms->Present_Address_pin_code }}"name="Present_Address_pin_code"  id="Present_Address_pin_code"placeholder="Pin code" required></li>
                        <li>Country* : 
                            <select name="Present_Address_Country" id="Present_Address_Country" required>
                                <option selected  > {{ $application_forms->present_Address_Country}}</option>
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
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
                                <option value="Cote DIvoire">Cote DIvoire</option>
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
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
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
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
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
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
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
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </li>
                        <li>Police Station* : <input type="text" value='{{$application_forms->Present_Address_Police_Station}}'name="Present_Address_Police_Station" id="Present_Address_Police_Station" placeholder="" required></li>
                        <li>Post office* : <input type="text" value='{{$application_forms->Present_Address_Post_office}}'name="Present_Address_Post_office" id="Present_Address_Post_office" placeholder="" required></li>
                    </ul> 
                </li>
                </div>

                <div id="permanent_adress" class="block">
                <li><p class="address">Permanent Address :--  </p>
                    <ul class="address1_list">
                        <li>House no.* : <input type="text" value='{{$application_forms->Permanent_Address_Hno}}'  name="Permanent_Address_Hno" id="Permanent_Address_Hno" placeholder="H/no." required></li>
                        <li>Sub locality 1* : <input type="text"  value='{{$application_forms->Permanent_Address_Sub_locality1}}'name="Permanent_Address_Sub_locality1" id="Permanent_Address_Sub_locality1" placeholder="Sub locality1" required></li>
                        <li>Sub locality 2 : <input type="text" value='{{$application_forms->Permanent_Address_Sub_locality2}}'name="Permanent_Address_Sub_locality2" id="Permanent_Address_Sub_locality2" placeholder="Sub locality2" ></li>
                        <li>Location* : <input type="text" value='{{$application_forms->Permanent_Address_Location}}'name="Permanent_Address_Location" id="Permanent_Address_Location" placeholder="Location" required></li>
                        <li>Sub District* : <input type="text" value='{{$application_forms->Permanent_Address_Sub_District}}'name="Permanent_Address_Sub_District" id="Permanent_Address_Sub_District" placeholder="Sub District" required></li>
                        <li>District* : <input type="text" value='{{$application_forms->Permanent_Address_District}}'name="Permanent_Address_District"  id="Permanent_Address_District"placeholder="District" required></li>
                        <li>State* : <input type="text" value='{{$application_forms->Permanent_Address_State}}'name="Permanent_Address_State" id="Permanent_Address_State"placeholder="State" required></li>
                        <li>Pin code* : <input type="text" value='{{$application_forms->Permanent_Address_pin_code}}'name="Permanent_Address_pin_code" id="Permanent_Address_pin_code"placeholder="" required></li>
                        <li>Country* : 
                            <select name="Permanent_Address_Country"  id="Permanent_Address_Country">
                                <option selected  >{{$application_forms->Permanent_Address_Country}}</option>
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
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
                                <option value="Cote DIvoire">Cote DIvoire</option>
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
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
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
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
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
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
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
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </li>
                        <li>Police Station* : <input type="text" value='{{$application_forms->Permanent_Address_Police_Station}}'name="Permanent_Address_Police_Station" id="Permanent_Address_Police_Station" placeholder="" required></li>
                        <li>Post office* : <input type="text" value='{{$application_forms->Permanent_Address_Police_Station}}'name="Permanent_Address_Post_office" name="Permanent_Address_Post_office" placeholder="" id="Permanent_Address_Post_office" required></li>
                    </ul>
                </li>
                </div> 
        
                <div id="SponsorlDetail" class="block">
                <p class="address">Sponsor Detail :--</p>
                <li>E/Roll Sl.No*: <input type="text" value='{{$application_forms->E_Roll_SlNo}}'name="E_Roll_SlNo" placeholder="" required></li>
                <li>Part No*: <input type="text" value='{{$application_forms->Part_No}}'name="Part No" placeholder="Part_No" required></li>
                <li>Constituency*: <input type="text"  value='{{$application_forms->Constituency}}' name="Constituency" placeholder="Constituency" required></li>
                <li>Sponsor Name*: <input type="text" value='{{$application_forms->Sponsor_Name}}'name="Sponsor_Name" placeholder="Sponsor_Name" required> </li>
                <li>Father name of sponsor*:  <input type="text" value='{{$application_forms->Sponsors_Father_name}}'name="Sponsors_Father_name" placeholder="" required></li>
                <li>EPIC/UID No. of Sponsor (copy enclosed)*:<input type="text" value='{{$application_forms->Sponsors_EPIC_UID_No}}'name="Sponsors_EPIC_UID_No" placeholder="" required></li>
                <li>No. of Non Mizos Presently Sponsored:<input type="text" value='{{$application_forms->No_of_Non_Mizos_Presently_Sponsored}}'name="No_of_Non_Mizos_Presently_Sponsored" placeholder="" required> </li>
                <li>Provisional Pass No.(Copy enclosed)*: <input type="text" value='{{$application_forms->Provisional_Pass_No}}'name="Provisional_Pass_No" placeholder="" required></li>
                </div>
                <div id="sponsor_adress" class="block">
                    <li><p class="address">Sponsor Address :--</p>
                        <ul >
                            <li>House no.* : <input type="text"value='{{$application_forms->sponsor_address_Hno}}'name="sponsor_address_Hno" placeholder="H/no." required></li>
                            <li>Sub locality 1* : <input type="text"value='{{$application_forms->sponsor_address_Sub_locality1}}'name="sponsor_address_Sub_locality1" placeholder="" required></li>
                            <li>Sub locality 2 : <input type="text"value='{{$application_forms->sponsor_address_Sub_locality2}}'name="sponsor_address_Sub_locality2" placeholder="" ></li>
                            <li>Location* : <input type="text"value='{{$application_forms->sponsor_address_Location}}'name="sponsor_address_Location" placeholder="" required></li>
                            <li>Sub District* : <input type="text" value='{{$application_forms->sponsor_address_Sub_District}}'name="sponsor_address_Sub_District" placeholder="" required></li>
                            <li>District* : <input type="text"value='{{$application_forms->sponsor_address_District}}'name="sponsor_address_District" placeholder="" required></li>
                            <li>State* : <input type="text"value='{{$application_forms->sponsor_address_State}}'name="sponsor_address_State" placeholder="" required></li>
                            <li>Pin code* : <input type="text"value='{{$application_forms->sponsor_address_pin_code}}'name="sponsor_address_pin_code" placeholder="" required></li>
                            <li>Police Station* : <input type="text"value='{{$application_forms->sponsor_address_Police_Station}}'name="sponsor_address_Police_Station" placeholder="" required></li>
                            <li>Post office* : <input type="text"value='{{$application_forms->sponsor_address_Post_office}}'name="sponsor_address_Post_office" placeholder="" required></li>
                        </ul>
                    </li>
                </div>
                <div id="otherDetail" class="block">
                <p class="address">Other Details :--</p>
                <li>V.C : <input type="text" value='{{$application_forms->VC}}' name="VC" placeholder="" required></li>
                <li>H_No: <input type="text"  value='{{$application_forms->H_No}}'name="H_No" placeholder="" required></li>
                
                <li>Purpose of stay* : <textarea name="Purpose_of_stay"  cols="30" rows="10" required>{{$application_forms->Purpose_of_stay}}</textarea></li>
                <li>Need for labour : <textarea name="Need_for_labour" cols="30" rows="10">{{$application_forms->Need_for_labour}}</textarea>{{$application_forms->Need_for_labour}}</li>
                <li>Regd.No. (in case of Workshop/Industries, etc.) : <input type="text" value='{{$application_forms->Regd_No}}' name="Regd_No" placeholder="" required></li>
                <li>L.S.C No. (in case of Construction works) : <input type="text" value='{{$application_forms->LSC_No}}' name="LSC_No" placeholder="" required></li>
                <li>Skilled_SemiSkilled_Unskilled :
                    <select name="Skilled_SemiSkilled_Unskilled" >
                        <option selected >{{$application_forms->LSC_No}}</option>
                        <option value="Skilled">Skilled</option>
                        <option value="Semi-Skilled">Semi-Skilled</option>
                        <option value="Unskilled">Unskilled</option>
                    </select>
                </li>
                </div>
                <li>Validity Period : <input type="date" value='{{$application_forms->Validaty_Period}}'name="Validaty_Period" placeholder="" required></li>
                <br>
                <fieldset>
                    <legend>List of Scanned supporting Documents</legend> 
                  <li>  EPIC/UID No. of Sponsor :
                  <p>Current File:{{ $application_forms->doc1}}</p>
                   <input type="file"  name="doc1" > </li>   
                   <br> <li>Provisional Pass No: 
                   <p>Current File:{{ $application_forms->doc2}}</p>
                   <input type="file" name="doc2" >    </li>
                </fieldset>
                </ol>
<li><strong>REASON FOR EXTENSION*</strong> : <textarea name="Reason_For_Extension" cols="30" rows="10" required>{{$application_forms->Reason_For_Extension}}</textarea></li>
                Remarks by applicant to forwarder* : <textarea name="Remark" id="Remark" cols="30" rows="10" required> {{$application_forms->Remark}}</textarea> <br>
            <!-- <li>remarksByForwarder : <input type="text" value='{{$application_forms->Remarks_from_forwarder}}'  required></li>           -->
            <input type="checkbox" placeholder="" required id="check"> I hereby declare that all the documents attached are verified with originals. <br> 
            <!-- $application_forms->Remarks_from_forwarder='NULL';
        $application_forms->Remarks_from_adc='NULL'; -->

      <input id='submit' type="submit" class="btn btn-primary" value="save"> 
            
            </div>

        </form>
</div>



</body>
@endsection