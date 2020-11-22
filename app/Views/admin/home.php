<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<center>
    <div class="col d-flex justify-content-center">
        <div class="card-deck">
            <div class="card text-white bg-primary mb-3 mr-4" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Pembayaran Suhat</h5>
                    <p class="card-text">Berisi Data Pembayaran Suhat Dengan Status On-Going.</p>
                </div>
                <a href="/admin/suhat">
                    <div class="card-footer">Klik Disini</div>
                </a>
            </div>
            <div class="card text-white bg-success mb-3 mr-4" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Riwayat Suhat</h5>
                    <p class="card-text">Berisi Data Riwayat Seluruh Pembayaran Suhat Yang Telah Selesai.</p>
                </div>
                <a href="/admin/riwayat">
                    <div class="card-footer">Klik Disini</div>
                </a>
            </div>
            <div class="card text-white bg-info mb-3 mr-4" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Pembayaran Candi</h5>
                    <p class="card-text">Berisi Data Pembayaran Candi Dengan Status On-Going.</p>
                </div>
                <a href="/admin/candi">
                    <div class="card-footer">Klik Disini</div>
                </a>
            </div>
            <div class="card text-white bg-danger mb-3 mr-4" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Riwayat Candi</h5>
                    <p class="card-text">Berisi Data Riwayat Seluruh Pembayaran Candi Yang Telah Selesai.</p>
                </div>
                <a href="#">
                    <div class="card-footer">Klik Disini</div>
                </a>
            </div>
        </div>
    </div>
</center>
<?= $this->endSection(); ?>