<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <<?php endif; ?> <h3>Data Pembayaran Homestay Suhat</h3>
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
        <a class="btn btn-danger" href="/admin/print"><i class="fa fa-print"></i> Print</a>

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
        <div class="modal fade" id="formBayar" tabindex="-1" aria-labelledby="judulBayar" aria-hidden="true">
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