<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!doctype html>
<html lang="en">

<head>
    <title>Admin| Preview Applicant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Classy Job Application Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- font files -->
    <link
        href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- /font files -->
    <!-- css files -->
    <link href="<?php echo base_url(); ?>/assets/home/css/style.css" rel='stylesheet' type='text/css' media="all" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/home/css/j-forms.css">

    <!-- /css files -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/home/js/jquery-2.1.4.min.js"></script>

</head>

<body>
    <h1 class="header-w3ls">Applicant Information</h1>
    <div class="content-w3ls">
        <div class="form-w3ls">
            <form action="" method="post">
                <div class="content-wthree1">
                    <!-- Personal information section -->
                    <div class="grid-agileits1">
                        <div class="form-control">
                            <label class="header" for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Name"
                                title="Please enter your Full Name" required="" readonly
                                value="<?php echo $applicantinfo -> fullname;?>">
                        </div>
                        <div class="form-control">
                            <label class="header" for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="mail@example.com"
                                title="Please enter a Valid Email Address" required="" readonly
                                value="<?php echo $applicantinfo -> email;?>">
                        </div>
                        <div class="form-control">
                            <label class="header" for="phone">Phone <span>*</span></label>
                            <input type="text" id="phone" name="phone" placeholder="Phone"
                                title="Please enter your Phone No" required="" readonly
                                value="<?php echo $applicantinfo -> phone;?>">
                        </div>
                    </div>
                    <hr />
                    <!-- Job Selection section -->
                    <div class="form-control">
                        <div class="main-row">
                            <label class="header" for="country">Country <span>*</span></label>
                            <select id="country" name="country" style="width:100%" disabled>
                                <option value=""><?php echo $applicantinfo -> country;?></option>
                            </select>
                            <i></i>

                        </div>
                    </div>
                    <div class="form-control">
                        <div class="main-row">
                            <label class="header" for="jobposition">Intended position
                                <span>*</span></label>
                            <select name="jobposition" style="width:100%" disabled>
                                <option value=""><?php echo $applicantinfo -> intendedposition;?></option>
                            </select>
                            <i></i>
                        </div>
                    </div>
                    <hr />
                    <!-- Qualification details (education status) -->
                    <h1 style="text-align:center; color:white; font-size:25">Relevant Educational History</h1>
                    <div class="grid-agileits1">
                        <div class="form-control">
                            <label class="header" for="institution">Institution <span>*</span></label>
                            <input type="text" id="institution" name="institution" placeholder="Middlesex University"
                                title="Please enter your institution's name" readonly
                                value="<?php echo $applicantinfo -> institution;?>">
                        </div>
                        <div class="form-control">
                            <label class="header" for="course">Course <span>*</span></label>
                            <input type="text" id="course" name="course" placeholder="Name"
                                title="Please enter your Full Name" readonly
                                value="<?php echo $applicantinfo -> course;?>">
                        </div>
                        <div class="form-control">
                            <label class="header" for="degreeobtained">Degree Obtained</label>
                            <select id="degreeobtained" name="degreeobtained" style="width:100%" disabled>
                                <option value=""><?php echo $applicantinfo -> degree;?></option>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <!-- Work Experience section (Previous experience) -->
                    <h1 style="text-align:center; color:white; font-size:25">Relevant Work Experience</h1>
                    <div class="grid-agileits1">
                        <div class="form-control">
                            <label class="header" for="organization">Organization <span>*</span></label>
                            <input type="text" id="organization" name="organization"
                                placeholder="Howard Institute of technology..."
                                title="Please enter your institution's name" readonly
                                value="<?php echo $applicantinfo -> previousorganization;?>">
                        </div>
                        <div class="form-control">
                            <label class="header" for="jobtitle">Job title held <span>*</span></label>
                            <input type="text" id="jobtitle" name="jobtitle" placeholder="Name"
                                title="Please enter your Full Name" readonly
                                value="<?php echo $applicantinfo -> previousposition;?>">
                        </div>
                        <div class="form-control">
                            <label class="header" for="workduration">Work Duration <span>*</span></label>
                            <select id="workduration" name="workduration" style="width:100%" disabled>
                                <option value=""><?php echo $applicantinfo -> workduration;?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr />
                <!-- Resume (Previous experience) -->

                <!-- Current Employment Status -->
                <div class="content-wthree2">
                    <div class="grid-w3layouts1">
                        <div class="w3-agile1">
                            <div class="form-control">
                                <label class="header" for="employmentstatus">Current Employment
                                    status</label>

                                <select id="employmentstatus" name="employmentstatus" style="width:100%" disabled>
                                    <option value=""><?php echo $applicantinfo -> employmentstatus;?></option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Upload resume -->
                <div class="w3ls-btn" style="background:transparent">
                    <div class="contact-forms" style="background:transparent;">
                        <a href="<?php echo base_url(); ?>assets/documents/<?php echo $applicantinfo -> resume;?>">
                            <input type="button" style="height: 50px; width: 150px" value="Applicant Resume" />

                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    </div>

    <p class="copyright">© 2017 Indomitables | Design by <a href="#">Student Name</a></p>


</body>

</html>