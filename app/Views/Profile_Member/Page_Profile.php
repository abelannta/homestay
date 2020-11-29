<?php $this->extend('layout/Profile_Template'); ?>
<?php $this->section('content'); ?>
<div class="bgs">
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../assetsprofile/adminpage/images/logo.jpg);"></a>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Homestay</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="../Form_KamarSHT/Page_Kamar.php">Soekarno Hatta Indah Kost & Homestay</a>
              </li>
              <li>
                <a href="#">Guest House Candi Panggung</a>
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
                <a class="nav-link" href="<?= base_url('logout'); ?>">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h3 class="page-header" style="color: azure;"><i class="fa fa-vcard-o"></i> Profil</h3>
      <img src="../img/<?= $gets['image']; ?>" class="rounded-circle" style="width: 18rem; margin-left: 20px;">
      <a class="btn btn-success dropdown-toggle" id="changeavatar" data-toggle="dropdown" role="button" aria-expanded="false" aria-controls="changeavatar" aria-haspopup="true" style="margin-left: -40px; margin-top: 150px;" role="button"><i class="fa fa-pencil-square-o"></i></a>
      <div class="dropdown-menu allow-focus" style="height: 20%;" aria-labelledby="changeavatar">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <form action="/pages/avatar/<?= $gets['id']; ?>" method="POST">
              <?= csrf_field(); ?>
              <h5 class="card-title">Ubah Avatar</h5>
              <h6 class="card-subtitle mb-2 text-muted">Pick one that suits you</h6>
              <br>
              <input type="hidden" name="emailku" value="<?= $gets['email']; ?>">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="default.png" checked>
                <label class="custom-control-label" for="customRadio1">Default</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="sackboy.jpg">
                <label class="custom-control-label" for="customRadio2">Sackboy</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="jesse.png">
                <label class="custom-control-label" for="customRadio3">Jesse</label>
              </div>
              <br>
              <input type="submit" name="change" class="btn btn-primary" value="Konfirmasi" style="width: 70%; ">
            </form>
            <script>
              $('.dropdown-menu').click(function(e) {
                e.stopPropagation();
              });
            </script>
          </div>
        </div>
      </div>
      <div class="card" style="float: right; width: 70%; position: relative; top: 10px; left: 20px;">
        <div class="card-body">
          <div class="panel-body bio-graph-info">
            <h1>Profil Anda</h1>
            <hr style="border-color:  rgb(175, 168, 168);">
            <div class="row">

              <!-- NAMA -->
              <div class="bio-row">
                <p><span>Nama </span>: <?= $gets['username']; ?></p>
              </div>

              <!-- STATUS -->
              <div class="bio-row">
                <p><span>Status </span>: Member</p>
              </div>

              <!-- EMAIL -->
              <div class="bio-row" style="width: 400px;">
                <p><span>Email </span>: <?= $gets['email']; ?></p>
              </div>

              <!-- alamat -->
              <div class="bio-row">
                <p><span>Alamat </span>: <?= $gets['alamat']; ?></p>
              </div>
              <!--No Telp-->
              <div class="bio-row">
                <p><span>No.Telp </span>: <?= $gets['no_telp']; ?></p>
              </div>

            </div>
          </div>
        </div>
      </div>

      <br>
      <h5 class="page-header" style="margin-left: 80px; color: azure;"><i class="fa"></i> <?= $gets['username']; ?></h5>
      <hr style="width: 20%; text-align:left;margin-left:20px; color:rgb(187, 187, 187)">
      <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#editdata" role="button" aria-expanded="false" aria-controls="collapseExample1" style="margin-left: 50px; float: left;">
          Ubah Data
        </a>
        <br>
        <br>
      </p>
      <div class="collapse" id="editdata">
        <div class="card card-body">
          <header class="panel-heading tab-bg-info">
            <ul class="nav nav-tabs">
              <li class="active">
                <a data-toggle="tab" href="#edit-it">
                  <i class="icon-envelope"></i>
                  Edit Profile
                </a>
              </li>
            </ul>
            <div id="edit-it" class="tab-pane">
              <section class="panel">
                <div class="panel-body bio-graph-info">
                  <h1> Edit data / Lengkapi data anda</h1>
                  <form class="form-horizontal" role="form" action="/pages/edit/<?= $gets['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <!-- NAMA -->
                    <input type="hidden" name="emailku" value="<?= $gets['email']; ?>">
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Nama</label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" name="namaku" placeholder=" " style="width: 50%;" value="<?= $gets['username']; ?>">
                      </div>
                    </div>

                    <!-- NO_HP -->
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Nomor Hp</label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" name="no_telpku" placeholder=" " style="width: 50%;" value="<?= $gets['no_telp']; ?>">
                      </div>
                    </div>
                    <!--Alamat-->
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Alamat</label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" name="alamatku" placeholder=" " style="width: 50%;" value="<?= $gets['alamat']; ?>">
                      </div>
                    </div>

                    <!-- TOMBOL -->
                    <div class="form-group">
                      <label class="col-lg-2 control-label"></label>
                      <div class="col-lg-4">
                        <input type="submit" name="change" class="btn btn-success" value="Konfirmasi" style="width: 40%; ">
                      </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php $this->endSection(); ?>