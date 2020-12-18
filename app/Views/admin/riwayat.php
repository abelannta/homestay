<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <<?php endif; ?> <h3>Riwayat Pembayaran Homestay Suhat</h3>

        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan keyword pencarian..." name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Bayar</th>
                    <th scope="col">No Kamar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Check-In</th>
                    <th scope="col">Check-Out</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tgl Pesan</th>
                    <th scope="col">Tgl Selesai</th>
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
                        <td><?php echo $byr['kondisi']; ?></td>
                        <td><?php echo $byr['created_at']; ?></td>
                        <td><?php echo $byr['updated_at']; ?></td>
                        <td>
                            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#formDelete<?= $byr['id_bayar']; ?>">Delete</button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="formDelete<?= $byr['id_bayar']; ?>" tabindex="-1" aria-labelledby="judulDelete" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Verifikasi Pembayaran</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apa anda yakin untuk verifikasi pembayaran ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <form action="/admin/detail/<?= $byr['id_bayar']; ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </tbody>
        </table>


        <?= $this->endSection(); ?>