<?php require 'includes/header_start.php'; ?>
    <!-- Plugins css-->
    <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet"/>
    <link href="assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
<?php require 'includes/header_end.php'; ?>


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Advanced Plugins</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Advanced Plugins</li>
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-12">
                                    <h4 class="header-title m-t-0 m-b-20">Tags Input</h4>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6">
                                            <h6>Input Tags</h6>
                                            <p class="text-muted m-b-20 font-13">
                                                Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.
                                            </p>
                                            <div class="tags-default">
                                                <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"/>
                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6 m-t-sm-40">
                                            <h6>True multi value</h6>
                                            <p class="text-muted m-b-20 font-13">
                                                Use a <code>&lt;select multiple /&gt;</code> as your input element for a tags input, to gain true multivalue support.
                                                Instead of a comma separated string, the values will be set in an array. Existing <code>&lt;option /&gt;</code>
                                                elements will automatically be set as tags. This makes it also possible to create tags containing a comma.
                                            </p>
                                            <div class="m-b-0">
                                                <select multiple data-role="tagsinput">
                                                    <option value="Amsterdam">Amsterdam</option>
                                                    <option value="Washington">Washington</option>
                                                    <option value="Sydney">Sydney</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div><!-- end row -->

                                </div>

                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-12">
                                    <h4 class="header-title m-t-0 m-b-0">Switchery</h4>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-4 m-t-20">
                                            <h6>Basic</h6>
                                            <p class="text-muted m-b-20 font-13">
                                                Add an attribute <code>
                                                    data-plugin="switchery" data-color="@colors"</code>
                                                to your input element and it will be converted into switch.
                                            </p>

                                            <div class="switchery-demo">
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#039cfd"/>
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#f1b53d"/>
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a"/>
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#ff5d48"/>
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#3db9dc"/>
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#2b3d51"/>
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#9261c6"/>
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#ff7aa3"/>
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#98a6ad"/>
                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-4 m-t-20">
                                            <h6>Sizes</h6>
                                            <p class="text-muted m-b-30 font-13">
                                                Add an attribute <code>
                                                    data-size="small",data-size="large"</code>
                                                to your input element and it will be converted into switch.
                                            </p>

                                            <div class="switchery-demo">
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#ff7aa3"/>
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#2b3d51" data-size="large"/>
                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-4 m-t-20">
                                            <h6>Secondary color</h6>
                                            <p class="text-muted m-b-30 font-13">
                                                Add an attribute <code>
                                                    data-color="@color" data-secondary-color="@color"</code>
                                                to your input element and it will be converted into switch.
                                            </p>

                                            <div class="switchery-demo">
                                                <input type="checkbox" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" />
                                                <input type="checkbox" data-plugin="switchery" data-color="#9261c6"  data-secondary-color="#ff7aa3" checked />
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-12">
                                    <h4 class="header-title m-t-0 m-b-0">Multiple Select</h4>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-4 m-t-20">
                                            <h6>Default</h6>
                                            <p class="text-muted m-b-20 font-13">
                                                Use a <code>
                                                    &lt;select multiple /&gt;</code>
                                                as your input element for a tags input, to gain true multivalue support.
                                            </p>

                                            <select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]" data-plugin="multiselect">
                                                <option>Dallas Cowboys</option>
                                                <option>New York Giants</option>
                                                <option selected>Philadelphia Eagles</option>
                                                <option selected>Washington Redskins</option>
                                                <option>Chicago Bears</option>
                                                <option>Detroit Lions</option>
                                                <option>Green Bay Packers</option>
                                                <option>Minnesota Vikings</option>
                                                <option selected>Atlanta Falcons</option>
                                                <option>Carolina Panthers</option>
                                                <option>New Orleans Saints</option>
                                                <option>Tampa Bay Buccaneers</option>
                                                <option>Arizona Cardinals</option>
                                                <option>St. Louis Rams</option>
                                                <option>San Francisco 49ers</option>
                                                <option>Seattle Seahawks</option>
                                            </select>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-4 m-t-20">
                                            <h6>Grouped Options</h6>
                                            <p class="text-muted m-b-20 font-13">
                                                Use a <code>
                                                    &lt;select multiple /&gt;</code>
                                                as your input element for a tags input, to gain true multivalue support.
                                            </p>

                                            <select multiple="multiple" class="multi-select" id="my_multi_select2" name="my_multi_select2[]" data-plugin="multiselect" data-selectable-optgroup="true">
                                                <optgroup label="NFC EAST">
                                                    <option>Dallas Cowboys</option>
                                                    <option>New York Giants</option>
                                                    <option>Philadelphia Eagles</option>
                                                    <option>Washington Redskins</option>
                                                </optgroup>
                                                <optgroup label="NFC NORTH">
                                                    <option>Chicago Bears</option>
                                                    <option>Detroit Lions</option>
                                                    <option>Green Bay Packers</option>
                                                    <option>Minnesota Vikings</option>
                                                </optgroup>
                                                <optgroup label="NFC SOUTH">
                                                    <option>Atlanta Falcons</option>
                                                    <option>Carolina Panthers</option>
                                                    <option>New Orleans Saints</option>
                                                    <option>Tampa Bay Buccaneers</option>
                                                </optgroup>
                                                <optgroup label="NFC WEST">
                                                    <option>Arizona Cardinals</option>
                                                    <option>St. Louis Rams</option>
                                                    <option>San Francisco 49ers</option>
                                                    <option>Seattle Seahawks</option>
                                                </optgroup>
                                            </select>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-4 m-t-20">
                                            <h6>Searchable</h6>
                                            <p class="text-muted m-b-20 font-13">
                                                Use a <code>
                                                    &lt;select multiple /&gt;</code>
                                                as your input element for a tags input, to gain true multivalue support.
                                            </p>

                                            <select name="country" class="multi-select" multiple="" id="my_multi_select3" >
                                                <option value="AF">Afghanistan</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BA">Bosnia and Herzegowina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Cote d'Ivoire</option>
                                                <option value="HR">Croatia (Hrvatska)</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard and Mc Donald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran (Islamic Republic of)</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macau</option>
                                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint LUCIA</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SH">St. Helena</option>
                                                <option value="PM">St. Pierre and Miquelon</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands (British)</option>
                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                <option value="WF">Wallis and Futuna Islands</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-xl-6">
                                    <h4 class="header-title m-t-0 m-b-20">Select2</h4>

                                    <div class="p-20">
                                        <h6 class="text-muted">Single Select</h6>
                                        <p class="text-muted m-b-15 font-13">
                                            Select2 can take a regular select box like this...
                                        </p>

                                        <select class="form-control select2">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>

                                        <h6 class="m-t-30 text-muted">Multiple Select</h6>
                                        <p class="text-muted m-b-15 font-13">
                                            Select2 can take a regular select box like this...
                                        </p>

                                        <select class="select2 form-control select2-multiple" multiple="multiple" multiple data-placeholder="Choose ...">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                </div>


                                <div class="col-xl-6 m-t-sm-40">
                                    <h4 class="header-title m-t-0 m-b-20">Auto Complete</h4>

                                    <form class="p-20">
                                        <div class="form-group m-b-30">
                                            <label class="control-label text-muted">Ajax Lookup</label>
                                            <input type="text" name="country" id="autocomplete-ajax"
                                                   class="form-control"
                                                   style=" z-index: 2; background: transparent;"/>
                                            <input type="text" name="country" id="autocomplete-ajax-x"
                                                   disabled="disabled" class="form-control"
                                                   style="color: #CCC; position: absolute; background: transparent; z-index: 1;display: none;"/>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label text-muted">Local Lookup and Grouping</label>
                                            <input type="text" name="country" id="autocomplete"
                                                   class="form-control"/>
                                        </div>

                                    </form>

                                </div>

                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-sm-12 col-xs-12">
                                    <h4 class="header-title m-t-0 m-b-10">Bootstrap MaxLength</h4>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6">
                                            <div class="p-20">
                                                <h6 class="text-muted">Default usage</h6>
                                                <p class="text-muted m-b-15 font-13">
                                                    The badge will show up by default when the remaining chars are 10 or less:
                                                </p>
                                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />

                                                <div class="m-t-20">
                                                    <h6 class="text-muted">Threshold value</h6>
                                                    <p class="text-muted m-b-15 font-13">
                                                        Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option:
                                                    </p>
                                                    <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                                </div>

                                                <div class="m-t-20">
                                                    <h6 class="text-muted">All the options</h6>
                                                    <p class="text-muted m-b-15 font-13">
                                                        Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.
                                                    </p>
                                                    <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6">
                                            <div class="p-20">

                                                <h6 class="text-muted">Position</h6>
                                                <p class="text-muted m-b-15 font-13">
                                                    All you need to do is specify the <code>placement</code> option, with one of those strings. If none
                                                    is specified, the positioning will be defauted to 'bottom'.
                                                </p>
                                                <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />

                                                <div class="m-t-20">
                                                    <h6 class="text-muted">textareas</h6>
                                                    <p class="text-muted m-b-15 font-13">
                                                        Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                                    </p>
                                                    <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- end row -->

                        </div>
                    </div><!-- end col-->

                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->



    </div>
    <!-- End content-page -->


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->



<?php require 'includes/footer_start.php' ?>

    <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

    <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
    <script src="assets/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

    <!-- Autocomplete -->
    <script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
    <script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
    <script type="text/javascript" src="assets/plugins/autocomplete/countries.js"></script>
    <script type="text/javascript" src="assets/pages/jquery.autocomplete.init.js"></script>

    <script type="text/javascript" src="assets/pages/jquery.formadvanced.init.js"></script>
<?php require 'includes/footer_end.php' ?>