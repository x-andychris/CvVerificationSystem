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
    <title>Indomitables Job Application Form</title>
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
    <h1 class="header-w3ls">Job Application Form</h1>
    <div class="content-w3ls">
        <div class="form-w3ls">
            <form action="<?php echo base_url(); ?>home/add_application" method="post" enctype="multipart/form-data">
                <div class="content-wthree1">
                    <!-- Personal information section -->
                    <div class="grid-agileits1">
                        <div class="form-control">
                            <label class="header" for="name">Full Name <span>*</span></label>
                            <input type="text" id="name" name="name" placeholder="Name"
                                title="Please enter your Full Name" required="">
                        </div>
                        <div class="form-control">
                            <label class="header" for="email">Email <span>*</span></label>
                            <input type="email" id="email" name="email" placeholder="mail@example.com"
                                title="Please enter a Valid Email Address" required="">
                        </div>
                        <div class="form-control">
                            <label class="header" for="phone">Phone <span>*</span></label>
                            <input type="text" id="phone" name="phone" placeholder="Phone"
                                title="Please enter your Phone No" required="">
                        </div>
                    </div>
                    <hr />
                    <!-- Job Selection section -->
                    <div class="form-control">
                        <div class="main-row">
                            <label class="header" for="country">Country <span>*</span></label>
                            <select id="country" name="country">
                                <option value="none" selected="" disabled="">Select country</option>

                                <option value="Philippines">Nigeria</option>
                                <option value="Portugal">Kenya</option>
                                <option value="South Africa">Ghana</option>
                            </select>
                            <i></i>

                        </div>
                    </div>
                    <div class="form-control">
                        <div class="main-row">
                            <label class="header" for="jobposition">What position are you applying for?
                                <span>*</span></label>
                            <select name="jobposition">
                                <!-- Getting the positions from the database -->
                                <?php foreach($jobopenings -> result() as $row) :?>
                                <option value="<?php echo $row -> EntryId;?>"><?php echo $row -> Position;?></option>
                                <?php endforeach; ?>
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
                                title="Please enter your institution's name" required="">
                        </div>
                        <div class="form-control">
                            <label class="header" for="course">Course <span>*</span></label>
                            <input type="text" id="course" name="course" placeholder="Name"
                                title="Please enter your Full Name" required="">
                        </div>
                        <div class="form-control">
                            <label class="header" for="degreeobtained">Degree Obtained</label>
                            <select id="degreeobtained" name="degreeobtained" style="width:100%">
                                <option value="none" selected="" disabled="">Select Degree Class</option>
                                <option value="First Class Upper">First Class Upper</option>
                                <option value="Second Class Upper">Second Class Upper</option>
                                <option value="Second Class Lower">Second Class Lower</option>
                                <option value="Third Class">Third Class</option>
                                <option value="Other">Other</option>
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
                                title="Please enter your institution's name" required="">
                        </div>
                        <div class="form-control">
                            <label class="header" for="jobtitle">Job title held <span>*</span></label>
                            <input type="text" id="jobtitle" name="jobtitle" placeholder="Name"
                                title="Please enter your Full Name" required="">
                        </div>
                        <div class="form-control">
                            <label class="header" for="workduration">Work Duration <span>*</span></label>
                            <select id="workduration" name="workduration" style="width:100%">
                                <option value="1 - 6 Months">1 - 6 Months</option>
                                <option value="6 months - 1 Year">6 months - 1 Year</option>
                                <option value="1 - 3 Years">1 - 3 Years</option>
                                <option value="5 - 7 Years">5 - 7 Years</option>
                                <option value="8 Years and above">8 Years and above</option>
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
                                <label class="header" for="employmentstatus">What is your current employment
                                    status?<span>*</span></label>

                                <select id="employmentstatus" name="employmentstatus" style="width:100%">
                                    <option value="Unemployed">Unemployed</option>
                                    <option value="Employed">Employed</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="clear"></div>
                </div>

                <!-- Upload resume -->
                <div class="w3ls-btn" style="background:transparent">
                    <div class="contact-forms" style="background:transparent;padding:20px">
                        <label class="rating">Upload your resume</label>
                        <input type="file" name="file" style="padding-top:15px">
                    </div>
                </div>

                <!-- Submit button -->
                <div class="w3ls-btn">
                    <div class="contact-forms">
                        <button type="submit" name="submit" value="Send"
                            style="background-color: gold; width:40%; height:35px; margin-left:30%; color:white;">Submit
                            Application</button>
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