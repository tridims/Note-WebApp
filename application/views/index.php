<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Noted - Best Web Based Note App</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Noted - Best Web Based Note App">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/volt">
<meta property="og:title" content="Noted - Best Web Based Note App">
<meta property="og:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/volt">
<meta property="twitter:title" content="Noted - Best Web Based Note App">
<meta property="twitter:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="<?=base_url();?>assets/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url();?>assets/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>assets/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="<?=base_url();?>assets/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="<?=base_url();?>assets/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="<?=base_url();?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="<?=base_url();?>assets/vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="<?=base_url();?>assets/css/volt.css" rel="stylesheet">

<!-- Datepicker -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/zabuto_calendar.css">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

        <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="../../index.html">
        <img class="navbar-brand-dark" src="<?=base_url();?>assets/assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="<?=base_url();?>assets/assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

        <div class="container-fluid bg-soft">
            <div class="row">
                <div class="col-12">

                    <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="user-avatar lg-avatar mr-4">
            <img src="<?=base_url();?>assets/assets/img/team/profile-picture.png" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
          </div>
          <div class="d-block">
            <h2 class="h6">Hi, Jane</h2>
            <a href="<?=base_url();?>assets/pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
            <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                aria-label="Toggle navigation"></a>
        </div>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item active">
                                <a href="<?php echo base_url('Note/Catatan'); ?>" class="nav-link">
                                    <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                                    <span>Note List</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url();?>Note/Profile" class="nav-link">
                                    <span class="sidebar-icon"><span class="fas fa-user"></span></span>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <!--Garis separator-->
                            <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>

                            <!--tombol overview-->
                            <li class="nav-item">
                                <a href="<?php echo base_url('/Note/index'); ?>" class="nav-link d-flex align-items-center">
                                    <span class="sidebar-icon">
                                        <img src="<?=base_url();?>assets/assets/img/brand/note.svg" height="20" width="20"
                                            alt="Volt Logo" />
                                    </span>
                                    <span class="mt-1">About Noted</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="https://github.com/tridims/Front-End-Noted" target="_blank" class="nav-link d-flex align-items-center">
                                    <span class="sidebar-icon">
                                        <span class="fas fa-rocket"></span></span>
                                    <span>Source Code</span>
                                </a>
                            </li>
      </ul>
    </div>
</nav>









                
                    <main class="content">

                        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
    <div class="container-fluid px-0">
      <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
        <div class="d-flex">
          <!-- Search form -->
          <form class="navbar-search form-inline" id="navbar-search-main">
            <div class="input-group input-group-merge search-bar">
                <span class="input-group-text" id="topbar-addon"><span class="fas fa-search"></span></span>
                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
            </div>
          </form>
        </div>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center">
          <li class="nav-item dropdown">
            <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media d-flex align-items-center">
                <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="<?=base_url();?>assets/assets/img/team/profile-picture.png">
                <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                  <span class="mb-0 font-small font-weight-bold"><?php echo $this->session->userdata('username'); ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
              <a class="dropdown-item font-weight-bold" href="<?php echo base_url('/Note/profile'); ?>"><span class="far fa-user-circle"></span>My Profile</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-bold" href="<?php echo base_url('/Note/signout'); ?>"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
</nav>

                        <div class="row">
                            <?php
          		                $this->load->view($content_view);
                            ?>
                        </div>
                    </main>
                </div>
            </div>
        </div>

    <!-- Core -->
<script src="<?=base_url();?>assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="<?=base_url();?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="<?=base_url();?>assets/vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="<?=base_url();?>assets/vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Jarallax -->
<script src="<?=base_url();?>assets/vendor/jarallax/dist/jarallax.min.js"></script>

<!-- Smooth scroll -->
<script src="<?=base_url();?>assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Count up -->
<script src="<?=base_url();?>assets/vendor/countup.js/dist/countUp.umd.js"></script>

<!-- Notyf -->
<script src="<?=base_url();?>assets/vendor/notyf/notyf.min.js"></script>

<!-- Charts -->
<script src="<?=base_url();?>assets/vendor/chartist/dist/chartist.min.js"></script>
<script src="<?=base_url();?>assets/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="<?=base_url();?>assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Simplebar -->
<script src="<?=base_url();?>assets/vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="<?=base_url();?>assets/assets/js/volt.js"></script>

<!-- Kalender -->
 <script src="<?=base_url();?>assets/lib/zabuto_calendar.js"></script>

<script type="application/javascript">
    $(document).ready(function() {

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });
  </script>

</body>

</html>
