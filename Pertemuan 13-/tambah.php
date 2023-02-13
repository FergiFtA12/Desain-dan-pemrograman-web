<?php
require 'functions.php';

if(isset ($_POST['submit'])){
    if(tambah($_POST)>0){
        echo"
    <script>
        document.location.href='index.php';
    </script>
    ";
    }else{
    echo"
    <script>
        document.location.href='index.php';
    </script>";
    echo "<br>";
    echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah Mahasiswa</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Mahasiswa
                            <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="Nama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Nim</label>
                                <input type="text" name="Nim" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="Email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Jurusan</label>
                                <input type="text" name="Jurusan" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Gambar</label>
                                <input type="text" name="Gambar" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>