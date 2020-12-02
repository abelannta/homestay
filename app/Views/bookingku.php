<?= $this->extend('layout/templateuser'); ?>

<?= $this->section('content'); ?>
<h3>Data Bookingku</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">No Kamar</th>
            <th scope="col">Check-In</th>
            <th scope="col">Check-Out</th>
            <th scope="col">Pembayaran</th>
            <th scope="col">Harga</th>
            <th scope="col">Bukti</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($bayar as $byr) : ?>
            <tr>
                <td scope="row"><?php echo $no++; ?></td>
                <td><?php echo $byr['nama']; ?></td>
                <td><?php echo $byr['no_kamar']; ?></td>
                <td><?php echo $byr['check_in']; ?></td>
                <td><?php echo $byr['check_out']; ?></td>
                <td><?php echo $byr['pembayaran']; ?></td>
                <td><?php echo $byr['harga']; ?></td>
                <td><img src="/img/data_booking/bukti/<?= $byr['bukti']; ?>" style="width:100px"></td>
                <td>
                    <a href="/bookingku/upload/<?= $byr['id_bayar']; ?>" class="btn btn-success">Upload Bukti</a>
                    <!-- <form action="/bookingku/upload" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            Upload Bukti Transfer (dalam format gambar)
                            <div class="custom-file">
                                <label for="bukti">Upload Bukti</label>
                                <input type="file" class="custom-file-input" id="bukti" name="bukti" onchange="previewImg1()">

                                <label class="custom-file-label" for="bukti">Choose file</label>
                            </div>
                        </div>
                    </form> -->
                    <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#formUpload">Upload Bukti</button> -->
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- Modal -->
<!-- <div class="modal fade" id="formUpload1" tabindex="-1" aria-labelledby="Upload Bukti" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Bukti</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/bookingku/upload/" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        Upload Bukti Transfer (dalam format gambar)
                        <div class="custom-file">
                            <label for="bukti">Upload Bukti</label>
                            <input type="file" class="custom-file-input" id="bukti" name="bukti" onchange="previewImg1()">

                            <label class="custom-file-label" for="bukti">Choose file</label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="/bookingku/upload">
                    <button type="button" class="btn btn-success">Yakin</button>
                </a>
                </form>
            </div>
        </div>
    </div>
</div> -->
<?= $this->endSection(); ?>