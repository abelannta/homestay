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
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/suhat/kamar/ruang_tamu.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Ruang Tamu</h5>
                <p>Ruang tamu yang terlihat elegan dan minimalis.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/suhat/kamar/koridor_lt2.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Koridor Lantai 2</h5>
                <p>Kamar-kamar yang berjejer rapi di sepanjang koridor.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/suhat/kamar/teras_lt2.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Teras Lantai 2</h5>
                <p>Teras yang terlihat elegan dan berhadapan dengan pemandangan yang indah.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/suhat/kamar/kmr_type1.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kamar Type 1</h5>
                <p>Kamar type 1 sudah dilengkapi AC.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/suhat/kamar/bed_type1.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bed Type 1</h5>
                <p>Pada type 1, bednya menggunakan bed queen size.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/suhat/kamar/kmr_type2.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kamar Type 2</h5>
                <p>Kamar type 2 sudah dilengkapi Kipas Angin.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/suhat/kamar/bed_type2.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bed Type 2</h5>
                <p>Pada type 2, bednya menggunakan bed single size.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/suhat/kamar/km.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kamar Mandi</h5>
                <p>Terdapat kamar mandi dalam yang menggunakan shower dan kloset duduk.</p>
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
                                    <li>Type 1 = 5/5 kamar tersedia</li>
                                    <li>Type 2 = 11/11 kamar tersedia</li>
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
                                    <li>Type 1 (AC), Type 2 (Kipas Angin)</li>
                                    <li>TV Led</li>
                                    <li>Type 1 (Spring bed queen size), Type 2 (Spring bed single size)</li>
                                    <li>Meja kursi</li>
                                    <li>Lemari pakaian, cermin panjang</li>
                                    <li>Kamar mandi dalam (kloset duduk, shower, ember, gayung)</li>
                                    <li>Wadah handuk</li>
                                    <li>Tempat sampah</li>
                                    <li>Free pembersihan kamar dan penggantian sprei bedcover per 2 minggu</li>
                                    <li>Free sarapan tiap hari Jumat</li>
                                    <li>Kamar dilengkapi beranda yang menghubungkan kamar tidur dengan kamar mandi dalam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="fasilitasbersama">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Fasilitas Bersama
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="fasilitasbersama" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li>Ruang setrika</li>
                                    <li>Dapur dan kulkas di tiap lantai</li>
                                    <li>Ruang tamu</li>
                                    <li>CCTV 24 jam</li>
                                    <li>Penjaga kos</li>
                                    <li>Ruang jemuran</li>
                                    <li>Parkir motor dan mobil</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="harga">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Harga
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="harga" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <b>Type 1 :</b>
                                    <li>175,000/malam</li>
                                    <li>1,750,000/bulan untuk 1 orang (putra)</li>
                                    <li>2,000,000/bulan untuk 2 orang (pasutri sah)</li>
                                    <b>Type 2 :</b>
                                    <li>125,000/malam</li>
                                    <li>1,500,000/bulan untuk 1 orang (putra)</li>
                                    <li>1,800,000/bulan untuk 2 orang (pasutri)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="sistem">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Sistem
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="sistem" data-parent="#accordionExample">
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
                                    <label for="check-out">Lama Menyewa</label> <br>
                                    <input type="radio" name="jml_hari" value="1"> 1 Malam <br>
                                    <input type="radio" name="jml_hari" value="1"> 1 Bulan <br>
                                    <input type="radio" id="aktif" name="jml_hari" value="1">
                                    <input type="number" id="jumlah" name="hari" style="width: 30px;"> Hari
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

<!-- disable input type text 1-->
<script>
    var boxes = $('#aktif');
    boxes.on('change', function() {
        $('#jumlah').prop('disabled', !boxes.filter(':checked').length);
    }).trigger('change');
</script>

<?= $this->endSection(); ?>