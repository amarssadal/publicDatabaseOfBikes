<?php
    require_once('../private/initialise.php');
    $title = 'The public Database of Bikes - Add new Bike';
    include(SHARED_PATH . '/header.php');

?>
<body>
    <div class="wrapper">
        <?php include(SHARED_PATH . '/logoBox.php'); ?>
        <div class = "searchBox">
            <?php include(SHARED_PATH . '/searchBox.php'); ?>
        </div>
        <div class = "contentContainer">
            <div class = "addNewBox">
                <form class="form" action="<?php echo url_for('ingest.php') ?>" method="post" onsubmit="return validateForm();">
                    <div class = "section title">
                        <div class ="pageTitle">
                            ADD YOUR BIKE
                        </div>
                        <div class = "part titleText">
                            <p>
                                Thank you for taking the time to add your bike to this database. Every single bike added to this database helps it grow and become that much more resourceful.  Once added your entry will be approved and added to the database within a few hours. Our strategy is simple. Make a database that the people fill, the people correct and the people update. A bit like Wiki. It's a simple strategy and will always be made available to everyone for free.
                            </p>
                            <p>
                                Please give us as much accurate information as possible below. If you are unsure of a certain spec, leave it blank. Someone elsewhere may be able to fill this in for you :)
                            </p>
                        </div>
                    </div>

                    <div class = "section">
                        <div class ="sectionTitle">
                            Manufacturer & Model
                        </div>
                        <div class = "part">
                            <label for = "model">Manufacturer</label>
                            <input class = "manufacturer" type = "text" name = "manufacturer" maxlength = "200">
                        </div>
                        <div class = "part">
                            <label for = "model">Model</label>
                            <input class = "model" type = "text" name = "model" maxlength = "120">
                        </div>
                        <div class = "part fifty">
                            <label for = "year">Year</label>
                            <select class = "weight dropDown makeInlineBlock" name = "year">
                                <?php
                                    $curr_date = date('Y');
                                    for ($i = $curr_date; $i > 1800; $i--) {
                                        echo '<option value = "' . $i . '">' . $i . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class = "part fifty">
                            <label for = "country">Country</label>
                            <select class = "country dropDown" id = "country" name = "country">
                                <option value="">Select</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
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
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>

                    <div class = "frameFork section">
                        <div class ="sectionTitle">
                            Frame & Fork
                        </div>
                        <div class = "part fifty">
                            <label for = "frameSystem">Frame System</label>
                            <select class = "frameSystem dropDown" name = "frameSystem">
                                <option value="">Select</option>
                                <option value="Cantilever">Cantilever</option>
                                <option value="Cross">Cross</option>
                                <option value="Diamond">Diamond</option>
                                <option value="Folding">Folding</option>
                                <option value="Penny Farthing">Penny Farthing</option>
                                <option value="Prone">Prone</option>
                                <option value="Recumbent">Recumbent</option>
                                <option value="Step Through">Step Through</option>
                                <option value="Tandem">Tandem</option>
                            </select>
                            <input type = "text" class = "otherFrameSystem toHide makeBlock" name = "frontDerailleurs" maxlength = "50">
                        </div>
                        <div class = "part fifty">
                            <label for = "frameMaterial">Frame Material</label>
                            <select class = "frameMaterial dropDown" name = "frameMaterial">
                                <option value="">Select</option>
                                <option value="Aluminium">Aluminium</option>
                                <option value="Carbon">Carbon</option>
                                <option value="Steel">Steel</option>
                                <option value="Titanium">Titanium</option>
                            </select>
                            <input type = "text" class = "otherFrameMaterial toHide makeBlock" name = "frontDerailleurs" maxlength = "50">
                        </div>

                        <div class = "part">
                            <label for = "forkMaterial">Fork Material</label>
                            <select class = "forkMaterial dropDown" name = "forkMaterial">
                                <option value="">Select</option>
                                <option value="Aluminium">Aluminium</option>
                                <option value="Carbon">Carbon</option>
                                <option value="Steel">Steel</option>
                                <option value="Titanium">Titanium</option>
                            </select>
                            <input type = "text" class = "otherForkMaterial toHide makeBlock" name = "frontDerailleurs" maxlength = "50">
                        </div>
                        <div class = "part">
                            <label for = "weight">Weight</label>
                            <select class = "weight dropDown makeInlineBlock" name = "weight">
                                <?php
                                    for ($i = 1; $i < 41; $i++) {
                                        echo '<option value = "' . $i . '">' . $i . '</option>';
                                    }
                                ?>
                            </select>
                            <select class = "dropDown makeInlineBlock" name = "weightUnits">
                                <option value = "kgs">kgs</option>
                                <option value = "lbs">lbs</option>
                            </select>
                        </div>
                        <div class = "part">
                            <label for = "frameSize">Frame Size</label>
                            <select class = "frameSize dropDown" name = "frameSize">
                                <option value="">Select</option>
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                                <option value="Extra Large">Extra Large</option>
                            </select>
                        </div>
                    </div>

                    <div class = "groupChain section">
                        <div class ="sectionTitle">
                            Group Set & Chain Set
                        </div>
                        <div class = "part fifty">
                            <label for = "frontDerailleur">Front Derailleur</label>
                            <select class = "frontDerailleur dropDown" name = "frontDerailleur">
                                <option value="">Select</option>
                                <option value="Campagnolo">Campagnolo</option>
                                <option value="Shimano">Shimano</option>
                                <option value="SRAM">SRAM</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type = "text" class = "otherShifterType toHide makeBlock" name = "frontDerailleurs" maxlength = "80">
                        </div>
                        <div class = "part fifty">
                            <label for = "rearDerailleur">Rear Derailleur Type</label>
                            <select class = "rearDerailleur dropDown" name = "rearDerailleur">
                                <option value="same">Same as front</option>
                                <option value="Campagnolo">Campagnolo</option>
                                <option value="Shimano">Shimano</option>
                                <option value="SRAM">SRAM</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type = "text" class = "otherShifterType toHide makeBlock" name = "frontDerailleurs" maxlength = "80">
                        </div>
                        <div class = "part">
                            <label for = "gears">Gears</label>
                            <select class = "gears dropDown" name = "gears">
                                <?php
                                    for ($i = 1; $i < 76; $i++) {
                                        echo '<option value = "' . $i . '">' . $i . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class = "part fifty">
                            <label for = "shifterType">Shifter Type</label>
                            <select class = "shifterType dropDown" name = "shifterType">
                                <option value="">Select</option>
                                <option value="Bar End">Bar End</option>
                                <option value="Dropbar Integrated Combo">Dropbar Integrated Combo</option>
                                <option value="Grip">Grip</option>
                                <option value="Thumb">Thumb</option>
                                <option value="Trigger">Trigger</option>
                            </select>
                            <input type = "text" class = "otherShifterType toHide makeBlock" name = "frontDerailleurs" maxlength = "80">
                        </div>
                        <div class = "part fifty">
                            <label for = "shifter">Shifter</label>
                            <select class = "shifter dropDown" name = "shifter">
                                <option value="">Select</option>
                                <option value="Campagnolo">Campagnolo</option>
                                <option value="Shimano">Shimano</option>
                                <option value="SRAM">SRAM</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type = "text" class = "otherShifter toHide makeBlock" name = "frontDerailleurs" maxlength = "80">                        
                        </div>
                        <div class = "part fifty">
                            <label for = "chainSet">Chain Set</label>
                            <input class = "chainSet" type = "text" name = "chainSet" maxlength = "120">
                        </div>
                        <div class = "part fifty">
                            <label for = "chain">Chain</label>
                            <input class = "chain" type = "text" name = "chain" maxlength = "80">
                        </div>
                        <div class = "part fifty">
                            <label for = "cassette">Cassette</label>
                            <input class = "cassette" type = "text" name = "cassette" maxlength = "80">
                        </div>
                        <div class = "part fifty">
                            <label for = "bottomBracket">Bottom Bracket</label>
                            <select class = "bottomBracket dropDown" name = "bottomBracket">
                                <option value="">Select</option>
                                <option value="External BB">External BB</option>
                                <option value="Cartridge">Cartridge </option>
                                <option value="Other">Other</option>
                            </select>
                            <input type = "text" class = "otherBottomBracket toHide makeBlock" name = "frontDerailleurs" maxlength = "80">
                        </div>
                    </div>
                
                    <div class = "front section">
                        <div class ="sectionTitle">
                            Stem & Bar
                        </div>
                        <div class = "part fifty">
                            <label for = "stem">Stem</label>
                            <input class = "stem" type = "text" name = "stem" maxlength = "80">  
                        </div>
                        <div class = "part fifty">
                            <label for = "headSet">Head Set</label>
                            <input class = "headSet" type = "text" name = "headSet" maxlength = "80">
                        </div>
                        <div class = "part fifty">
                            <label for = "handleBar">Hande Bars</label>
                            <select class = "handleBar dropDown" name = "handleBar">
                                <option value="">Select</option>
                                <option value="Aero/Time Trial">Aero/Time Trial</option>
                                <option value="Cruiser/Upright">Cruiser/Upright</option>
                                <option value="Drop">Drop</option>
                                <option value="Riser">Riser</option>
                            </select>
                        </div>
                        <div class = "part fifty">
                            <label for = "barTape">Bar Tape</label>
                            <input class = "barTape" type = "text" name = "barTape" maxlength = "80">
                        </div>
                    </div>

                    <div class = "braking section">
                        <div class ="sectionTitle">
                            Braking
                        </div>
                        <div class = "part fifty">
                            <label for = "brakeSystem">Brake System</label>
                            <select class = "brakeSystem dropDown" name = "brakeSystem">
                                <option value="">Select</option>
                                <option value="Cantilever">Cantilever</option>
                                <option value="Caliper">Caliper</option>
                                <option value="Disc">Disc</option>
                                <option value="V-Brakes">V-Brakes</option>
                            </select>    
                        </div>
                        <div class = "part fifty">
                            <label for = "brakeLevers">Brake Levers</label>
                            <input class = "brakeLevers" type = "text" name = "brakeLevers" maxlength = "80">
                        </div>
                        <div class = "part fifty">
                            <label for = "brakes">Brakes</label>
                            <input class = "brakes" type = "text" name = "brakes" maxlength = "80">
                        </div>
                    </div>

                    <div class = "groupChain section">
                        <div class ="sectionTitle">
                            Wheels & Tube
                        </div>
                        <div class = "part fifty">
                            <label for = "wheels">Wheels</label>
                            <input class = "wheels" type = "text" name = "wheels" maxlength = "80">
                        </div>
                        <div class = "part fifty">
                            <label for = "frontHub">Front Hub</label>
                            <input class = "frontHub" type = "text" name = "frontHub" maxlength = "80">
                        </div>
                        <div class = "part fifty">
                            <label for = "rearHub">Rear Hub</label>
                            <input class = "rearHub" type = "text" name = "rearHub" maxlength = "80">
                        </div>
                        <div class = "part fifty">
                            <label for = "tyres">Tyres</label>
                            <input class = "tyres" type = "text" name = "tyres" maxlength = "80">
                        </div>
                        <div class = "part">
                            <label for = "tube">Tubes</label>
                            <select class = "tube dropDown" name = "tube">
                                <option value="">Select</option>
                                <option value="Presta">Presta</option>
                                <option value="Schrader">Schrader</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type = "text" class = "otherTube toHide makeBlock" name = "otherTube" maxlength = "80">
                        </div>
                    </div>

                    <div class = "saddlePost section">
                        <div class ="sectionTitle">
                            Saddle & Seat Post
                        </div>
                        <div class = "part fifty">
                            <label for = "saddle">Saddle</label>
                            <input class = "saddle" type = "text" name = "saddle" maxlength = "80">
                        </div>

                        <div class = "part fifty">
                            <label for = "seatPost">Seat Post</label>
                            <input class = "seatPost" type = "text" name = "seatPost" maxlength = "80">
                        </div>
                    </div>

                    <div class = "section additionalFeatures">
                        <div class ="sectionTitle">
                            Additional Features
                        </div>

                        <?php
                            $additionalFeatures = array("Lights", "Tubeless Tyres", "Internal Cabling", "Front Rack", "Rear Rack", "Kick Stand", "Mud Guards", "Dynamo");

                            foreach ($additionalFeatures as $features) {
                                $name = str_replace(" ", "", $features);
                                $name = lcfirst($name);
                                echo "<div class = 'additionalRadio fifty'>\n";
                                echo "<label for = '$name'>$features</label>\n";
                                echo "<div>\n";
                                echo "<span>Yes</span>\n";
                                echo "<input type = 'radio' id = '$name' name = '$name' value = 'yes'>\n";
                                echo "</div>\n";
                                echo "<div>\n";
                                echo "<span>No</span>\n";
                                echo "<input type = 'radio' id = '$name' name = '$name' value = 'no'>\n";
                                echo "</div>\n";
                                echo "</div>\n";
                            }
                        ?>

                        <div class = "additional fifty">
                            <label for = "tyreClearance">Tyre  Clearance</label>
                            <input class = "tyreClearance" type = "text" name = "tyreClearance" maxlength = "20">
                        </div>
                        <div class = "additional fifty">
                            <label for = "bottleHolders">No of bottle holders</label>
                            <select class = "dropDown" name = "bottleHolders">
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    echo '<option value = "' . $i . '">' . $i . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class = "additionalInfo section">
                        <div class ="sectionTitle">
                            Additional Information
                        </div>
                        <div class = "part">
                            <label for = "manualInfo">If you have any other information about your bike that doesn't fit in any of the fields above then please use this box to manually enter the details. We will go through this and add and update additional fields above accordingly.</label>
                            <textarea class = "manualInfo" type = "text" name = "manualInfo" maxlength = "800" ></textarea>
                        </div>
                    </div>

                    <div class = "section">
                        <input class = "submitButton" type = "submit" value = "Add to database" onclick = "return validateForm();"/>
                    </div>
                </form>
            </div>
        </div>
<?php include(SHARED_PATH . '/footer.php'); ?>