<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<h1>Daftar Contact</h1>
<?php foreach ($alamat as $a) : ?>
    <ul>
        <li><?= $a['nama']; ?></li>
        <li><?= $a['alamat']; ?></li>
        <li><?= $a['kota']; ?></li>
    </ul>
<?php endforeach; ?>

<?= $this->endSection(); ?>