<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h3>Data Pembayaran</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Email</th>
            <th scope="col">Harga</th>
            <th scope="col">Pembayaran</th>
            <th scope="col">Bukti</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $bayar['nama']; ?></td>
            <td><?= $bayar['alamat']; ?></td>
            <td><?= $bayar['no_telp']; ?></td>
            <td><?= $bayar['email']; ?></td>
            <td><?= $bayar['harga']; ?></td>
            <td><?= $bayar['pembayaran']; ?></td>
            <td><img src="/img/data_booking/bukti/<?= $bayar['bukti']; ?>" style="width:100px"></td>
            <td><?= $bayar['status']; ?></td>
            <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#formVerif" <?php if ($bayar['bukti'] == 'default.png') { ?>disabled<?php } ?>>Verifikasi</button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#formHapus">Check Out</button>
            </td>
        </tr>
    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="formHapus" tabindex="-1" aria-labelledby="judulHapus" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Check-Out Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apa anda yakin untuk Check-Out data ini ? <br>
                Check-Out = Hapus Data Pembayaran.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="/admin/checkout/<?= $bayar['id_bayar']; ?>">
                    <button type="button" class="btn btn-success">Yakin</button>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formVerif" tabindex="-1" aria-labelledby="judulVerif" aria-hidden="true">
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
                <a href="/admin/verifikasi/<?= $bayar['id_bayar']; ?>">
                    <button type="button" class="btn btn-success">Yakin</button>
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>