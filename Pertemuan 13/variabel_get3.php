<?php
    $mahasiswa=[
        [
            "Nama" => "DIna",
            "Nim"=> "1234567",
            "Jurusan"=>"Teknik Kimia",
            "Email"=>"dina@gmail.com",
            "Gambar"=>"dina.jpg"
        ],
        [
            "Nama" => "DIn0",
            "Nim"=> "145457",
            "Jurusan"=>"Teknik Listrik",
            "Email"=>"din0@gmail.com",
            "Gambar"=>"ngopi.jpg"
        ]
    ];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Mahasiswa</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       
        <h1>Data Mahasiswa array multidimensi</h1>
        <ul>
            <?php
                foreach($mahasiswa as $mhs);
            ?>
            <li>
                <img src="'img/<?= $mhs[Gambar]?>" alt="" width="100" height="100">
            </li>
            <li>
                <a href="Latihan_get.php">Nama: <?php echo $mhs[Nama]?></a>
            </li>
            
        </ul>
        <script src="" async defer></script>
    </body>
</html>