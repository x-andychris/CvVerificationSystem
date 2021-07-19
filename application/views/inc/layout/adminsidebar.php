<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="<?php echo base_url(); ?>assets/images/icon/logo-white.png" alt="Ess Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="<?php echo base_url(); ?>assets/images/icon/avatar-big-01.jpg" alt="John
                                Doe" />
            </div>
            <h4 class="name">
                Admin
                <!-- <?php echo $_SESSION['userUName'] ?> -->
            </h4>
            <a href="#" onclick="logout()">Sign out</a>
        </div>
        <script>
        function logout() {
            var baseurl = <?php echo json_encode(base_url()); ?>;
            if (confirm('Are you sure you want to log out?')) {
                // logging out
                window.location.href = '' + baseurl + 'admin/logout';
            } else {

            }
        }
        </script>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <!-- ------------------ -->
                <?php if ($page == "dashboard") { ?>
                <li class="active has-sub">
                    <?php } else { ?>
                <li> <?php } ?>
                    <a class="js-arrow" href="<?php echo base_url(); ?>admin/dashboard">
                        <i class="fas fa-home"></i>Dashboard
                    </a>
                </li>
                <!-- ------------------ -->
                <?php if ($page == "jobopenings") { ?>
                <li class="active has-sub">
                    <?php } else { ?>
                <li> <?php } ?>
                    <a href="<?php echo base_url(); ?>admin/jobopenings">
                        <i class="fas fa-plus"></i>Job Openings</a>
                </li>
                <!-- ------------------ -->
                <?php if ($page == "applications") { ?>
                <li class="active has-sub">
                    <?php } else { ?>
                <li> <?php } ?>
                    <a class="js-arrow" href="<?php echo base_url(); ?>admin/applications">
                        <i class="fas fa-table"></i>Applications
                    </a>
                </li>
                <!-- ------------------ -->
                <?php if ($page == "updateprofile") { ?>
                <li class="active has-sub">
                    <?php } else { ?>
                <li> <?php } ?>
                    <a class="js-arrow" href="<?php echo base_url(); ?>admin/updateprofile">
                        <i class="fas fa-users"></i>Update Profile
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>