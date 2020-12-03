<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/suhat/style.css">
    <script src="/js/jquery.min.js"></script>

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
                        <a href="/bookingku">Bookingku</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#formContact" href="#">Contact Us</a>
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
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/profile/<?= user()->id; ?>">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('logout'); ?>">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Modal Contact Us -->
            <div class="modal fade" id="formContact" tabindex="-1" aria-labelledby="ContactUs" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="/kontak/tambah" method="post">
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama" autofocus value="<?= user()->username; ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" autofocus value="<?= user()->email; ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="no_telp">No. Telepon</label>
                                                <input type="number" class="form-control" id="no_telp" name="no_telp" value="<?= user()->no_telp; ?>" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" form-group">
                                        <label for="exampleFormControlTextarea1">Pesan</label>
                                        <textarea class="form-control" id="pesan" name="pesan" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


            <?= $this->renderSection('content'); ?>

            <script src="/js/jquery.min.js"></script>
            <script src="/js/popper.js"></script>
            <script src="/js/bootstrap.min.js"></script>
            <script src="/js/main.js"></script>
            <script src="/js/bootstrap.js"></script>

            <script>
                function previewImg() {
                    const sampul = document.querySelector('#gambar');
                    const sampulLabel = document.querySelector('.custom-file-label');
                    const imgPreview = document.querySelector('.img-preview');

                    sampulLabel.textContent = sampul.files[0].name;

                    const fileSampul = new fileReader();
                    fileSampul.readAsDataURL(sampul.files[0]);

                    fileSampul.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                }
            </script>
            <script>
                function previewImg1() {
                    const sampul = document.querySelector('#bukti');
                    const sampulLabel = document.querySelector('.custom-file-label');
                    const imgPreview = document.querySelector('.img-preview');

                    sampulLabel.textContent = sampul.files[0].name;

                    const fileSampul = new fileReader();
                    fileSampul.readAsDataURL(sampul.files[0]);

                    fileSampul.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                }
            </script>
            <?= $this->renderSection('footer'); ?>
</body>

</html>