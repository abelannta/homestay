<?= $this->extend('layout/templateuser'); ?>

<?= $this->section('content'); ?>
<h1>
    <center>Soekarno Hatta Indah Kost & Homestay</center>
</h1>

<!-- Caraosel Type 1 -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/suhat/kamar/img_1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/suhat/kamar/img_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/suhat/kamar/img_4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>
<center>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#formBayar">
        Booking Kamar
    </button>
</center>

<!-- Modal -->
<div class="modal fade" id="formBayar" tabindex="-1" aria-labelledby="judulBayar" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulBayar">Booking Kamar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/suhat/tambah" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama Customer</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Customer</label>
                        <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('alamat'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No. Telp Customer</label>
                        <input type="number" class="form-control <?= ($validation->hasError('no_telp')) ? 'is-invalid' : ''; ?>" id="no_telp" name="no_telp" value="<?= old('no_telp'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('no_telp'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="check_in">Check-In</label>
                        <input type="date" class="form-control" id="check_in" name="check_in" value="<?= old('check_in'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="check-out">Check-Out</label>
                        <input type="date" class="form-control" id="check-out" name="check_out" value="<?= old('check_out'); ?>">
                    </div>
                    <label for="no_kamar">Nomor Kamar</label><br>
                    <center>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="no_kamar" id="kamar1" value="SHT01" value="<?= old('no_kamar'); ?>">
                            <label class="form-check-label" for="kamar1">SHT01</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="no_kamar" id="kamar2" value="SHT02">
                            <label class="form-check-label" for="kamar2">SHT02</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="no_kamar" id="kamar3" value="SHT03">
                            <label class="form-check-label" for="kamar3">SHT03</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="no_kamar" id="kamar4" value="SHT04">
                            <label class="form-check-label" for="kamar4">SHT04</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="no_kamar" id="kamar5" value="SHT05">
                            <label class="form-check-label" for="kamar5">SHT015</label>
                        </div>
                    </center>
                    <div class="form-group">
                        <label for="pembayaran"><br>Pembayaran</label>
                        <select class="form-control" id="pembayaran" name="pembayaran" value="<?= old('pembayaran'); ?>">
                            <option value="BCA">BCA</option>
                            <option value="Mandiri">Mandiri</option>
                            <option value="OVO">OVO</option>
                            <option value="Cash">Cash</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kupon">Kupon</label>
                        <input type="text" class="form-control" id="kupon" name="kupon" value="<?= old('kupon'); ?>">
                    </div>
                    <label for="status">Status Pembayaran</label><br>
                    <center>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status" value="Dibayar">
                            <label class="form-check-label" for="status">Dibayar</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status2" value="Belum dibayar">
                            <label class="form-check-label" for="status2">Belum Dibayar</label>
                        </div>
                    </center>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>