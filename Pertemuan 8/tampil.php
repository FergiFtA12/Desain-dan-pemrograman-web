<?php
require 'functions.php';
$conn=mysqli_connect("localhost", "root", "", "database_barbershop");
$result=mysqli_query($conn, "SELECT * FROM pemesanan");
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
        <a href="pemesanan.php" class="btn btn-primary float-end">Tambah Data</a>

        <table border="1" cellpadding= "10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>tanggal pesan</th>
                <th>No Hp</th>

            </tr>
            <?php $i=1 ?>

            
            <?php while($row=mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['Nama']; ?></td>
                <td><?= $row['tanggal_pesan']; ?></td>
                <td><?= $row['no_hp']; ?></td>
                <td>
                <a href="pemesanan.php" class="btn btn-success float-end">Edit</a>
                <a href="hapus.php?id=<?= $row["Id_pemesanan"] ?>" class="btn btn-danger float-end">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </body>
</html>