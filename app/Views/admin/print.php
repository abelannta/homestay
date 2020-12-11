<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <center>
        <h1>Data Booking Homestay Aktif</h1>
        <?= date("Y-m-d") ?><br>
    </center>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Bayar</th>
                <th scope="col">No Kamar</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Check-In</th>
                <th scope="col">Check-Out</th>
                <th scope="col">Pembayaran</th>
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
                    <td><?php echo $byr['alamat']; ?></td>
                    <td><?php echo $byr['no_telp']; ?></td>
                    <td><?php echo $byr['check_in']; ?></td>
                    <td><?php echo $byr['check_out']; ?></td>
                    <td><?php echo $byr['pembayaran']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>