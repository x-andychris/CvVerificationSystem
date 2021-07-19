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

            <!-- Main Content starts here-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">View Job openings</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Applicants</option>
                                                <option value="">Active</option>
                                                <option value="">Disabled</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>

                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-search"></i>
                                            <input id="searchInput" type="text" placeholder="Search..">
                                        </button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small"
                                            onclick="location.href='<?php echo base_url(); ?>admin/addjobopening'">
                                            <i class="zmdi zmdi-plus"></i>Add job Opening</button>
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small"
                                            onclick="window.print()" value="Print">
                                            <i class="zmdi zmdi-print"></i>Print</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2" style="overflow:scroll">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Position</th>
                                                <th>Required Course</th>
                                                <th>Required Grade</th>
                                                <th>Required JobTitle</th>
                                                <th>Required JobDuration</th>
                                                <th>Required EmploymentStatus</th>
                                                <th>Job Status</th>
                                                <th>Date Posted</th>
                                                <th></th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody id="applicantsTable">
                                            <?php foreach($jobopenings -> result() as $row) :?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $row -> EntryId;?></td>
                                                <td><?php echo $row -> Position;?></td>
                                                <td><?php echo $row -> RequiredCourse;?></td>
                                                <td><?php echo $row -> RequiredGrade;?></td>
                                                <td><?php echo $row -> RequiredJobTitle;?></td>
                                                <td><?php echo $row -> RequiredJobDuration;?></td>
                                                <td><?php echo $row -> RequiredEmploymentStatus;?></td>
                                                <td><?php echo $row -> JobStatus;?></td>
                                                <td><?php echo $row -> DateAdded;?></td>
                                                <!-- For Applicants -->
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo base_url(); ?>admin/applications/<?php echo $row -> EntryId;?>"
                                                            target="_blank">
                                                            View Applicants
                                                        </a>
                                                    </div>
                                                </td>
                                                <!-- For Edit -->
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a
                                                            href="<?php echo base_url(); ?>admin/editjobopening/<?php echo $row -> EntryId;?>">
                                                            <button class="item" data-toggle="tooltip"
                                                                data-placement="top" title="Edit Job Opening">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </td>
                                                <!-- For Delete -->
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Delete" style="color:red"
                                                            onclick="handledelete('<?php echo $row -> EntryId;?>')">
                                                            <i class="zmdi zmdi-delete" style="color:red"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <!-- Script for delete -->
                                    <script>
                                    var baseurl = <?php echo json_encode(base_url()); ?>;

                                    function handledelete(id) {
                                        if (confirm('Are you sure you want to delete Job Listing ' + id + '?')) {
                                            // deleting the applicant
                                            window.location.href = '' + baseurl + 'admin/deletejobopening/' + id;
                                        } else {
                                            // Do nothing!
                                        }
                                    }
                                    </script>
                                    <!-- Script for search -->
                                    <script>
                                    $(document).ready(function() {
                                        $("#searchInput").on("keyup", function() {
                                            var value = $(this).val().toLowerCase();
                                            $("#applicantsTable tr").filter(function() {
                                                $(this).toggle($(this).text().toLowerCase()
                                                    .indexOf(value) > -1)
                                            });
                                        });
                                    });
                                    </script>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    Copyright © 2017 Indomitables.
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