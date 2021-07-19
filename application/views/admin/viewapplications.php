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
                                <h3 class="title-5 m-b-35">All Applicants Data</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property" id="positionselect"
                                                onchange="handleselectchange()">
                                                <option selected="selected" value="">All Positions</option>
                                                <!-- Getting the positions from the database -->
                                                <?php foreach($jobopenings -> result() as $row) :?>
                                                <option value="<?php echo $row -> EntryId;?>">
                                                    <?php echo $row -> Position;?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <script>
                                        var base_url = <?php echo json_encode(base_url()); ?>;

                                        function handleselectchange() {
                                            var text = document.getElementById("positionselect").value;
                                            location.replace("" + base_url + "admin/applications/" + text);
                                        }
                                        </script>

                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-search"></i>
                                            <input id="searchInput" type="text" placeholder="Search..">
                                        </button>
                                    </div>
                                    <div class="table-data__tool-right">
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
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>Intended Position</th>
                                                <th>institution</th>
                                                <th>course</th>
                                                <th>degree</th>
                                                <th>Previous Organization</th>
                                                <th>Previous Position</th>
                                                <th>Employment Duration</th>
                                                <th>Employment Status</th>
                                                <th>Resume</th>
                                                <th>dateapplied</th>
                                                <th></th>
                                                <th>View</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody id="applicantsTable">
                                            <?php foreach($applications -> result() as $row) :?>
                                            <tr class="tr-shadow" style="margin-bottom:5px">
                                                <td><?php echo $row -> ApplicantId;?></td>
                                                <td><?php echo $row -> fullname;?></td>
                                                <td><?php echo $row -> email;?></td>
                                                <td><?php echo $row -> phone;?></td>
                                                <td><?php echo $row -> country;?></td>
                                                <td><?php echo $row -> intendedposition;?></td>
                                                <td><?php echo $row -> institution;?></td>
                                                <td><?php echo $row -> course;?></td>
                                                <td><?php echo $row -> degree;?></td>
                                                <td><?php echo $row -> previousorganization;?></td>
                                                <td><?php echo $row -> previousposition;?></td>
                                                <td><?php echo $row -> workduration;?></td>
                                                <td><?php echo $row -> employmentstatus;?></td>
                                                <!-- For Resume -->
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo base_url(); ?>assets/documents/<?php echo $row -> resume;?>"
                                                            target="_blank">
                                                            Resume
                                                        </a>
                                                    </div>
                                                </td>
                                                <td><?php echo $row -> dateapplied;?></td>
                                                <td></td>
                                                <!-- For View -->
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo base_url(); ?>admin/previewapplicant/<?php echo $row -> ApplicantId;?>"
                                                            target="_blank">
                                                            <button class="item" data-toggle="tooltip"
                                                                data-placement="top" title="View Application">
                                                                <i class="zmdi zmdi-fullscreen-alt"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </td>
                                                <!-- For Disable -->
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Delete" style="color:red"
                                                            onclick="handledelete('<?php echo $row -> ApplicantId;?>')">
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
                                        if (confirm('Are you sure you want to delete Applicant ' + id + '?')) {
                                            // deleting the applicant
                                            window.location.href = '' + baseurl + 'admin/deleteapplicant/' + id;
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