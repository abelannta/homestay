<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/suhat/style.css">

    <?= $this->renderSection('header'); ?>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(/img/logo.jpg);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Homestay</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="/Suhat">Soekarno Hatta Indah Kost & Homestay</a>
                            </li>
                            <li>
                                <a href="/Candi">Guest House Candi Panggung</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#contactSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Contact</a>
                        <ul class="collapse list-unstyled" id="contactSubmenu">
                            <li>
                                <a>Admin 1: 081333362998</a>
                            </li>
                            <li>
                                <a>Admin 2: 081333210304</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Bookingku</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../Profile_Member/Page_Profile.php">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../Log_Out/Log_Out.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <?= $this->renderSection('content'); ?>

            <script src="/js/jquery.min.js"></script>
            <script src="/js/popper.js"></script>
            <script src="/js/bootstrap.min.js"></script>
            <script src="/js/main.js"></script>
            <script src="/js/bootstrap.js"></script>

            <?= $this->renderSection('footer'); ?>
</body>

</html>