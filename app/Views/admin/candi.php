<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <<?php endif; ?> <h3>Data Pembayaran Homestay Candi</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Bayar</th>
                    <th scope="col">No Kamar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Check-In</th>
                    <th scope="col">Check-Out</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($bayar as $byr) : ?>
                    <tr>
                        <td scope="row"><?php echo $no++; ?></td>
                        <td><?php echo $byr['id_bayar']; ?></td>
                        <td><?php echo $byr['no_kamar']; ?></td>
                        <td><?php echo $byr['nama']; ?></td>
                        <td><?php echo $byr['check_in']; ?></td>
                        <td><?php echo $byr['check_out']; ?></td>
                        <td>
                            <a href="/admin/detail/<?= $byr['id_bayar']; ?>">
                                <button type="button" class="btn btn-info">Detail Pembayaran</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#formBayar">
            Tambah Data Booking
        </button>
        <a class="btn btn-danger" href="/admin/printCND"><i class="fa fa-print"></i> Print</a>

        <!-- CSS Modal -->

        <style>
            #modal {
                padding: 20px;
            }

            #modal .col {
                border-left: 1px solid #c9c9c9;
                border-right: 1px solid #c9c9c9;
            }
        </style>

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
                        <form action="/admin/tambahCND" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="container" id="modal">
                                <div class="row">
                                    <div class="col">
                                        <input type="hidden" name="id" value="<?= user()->id; ?>">
                                        <div class="form-group">
                                            <label for="nama">Nama Customer</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" autofocus value="<?= (old('username')) ? old('username') : user()->username ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('username'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Customer</label>
                                            <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" autofocus value="<?= (old('email')) ? old('email') : user()->email ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('email'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat Customer</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= (old('alamat')) ? old('alamat') : user()->alamat ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('alamat'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_telp">No. Telp Customer</label>
                                            <input type="number" class="form-control <?= ($validation->hasError('no_telp')) ? 'is-invalid' : ''; ?>" id="no_telp" name="no_telp" value="<?= (old('no_telp')) ? old('no_telp') : user()->no_telp ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('no_telp'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            Upload KTP/KK/Surat Nikah (dalam format gambar)
                                            <div class="custom-file">
                                                <label for="gambar">Upload KTP/KK</label>
                                                <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('gambar'); ?>
                                                </div>
                                                <label class="custom-file-label" for="gambar">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="check_in">Check-In</label>
                                            <input type="date" class="form-control <?= ($validation->hasError('check_in')) ? 'is-invalid' : ''; ?>" id="check_in" name="check_in" value="<?= old('check_in'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('check_in'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_hari">Lama Menyewa (tulis angkanya saja)</label>
                                            <input type="number" class="form-control" id="jumlah_hari" name="jumlah_hari" value="<?= old('jumlah_hari'); ?>" style="width: 70px;">
                                        </div>
                                        <label for="type_kamar">Type Kamar</label><br>
                                        <center>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="no_kamar[]" value="KamarCND2">
                                                <label class="form-check-label" for="kamar2">Kamar 2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="no_kamar[]" value="KamarCND3">
                                                <label class="form-check-label" for="kamar3">Kamar 3</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="no_kamar[]" value="KamarCND4">
                                                <label class="form-check-label" for="kamar4">Kamar 4</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="no_kamar[]" value="KamarCND5">
                                                <label class="form-check-label" for="kamar5">Kamar 5</label>
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
                        <input type="submit" name="data" value="Booking" class="btn btn-success">
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <?= $this->endSection(); ?>