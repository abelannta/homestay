<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<h1>Daftar Contact</h1>
<center>
    <table class="table table-bordered" style="table-layout: fixed; width: 100%" id="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kontak as $k) : ?>
                <tr>
                    <td><?php echo $k['nama']; ?></td>
                    <td><?php echo $k['email']; ?></td>
                    <td><?php echo $k['no_telp']; ?></td>
                    <td style="word-wrap: break-word"><?php echo $k['pesan']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</center>

<?= $this->endSection(); ?>