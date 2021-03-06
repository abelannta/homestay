<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        #table>tbody>tr>td {
            vertical-align: middle;
        }
    </style>
</head>

<body>


    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(/img/logo.jpg);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Homestay Suhat</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="/admin/suhat">Pembayaran</a>
                            </li>
                            <li>
                                <a href="/admin/riwayat">Riwayat Pembayaran</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Homestay Candi</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="/admin/candi">Pembayaran</a>
                            </li>
                            <li>
                                <a href="/admin/riwayatCND">Riwayat Pembayaran</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/contact">Keluhan</a>
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
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/admin">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('logout'); ?>">Log Out</a>
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