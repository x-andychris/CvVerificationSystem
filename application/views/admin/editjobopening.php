<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Loading the Header Section -->
    <?php $this->load->view('inc/layout/adminheader');?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <?php $this->load->view('inc/layout/adminsidebar');?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <?php $this->load->view('inc/layout/admintopbar');?>
            </header>
            <!-- Start Hidden Side Bar -->
            <?php $this->load->view('inc/layout/adminhiddensidebar');?>
            <!-- End Hidden Side Bar -->
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">New Job Opening</div>
                                    <div class="card-body">
                                        <form action="<?php echo base_url(); ?>admin/edit_jobopening" method="post">
                                            <div class="form-group">
                                                <!-- temporarily hold the entry id for use in update -->
                                                <input type="text" hidden name="entryid"
                                                    value="<?php echo $jobinfo -> EntryId;?>" />
                                                <label for="position" class="control-label mb-1"><b>Position</b></label>
                                                <input id="position" name="position" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Enter the job position"
                                                    value="<?php echo $jobinfo -> Position;?>" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="requiredcourse" class="control-label mb-1"><b>Required
                                                        Course(s)</b></label>
                                                <input id="requiredcourse" name="requiredcourse" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false"
                                                    placeholder="Enter the Required Course"
                                                    value="<?php echo $jobinfo -> RequiredCourse;?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="requiredgrade" class="control-label mb-1"><b>Required
                                                        Grade(s)</b></label>
                                                <input id="requiredgrade" name="requiredgrade" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false"
                                                    placeholder="Enter the Required Grade"
                                                    value="<?php echo $jobinfo -> RequiredGrade;?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="requiredjobtitle" class="control-label mb-1"><b>Required Job
                                                        Title(s)</b></label>
                                                <input id="requiredjobtitle" name="requiredjobtitle" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false"
                                                    placeholder="Enter the Required Job Title"
                                                    value="<?php echo $jobinfo -> RequiredJobTitle;?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="requiredjobduration" class="control-label mb-1"><b>Required
                                                        Job
                                                        Duration(s)</b></label>
                                                <input id="requiredjobduration" name="requiredjobduration" type="text"
                                                    class="form-control" aria-required="true" aria-invalid="false"
                                                    placeholder="Enter the Required Job Duration"
                                                    value="<?php echo $jobinfo -> RequiredJobDuration;?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="requiredemploymentstatus"
                                                    class="control-label mb-1"><b>Required Employment
                                                        Status(s)</b></label>
                                                <input id="requiredemploymentstatus" name="requiredemploymentstatus"
                                                    type="text" class="form-control" aria-required="true"
                                                    aria-invalid="false"
                                                    placeholder="Enter the Required Employment Status"
                                                    value="<?php echo $jobinfo -> RequiredEmploymentStatus;?>" />
                                            </div>
                                            <div>
                                                <button id="add" type="submit" name="upload"
                                                    class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-plus fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update Job Opening</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>
                                        Copyright © 2017 Indomitables.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <!-- Loading the scripts -->
    <?php $this->load->view('inc/layout/adminbottomscripts');?>
</body>

</html>
<!-- end document-->