<style>
    #register img {
        margin-left: 283px
    }

    @media screen and (max-width:767px) {
        #register img {
            margin-left: 100px
        }
    }
</style>
</head>
<section id="registerThera">
    <div class="modal fade" id="TheraReg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle" style="color:rgb(34, 19, 48)">Therapist Register Form</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="regthera-form" method="post" enctype="multipart/form-data" class="should-validation" novalidate>
                        <div class="inverse">
                            <img class="camera-icon" src="images/camera-solid.svg" alt="camera">
                            <img src="images/profile/beard.png" style="width: 200px; height: 200px;margin-bottom:10px;opacity: 20%;" class="img rounded-circle" alt="profile" id="image">
                            <small class="form-text text-black-50" style="text-align:center;padding-right:10px;">Your Selfie Avatar</small>
                            <input type="file" class="form-control-file" name="profileUpload" id="upload-profile" form="regthera-form" required>
                        </div>

                        <div class="col" align="center">
                            <h3>Personal Details</h3>
                            <hr>
                        </div>

                        <div class="row" style="margin-top:30px;">
                            <div class="col">
                                <h4 style="color:rgb(34, 19, 48);margin-left: 18px;">First Name</h4>
                                <input type="text" required name="firstname" id="firstname" class="form-control" placeholder="first name" style="max-width: 250px;margin-left: 15px;">
                                <div class="valid-feedback" style="margin-left: 15px;">Valid.</div>
                                <div class="invalid-feedback" style="margin-left: 15px;">Please fill out this field.</div>
                            </div>

                            <div class="col">
                                <h4 style="color:rgb(34, 19, 48)">Last Name</h4>
                                <input type="text" required name="lastName" id="lastName" class="form-control" placeholder="last name" style="max-width: 250px;">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">Salutation</h4>
                            <select id="salutation" name="salutation" class="form-control">
                                <option value=""></option>
                                <option value="Ms">Ms</option>
                                <option value="Mr">Mr</option>
                                <option value="Dr">Dr</option>
                                <option value="Assoc Prof">Assoc Prof</option>
                                <option value="Prof">Prof</option>
                                <option value="Assoc Prof Dr">Assoc Prof Dr</option>
                                <option value="Prof Dr">Prof Dr</option>
                            </select>
                        </div>

                        <div class="col" style="margin-bottom:10px;">
                            <h4 style="color:rgb(34, 19, 48)">Gender</h4>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="male" name="gender" class="custom-control-input" value="Male" required>
                                <label class="custom-control-label" for="male">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="female" name="gender" class="custom-control-input" value="Female" required>
                                <label class="custom-control-label" for="female">Female</label>
                            </div>
                            <span id="gender_warning">*This field cannot be change after you register!</span>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">Age</h4>
                            <select id="age" name="age" class="form-control">
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                            </select>
                            <span id="age_warning">*This field cannot be change after you register!</span>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">Phone</h4>
                            <input type="tel" required name="phone" id="phone" class="form-control" placeholder="010-1234567" pattern="[0-9]{3}-[0-9]{7}">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">IC</h4>
                            <input type="tel" required name="ic" id="ic" class="form-control" placeholder="000123-01-1234" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">Address</h4>
                            <input type="text" required name="address" id="address" class="form-control" placeholder="address">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>


                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">City</h4>
                            <input type="text" required name="city" id="city" class="form-control" placeholder="city">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">Post Code</h4>
                            <input type="text" required name="postCode" id="postCode" class="form-control" placeholder="post code">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">State</h4>
                            <input type="text" required name="state" id="state" class="form-control" placeholder="state">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">Email</h4>
                            <input type="email" required name="email" id="email" class="form-control" placeholder="email">
                            <span id="email_warning">*Email cannot be change after you register!</span>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">Password</h4>
                            <input type="password" required name="password" id="password" class="form-control" placeholder="password">
                            <span id="password_length">Password length must over 6 digits</span>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">Confirm Password</h4>
                            <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="confirm password">
                            <span id="password_same">Password are not same!</span>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="col" align="center" style="margin-top:10px;">
                            <h3>Profile Details</h3>
                            <hr>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">Education level</h4>
                            <select id="education" name="education" class="form-control">
                                <option value=""></option>
                                <option value="M. Clin. Psych.">M. Clin. Psych.</option>
                                <option value="M.A. Coun. Psych.">M.A. Coun. Psych.</option>
                                <option value="M.A. Counseling">M.A. Counseling</option>
                                <option value="PhD">PhD</option>
                                <option value="PsyD">PsyD</option>
                            </select>
                        </div>

                        <div class="col" style="margin-bottom:10px;">
                            <h4 style="color:rgb(34, 19, 48)">Language(one or more)<span class="redstar">*</span></h4>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="Malay" name="Malay" class="custom-control-input" value="Malay">
                                <label class="custom-control-label" for="Malay">Malay</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="English" name="English" class="custom-control-input" value="English">
                                <label class="custom-control-label" for="English">English</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="Mandarin" name="Mandarin" class="custom-control-input" value="Mandarin">
                                <label class="custom-control-label" for="Mandarin">Mandarin</label>
                            </div>
                        </div>

                        <div class="col" style="margin-bottom:10px;">
                            <h4 style="color:rgb(34, 19, 48)">Specialties(one or more)<span class="redstar">*</span></h4>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="anxiety" name="specialties[]" class="custom-control-input" value="Anxiety">
                                <label class="custom-control-label" for="anxiety">Anxiety</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="stress" name="specialties[]" class="custom-control-input" value="Stress">
                                <label class="custom-control-label" for="stress">Stress</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="self-Esteem" name="specialties[]" class="custom-control-input" value="Self-Esteem">
                                <label class="custom-control-label" for="self-Esteem">Self-Esteem</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="depression" name="specialties[]" class="custom-control-input" value="Depression">
                                <label class="custom-control-label" for="depression">Depression</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="grief" name="specialties[]" class="custom-control-input" value="Grief">
                                <label class="custom-control-label" for="grief">Grief</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="bipolar-disorder" name="specialties[]" class="custom-control-input" value="Bipolar disorder">
                                <label class="custom-control-label" for="bipolar-disorder">Bipolar disorder</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="anger" name="specialties[]" class="custom-control-input" value="Anger">
                                <label class="custom-control-label" for="anger">Anger</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="other" name="specialties[]" class="custom-control-input" value="Others">
                                <label class="custom-control-label" for="other">Panic disorder</label>
                            </div>

                            <span id="spec_warning">Please checked at least one</span>
                        </div>

                        <div class="col">
                            <h4 style="color:rgb(34, 19, 48)">Resume (<span style="color:red;font-size:15px;"> *Only allow .doc, .docx and .pdf file</span>)</h4>
                            <input type="file" required name="certificate" id="certificate" class="form-control-file">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="col" style="margin-top:20px;">
                            <input type="checkbox" style="margin-left:10px;margin-top:7px;" name="agreement" style="padding-left:30px;" class="form-check-input" required>
                            <label for="agreement" style="padding-left: 40px;padding-bottom:5px;" class="form-check-label font-ubuntu text-black-50">I agree <a href="#">term, conditions, and policy </a>(*) </label>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <input type="submit" class="form-control" name="submit" form="regthera-form" value="Register" id="submit">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top: 20px;">Close</button>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var specialties = document.getElementsByName('specialties[]');
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('should-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() == false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        if (($('#password').val() != '') && ($('#password').val().length <= 6)) {
                            $('#password_length').css({
                                display: "block"
                            });
                            event.preventDefault();
                        } else {
                            $('#password_length').css({
                                display: "none"
                            });
                        }

                        if ($('#password').val() != $('#confirm_pwd').val()) {
                            $('#password_same').css({
                                display: "block"
                            });
                            event.preventDefault();
                        } else {
                            $('#password_same').css({
                                display: "none"
                            });
                        }

                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        $(document).ready(function(e) {

            let $uploadfile = $('#registerThera .modal .modal-dialog .modal-content .modal-body #upload-profile');

            $uploadfile.change(function() {
                readURL(this);
            });


            $('#email').keyup(function() {
                $('#email_warning').css({
                    display: "block"
                });
            });

            $('#male').change(function() {
                $('#gender_warning').css({
                    display: "block"
                });
            });

            $('#female').change(function() {
                $('#gender_warning').css({
                    display: "block"
                });
            });

            $('#age').change(function() {
                $('#age_warning').css({
                    display: "block"
                });
            });
        });

        //change the image
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $("#registerThera .modal .modal-dialog .modal-content .modal-body .img").attr('src', e.target.result);
                    $("#registerThera .modal .modal-dialog .modal-content .modal-body .img").css({
                        opacity: "100%"
                    });
                    $("#registerThera .modal .modal-dialog .modal-content .modal-body .camera-icon").css({
                        display: "none"
                    });
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <section>
