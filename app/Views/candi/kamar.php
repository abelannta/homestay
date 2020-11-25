<?= $this->extend('layout/templateuser'); ?>

<?= $this->section('content'); ?>
<h1>
    <center>Guest House Candi Panggung</center>
</h1>

<!-- Caraosel Type 1 -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/candi/kamar/awal.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Guest House</h5>
                <p>Guest house murah tetapi berkelas.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/candi/kamar/depan.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Halaman Depan</h5>
                <p>Halaman depan yang terawat memmbuat nyaman untuk dilihat.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/candi/kamar/fasilitas.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Fasilitas</h5>
                <p>Fasilitas yang memuaskan hanya dengan harga yang terjangkau.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/candi/kamar/kmr2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kamar No.2</h5>
                <p>Kamar luas yang dilengkapi kasur besar yang nyaman.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/candi/kamar/kmr3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kamar No.3</h5>
                <p>Kamar single size ditujukan untuk anda yang berpergian sendiri.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/candi/kamar/kmr4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kamar No.4</h5>
                <p>Kamar luas yang dilengkapi dengan queen size bed.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/candi/kamar/kmr5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kamar No.5</h5>
                <p>Kamar minimalis dengan bed single size yang nyaman.</p>
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
<div class="container">
    <div class="row">
        <div class="col">
            <font style="font-size:medium;">
                <p>Klik teks bercetak tebal untuk info lebih detail</p>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="jumlahkamar">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Jumlah Kamar
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="jumlahkamar" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li>4/4 kamar tersedia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="fasilitas">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Fasilitas
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="fasilitas" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li>Wifi</li>
                                    <li>Kamar mandi dalam</li>
                                    <li>Dapur bersama</li>
                                    <li>Parkir mobil dan motor</li>
                                    <li>Kipas angin</li>
                                    <li>Televisi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="harga">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Harga
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="harga" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <b>Kamar No.2 :</b>
                                    <li>120,000/malam</li>
                                    <b>Kamar No.3 :</b>
                                    <li>100,000/malam</li>
                                    <b>Kamar No.4 :</b>
                                    <li>120,000/malam</li>
                                    <b>Kamar No.5 :</b>
                                    <li>90,000/malam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="sistem">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Sistem
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="sistem" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li>Check in mulai jam 1 siang</li>
                                    <li>Batas check out jam 12 siang</li>
                                    <li>Penambahan bed kecil 25 ribu, bed besar 50 ribu</li>
                                    <li>Untuk pasutri harus ada foto bukti buku nikah resmi/ sertfikat nikah resmi</li>
                                    <li>Bila kakak, adik, atau anak bapak yangg menginap wajib menunjukkan ktp
                                        atau bukti KK yang alamat domisili sama.</li>
                                    <li>Pembayaran bisa via transfer atau tunai</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </font>
        </div>
    </div>
</div>
<center>
    <button type="button" class="btn btn-info mt-3" data-toggle="modal" data-target="#formBayar">
        Booking Kamar
    </button>
</center>

<!-- Modal -->
<div class="modal fade" id="formBayar" tabindex="-1" aria-labelledby="judulBayar" aria-hidden="false">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulBayar">Tambah Data Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/tambah" method="post">
                    <?= csrf_field(); ?>
                    <div class="container" id="modal">
                        <div class="row">
                            <div class="col">

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
                                Upload KTP/KK
                                <div class="custom-file">
                                    <label for="KTP/KK">Upload KTP/KK</label>
                                    <input type="file" class="custom-file-input" id="KTP/KK" name="KTP/KK">
                                    <label class="custom-file-label" for="KTP/KK">Choose file</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="check_in">Check-In</label>
                                    <input type="date" class="form-control" id="check_in" name="check_in" value="<?= old('check_in'); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="check-out">Check-Out</label>
                                    <input type="date" class="form-control" id="check-out" name="check_out" value="<?= old('check_out'); ?>">
                                </div>
                                <label for="type_kamar">Type Kamar</label><br>
                                <center>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="type1" value="Type 1">
                                        <label class="form-check-label" for="type1">Type 1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="type2" value="Type 2">
                                        <label class="form-check-label" for="type2">Type 2</label>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="pembayaran"><br>Pembayaran</label>
                        <select class="form-control" id="pembayaran" name="pembayaran" value="<?= old('pembayaran'); ?>">
                            <option value="BCA">BCA</option>
                            <option value="Mandiri">Mandiri</option>
                            <option value="OVO">OVO</option>
                            <option value="Cash">Cash</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Booking</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>