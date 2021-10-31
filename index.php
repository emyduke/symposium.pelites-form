<?php
    
    if (
        isset($_POST['first_name']) &&
        isset($_POST['middle_name']) &&
        isset($_POST['last_name']) &&
        isset($_POST['nationality']) &&
        isset($_POST['business_name']) &&
        isset($_POST['designation']) &&
        isset($_POST['street_address']) &&
        isset($_POST['city']) &&
        isset($_POST['state_province']) &&
        isset($_POST['country']) &&
        isset($_POST['email']) &&
        isset($_POST['phone_number']) &&
        isset($_POST['area_of_business']) &&
        isset($_POST['event']) &&
        isset($_POST['number_of_dependents']) &&
        isset($_POST['categories']) &&
        isset($_POST['valid_visa_1'])
        // isset($_POST['valid_visa_no'])
        ){
            if(
                !empty($_POST['first_name']) &&
            !empty($_POST['middle_name']) &&
            !empty($_POST['last_name']) &&
            !empty($_POST['nationality']) &&
            !empty($_POST['business_name']) &&
            !empty($_POST['designation']) &&
            !empty($_POST['street_address']) &&
            !empty($_POST['city']) &&
            !empty($_POST['state_province']) &&
            !empty($_POST['country']) &&
            !empty($_POST['email']) &&
            !empty($_POST['phone_number']) &&
            !empty($_POST['area_of_business']) &&
            !empty($_POST['event']) &&
            !empty($_POST['number_of_dependents']) &&
            !empty($_POST['categories']) &&
            !empty($_POST['valid_visa_1'])
            ){
                $first_name = $_POST['first_name'];
                $middle_name = $_POST['middle_name'];
                $last_name = $_POST['last_name'];
                $nationality = $_POST['nationality'];
                $business_name = $_POST['business_name'];
                $designation = $_POST['designation'];
                $street_address = $_POST['street_address'];
                $city = $_POST['city'];
                $state_province = $_POST['state_province'];
                $country = $_POST['country'];
                $email = $_POST['email'];
                $phone_number = $_POST['phone_number'];
                $area_of_business = $_POST['area_of_business'];
                $event = $_POST['event'];
                $number_of_dependents = $_POST['number_of_dependents'];
                $categories = $_POST['categories'];
                $valid_visa_1 = $_POST['valid_visa_1'];




                // send to user
                $to = $email;
                $subject = "COMPLETE PAYMENT TO RECEIVE PERSONALIZED LETTER OF INVITATION";

                $message = 'Dear '.$first_name.',<br>';
                $message .= "Prestigious Elites Organization in partnership with African Union, Organizers of World Highest Award (Africa Highest Honour Award category) welcomes you to London 2022, Entrepreneurship Symposium slated to take place on 5th-7th of May 2022.<br><br>";
                $message .= "To participate or attend London 2022 symposium kindly make payment into <br/>";
                $message .= "account name:  Prestigious Elites Organization<br/>";
                $message .= "Bank: Zenith Bank<br/>";
                $message .= "Account number: 1216900467 <br/>";
                $message .= "Sort code: 057080028 <br/>";
                $message .= "Swift number: ZEIBNGLA <br/>";
                $message .= "IBAN No: GB80CITI18500810407941 <br/><br/>";
                $message .= "For registration visit symposium.pelites.org Membership visit www.pelites.org <br/>
                            Registration closes January 1, 2022; late registration shall attract extra charges
                            <br/><br/>";
                $message .= "Kindly convert currency to local currency through 
                            https://www.xe.com/currencyconverter/convert/?Amount=1&From=GBP&To=USD 
                            <br/><br/>";
                $message .= "For visa application follow the link, fill the form and wait for confirmation. <br/><br/>";

                $message .= "Congratulations!<br/>
                            See you in London!<br>";
                
                $message .= "For more information on how to make payment call 
                            +234 703 693 8885 +44 7956 119367
                            <br/><br/>";
                
                $message .= "Signed:  Secretary General <br/><br/>";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <hello@pelites.org>' . "\r\n";
                $headers .= 'Cc: myboss@example.com' . "\r\n";

                mail($to,$subject,$message,$headers);

                $msg_success = $message;




                // send to owner
                $to = "drfestusasikhia@gmail.com";
                $subject = "New User Registration";
                $message = "<strong>Personel Details:</strong>";
                $message .= "First Name: ". $first_name.",<br/>";
                $message .= "Middle Name: ". $middle_name.",<br/>";
                $message .= "Last Name: ". $last_name.",<br/>";
                $message .= "Nationality: ". $nationality.",<br/>";
                $message .= "Business Name: ". $business_name.",<br/>";
                $message .= "Designation: ". $designation.",<br/>";
                $message .= "Street Address: ". $street_address.",<br/>";
                $message .= "City: ". $city.",<br/>";
                $message .= "State/Province: ". $state_province.",<br/>";
                $message .= "Country: ". $country.",<br/>";
                $message .= "Email: ". $email.",<br/>";
                $message .= "Phone Number: ". $phone_number.",<br/>";
                $message .= "Area of business: ". $area_of_business.",<br/>";
                $message .= "Event: ". $event.",<br/>";
                $message .= "Number of dependents: ". $number_of_dependents.",<br/>";
                $message .= "Categories: ". $categories.",<br/>";
                $message .= "Valid Visa". $valid_visa_1.",<br/>";

                if(isset($_POST['valid_visa_no'])){
                    $message .= "If no: do you want our consultant to prepare visa for you or your dependent:  ". $_POST['valid_visa_no'];
                }

                mail($to,$subject,$message,$headers);
                

            }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | Symposium</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="assets/fonts/fonts.css">
    <link rel="stylesheet" href="assets/css/card-ui.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/sidemenu.css">
    <link rel="stylesheet" href="assets/css/step.css">

<body>
    <header>
        <div class="logo text--success"><a href="/" class="text--success">
                <img src="assets/img/logo.png" style="max-width: 200px" />
            </a></div>
        <div class="nav__search d-none d-md-flex">


            <a href="" class="menu-item">Welcome</a>
            <a href="" class="menu-item">Register Here</a>
            <a href="" class="menu-item">Sponsorship</a>

        </div>
        <div class="cart__btn d-none d-lg-flex">
            <div class="">
                <a href="/" class="btn btn--primary rounded-pill">
                    Home
                </a>
            </div>

        </div>

        <div class="d-flex d-lg-none mobile-menu">


            <span class="toggle-off-canvas-menu">
                <i class="fa fa-bars fa-2x"></i>
            </span>
        </div>
    </header>

    <div class="container mb-5">


        <?php if ($msg_success) { ?>
            <div class="alert alert-success"><?= $msg_success; ?></div>
        <?php } ?>
        


        <form action="" method="POST" data-persist="garli c" id="assessmentForm">

            <div class="mb-3" style="display: flex; flex-direction: row; justify-content: end;">
                <div style="text-align:center;">
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </div>

            <div class="tab" style="margin-bottom: 100px">

            

                <div class="mb-2">
                    <label class="font-bold">Title</label>
                    <select name="title" class="custom-select" name="title">
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Mx.">Mx.</option>
                        <option value="Miss.">Miss.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Prof.">Prof.</option>
                    </select>
                </div>

                <div class="mb-2">
                <label class="font-bold">First Name <span class="text-danger">*</span></label>
                    <input type="text" name="first_name" placeholder="E.g. John" class="form-control" >
                </div>

                <div class="mb-2">
                <label class="font-bold">Middle Name</label>
                    <input type="text" name="middle_name" placeholder="E.g. Smith" class="form-control" >
                </div>

                <div class="mb-2">
                <label class="font-bold">Last Name <span class="text-danger">*</span></label>
                    <input type="text" name="last_name" placeholder="E.g. Doe" class="form-control" >
                </div>

                <div class="mb-2">
                <label class="font-bold">Nationality <span class="text-danger">*</span></label>
                    <input type="text" name="nationality" placeholder="E.g. text placeholder" class="form-control" >
                </div>

                <div class="mb-2">
                <label class="font-bold">Business Brand or Name <span class="text-danger">*</span></label>
                    <input type="text" name="business_name" placeholder="Business Name" class="form-control" >
                </div>

                <div class="mb-2">
                <label class="font-bold">Designation <span class="text-danger">*</span></label>
                    <input type="text" name="designation" placeholder="Designation" class="form-control" >
                </div>

                <div class="mb-2">
                <label class="font-bold">Street Address <span class="text-danger">*</span></label>
                    <input type="text" name="street_address" placeholder="E.g. 42 Wallaby Way" class="form-control" >
                </div>

                <div class="mb-2">
                <label class="font-bold">City <span class="text-danger">*</span></label>
                    <input type="text" name="city" placeholder="E.g. Sydney" class="form-control" >
                </div>

                <div class="mb-2">
                <label class="font-bold">State/Province <span class="text-danger">*</span></label>
                    <input type="text" name="state_province" placeholder="E.g. New South Wales" class="form-control" >
                </div>

                <div class="mb-2">
                <label class="font-bold">Country <span class="text-danger">*</span></label>
                    <select name="country" class="custom-select" id="countries" required>
                        <option disabled selected>-- Select country --</option>
                        
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
                </div>

                <div class="mb-2">
                <label class="font-bold">Email Address <span class="text-danger">*</span></label>
                    <input type="email" name="email" placeholder="E.g. john@doe.com" class="form-control" >
                </div>


                <div class="mb-2">
                <label class="font-bold">Phone Number <span class="text-danger">*</span></label>
                    <input type="number" name="phone_number" placeholder="E.g. +1300 400 5000" class="form-control" >
                </div>

                <div class="mb-2">
                <label class="font-bold">Area of Business <span class="text-danger">*</span></label>
                    <input type="text" name="area_of_business" placeholder="Textile, Manufacturing, Information technology, Politics etc" class="form-control" >
                </div>




            </div>







            <div class="tab" style="margin-bottom: 150px">
                <div class="mb-3">
                    <label class="font-bold">Event <span class="text-danger">*</span></label><br/>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="event" id="ar1" value="Award Recipient">
                        <label class="form-check-label" for="ar1">Award Recipient</label>
                    </div><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="event" id="sp1" value="Symposium Participant">
                        <label class="form-check-label" for="sp1">Symposium Participant</label>
                    </div><br/>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="event" id="both" value="Both">
                        <label class="form-check-label" for="both">Both</label>
                    </div>
                </div>


                <div class="mb-2">
                    <label class="font-bold">Number of Dependent(s) accompanying you</label>
                    <select name="number_of_dependents" class="custom-select" required>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>


                <div class="mb-5">
                    <div class="form-check form-check-inline">
                        <label class="font-bold">I Agree <span class="text-danger">*</span></label><br/>
                        <input class="form-check-input" type="checkbox" name="agree" id="iagree" value="agree" required>
                        <label class="form-check-label" for="iagree">i hereby certify that all information provided is correct. and I agree to receive registration letter, and all promotional materials via email.
                            <br/> click link for a registration category</label>
                    </div>
                </div>


                <div class="d-none" id="agree-container">

                    <div class="mb-5">

                        <div class="forminator-field forminator-merge-tags"><label class="forminator-label font-bold">Important Info</label><p>NON-REFUNDABLE REGISTRATION FEE FOR ALL PARTICIPANTS LONDON 2022 SYPOSIUM/ GALA AND AWARD NIGHT</p>
                        <p><br><strong>FIRST CATEGORY</strong><br>£750 additional dependent £250<br>Includes.<br>1. Symposium Participation<br>Breakfast/lunch.<br>2. Symposium materials<br>3. Certificates of attendance<br>4. Visiting places of interest plus lunch<br>5. Dinner/Gala/Award Night.</p>
                        <p><br><strong>VIP CATEGORY</strong><br>Everything in first category plus<br>Gala night Special Table for 5: £3,000<br>Special personality interview by BBC and PEO<br>Brand Exhibition<br>Brand, product, logo and image on red carpet backdrop</p>
                        <p><br><strong>VVIP CATEGORY</strong><br>Everything in first category plus<br>Gala night Special Table: £5,000<br>Special personality interview by CNN, BBC and PEO<br>VVIP Heathrow Airport arrival pickup and drop-off.<br>Brand Exhibition<br>Brand, product, logo and image on red carpet backdrop<br>Special recognition<br>Special priority</p>
                        <p><br><strong>EVENT SPECIAL BRANDING AND PARTNERSHIP</strong><br>Brand Exhibition only: £150<br>Brand, product, logo and image on red carpet backdrop only: £450<br>Branding in all event materials and online £1,000</p>
                        <p><strong>FOR SPECIAL SERVICE</strong><br>Hotel reservation Visa processing Flight ticket,<br>Arrival pickup and drop-off.<br>contacts us @<br>+44 7956 119367 +234703 693 8885</p></div>

                    </div>


                    <div class="mb-3">
                        <label class="font-bold">Categories <span class="text-danger">*</span></label>
                        <select name="categories" class="custom-select" multiple required>
                            <option value="FIRST CATEGORY £750 additional dependent £250">FIRST CATEGORY £750 additional dependent £250</option>
                            <option value="VIP CATEGORY Everything in first category plus">VIP CATEGORY Everything in first category plus</option>
                            <option value="VVIP CATEGORY Everything in first category plus">VVIP CATEGORY Everything in first category plus</option>
                            <option value="EVENT SPECIAL BRANDING AND PARTNERSHIP">EVENT SPECIAL BRANDING AND PARTNERSHIP</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="font-bold">Valid Visa? <span class="text-danger">*</span></label><br/>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="valid_visa_1" id="yes_ns" value="Yes" onchange="showHideVisaContainer('yes');">
                            <label class="form-check-label" for="yes_ns">Yes</label>
                        </div><br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="valid_visa_1" id="no_ns" value="No" onchange="showHideVisaContainer('no');">
                            <label class="form-check-label" for="no_ns">No</label>
                        </div>
                    </div>

                    <div class="d-none" id="valid-visa-container">
                        <div class="mb-3">
                            <label class="font-bold">If no: do you want our consultant to prepare visa for you or your dependent? <span class="text-danger">*</span></label><br/>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="valid_visa_no" id="yes" value="Yes">
                                <label class="form-check-label" for="yes">Yes</label>
                            </div><br/>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="valid_visa_no" id="no" value="No">
                                <label class="form-check-label" for="no">No</label>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label class="font-bold">Yes I agree <span class="text-danger">*</span></label><br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="agree" id="agree-to-fee" value="I agree">
                                <label class="form-check-label" for="agree-to-fee">Visa application attract separate fee.
                                <br/>Once the fee is paid can only get 50% of money paid if denied</label>
                            </div>
                        </div>
                    </div>
                </div>


            </div>















            <div style="position: fixed; bottom: 0; left: 0; width: 100%; padding: 20px; background-color: rgba(0,0,0,0.5)">
                <div style="overflow:auto; display: flex; flex-direction: row;" class="">
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center; width: 50%">
                        <!-- <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span> -->
                    </div>
                    <div style="width: 50%; display: flex; justify-content:flex-end;">
                        <button type="button" class="btn btn-primary" id="prevBtn"
                            onclick="nextPrev(-1)">Previous</button>
                        <button type="button" class="btn btn-primary" id="nextBtn"
                            onclick="nextPrev(1)">Next</button>
                        <button type="submit" class="btn btn-primary" style="display: none;" id="submitBtn">Submit</button>
                    </div>
                </div>
                
    
    
                <!-- <div class="text-end mt-5 d-none" style="position: fixed; bottom: 30px; right: 30px; z-index: 10000;">
                    <button type="submit" class="btn btn-outline-primary">Submit Survey</button>
                </div> -->
            </div>
        </form>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
    <!--[if lte IE 7]>
        <script src="https://raw.github.com/mattpowell/localstorageshim/master/localstorageshim.min.js" type="text/javascript" id="ie-localstorage-shim"></script>
    <![endif]-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/garlic.js"></script>
    <script src="assets/sweetalert2.js"></script>



    

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                // document.getElementById("nextBtn").innerHTML = "Submit";
                document.getElementById("nextBtn").style.display = "none";
                document.getElementById("submitBtn").style.display = "inline";
            } else {
                // document.getElementById("nextBtn").innerHTML = "Next";
                document.getElementById("nextBtn").style.display = "inline";
                document.getElementById("submitBtn").style.display = "none";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }


        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            //if (n == 1 && !validateForm()) return false;
            if (n == 1 && !validateForm()){ 
                Swal.fire({
                    status: 'error',
                    html: 'Some fields are still blank, kindly fill appropriately before proceeding!',
                    icon: 'error',
                    title: 'Error!'
                }) 
                return false;
            }
            
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                // document.getElementById("assessmentForm").submit();
                alert('ready to submit')
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }


        function validateForm() {
            // This function deals with validation of the form fields
            // alert(currentTab)
            var x, y, i, valid = true;

            x = document.getElementsByClassName("tab");
            $(x[currentTab]).find('input').each(function() {
                
                if( $(this).val() == "") {
                    $(this).css({'border': "1px solid red"})
                    valid = false;
                    console.log($(this).attr('name'))
                }
            })

            
            // y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            // for (i = 0; i < y.length; i++) {
            //     // If a field is empty...
            //     if (y[i].value == "") {
            
            //         // add an "invalid" class to the field:
            //         y[i].className += " invalid";
            //         // and set the current valid status to false
            //         valid = false;
            //     }
            // }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }


        const showHideVisaContainer = (input) => {
            var $container = $('#valid-visa-container');
            if(input == "no") {
                $container.removeClass('d-none');
                $('#agree-to-fee').attr('required', true)
                return;
            }
            $('#agree-to-fee').attr('required', false)
            $container.addClass('d-none');
        }

        $(document).ready(function() {
            $(document).on('click', '#iagree', function() {
                if( $(this).is(':checked') ){
                    $('#agree-container').removeClass('d-none');
                    return;
                };
                $('#agree-container').addClass('d-none');
            })
        })
    </script>
</body>

</html>