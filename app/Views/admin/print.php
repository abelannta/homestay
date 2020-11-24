<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Bayar</th>
                <th scope="col">No Kamar</th>
                <th scope="col">Nama</th>
                <th scope="col">Check-In</th>
                <th scope="col">Check-Out</th>
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
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>