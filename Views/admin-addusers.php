<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="../resources/css/font-face.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../resources/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../resources/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../resources/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="admin-index.html">
                            <img src="../resources/img/logo.png" alt="logo" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                        <a href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="#">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-book"></i>Reservations</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-o"></i>Menu</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-bullhorn"></i>Post Announcement</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-comment"></i>Feedback</a>
                        </li>
                        <li>
                            <a href="home.html">
                                <i class="fas fa-reply"></i>Back to Homepage</a>
                        </li>  
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="admin-index.html">
                    <img src="../resources/img/logo.png" alt="logo" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                        <a href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="#">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-book"></i>Reservations</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-o"></i>Menu</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-bullhorn"></i>Post Announcement</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-comment"></i>Feedback</a>
                        </li>
                        <li>
                            <a href="home.html">
                                <i class="fas fa-reply"></i>Back to Homepage</a>
                        </li>                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <!-- <div class="image">
                                            <img src="../resources/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div> -->
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <!-- <div class="image">
                                                    <a href="#">
                                                        <img src="../resources/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div> -->
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">admin</a>
                                                    </h5>
                                                    <span class="email">tranvandan1@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="home.html">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Create New User</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="Enter Name" class="form-control">
                                                    <small class="help-block form-text">Please enter your name</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                                                    <small class="help-block form-text">Please enter your email</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="role" class=" form-control-label">Role</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="role" id="selectLg" class="form-control-md form-control">
                                                        <option value="">Please select</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                    <small class="help-block form-text">Please select role</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control">
                                                    <small class="help-block form-text">Please enter a complex password</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Confirm Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="password-input" placeholder="Confirm Password" class="form-control">
                                                    <small class="help-block form-text">Please re-enter the password</small>
                                                </div>
                                            </div>
                                                                                                         
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check-square"></i> Submit
                                        </button>
                                        <!-- <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button> -->
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS -->
    <script src="../resources/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../resources/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../resources/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS  -->
    <script src="../resources/vendor/slick/slick.min.js">
    </script>
    <script src="../resources/vendor/wow/wow.min.js"></script>
    <script src="../resources/vendor/animsition/animsition.min.js"></script>
    <script src="../resources/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../resources/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../resources/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../resources/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../resources/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../resources/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../resources/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../resources/js/main.js"></script>

</body>

</html>
<!-- end document-->