<?= $this->extend('layout/templateuser'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Upload Bukti Pembayaran</h2>
            <form action="/bookingku/update/<?= $bayar['id_bayar']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="angka" value="<?= $bayar['id_bayar']; ?>">
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="bukti" name="bukti" onchange="previewImg1()">
                            <label class="custom-file-label" for="bukti"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>