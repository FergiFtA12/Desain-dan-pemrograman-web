<?php
include("functions.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Masukkan Data Pesanan Anda
                            
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="Nama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Pesan</label>
                                <input type="date" name="tanggal_pesan" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>No Hp</label>
                                <input type="text" name="no_hp" class="form-control">
                            </div>
                
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                <a href="service.html" class="btn btn-danger float-end">Kembali</a>
                                <a href="tampil.php" class="btn btn-success float-end">Tampil Data</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php
 //syntax php untuk simpan ke database
 if (isset($_POST['submit'])) {
  # code...
     $Nama = $_POST['Nama'];
     $tanggal_pesan = $_POST['tanggal_pesan'];
     $no_hp = $_POST['no_hp'];
    
  $sql = "INSERT INTO pemesanan values ('default', '$Nama', '$tanggal_pesan', '$no_hp')";
  $result = mysqli_query($conn, $sql);
  
  if ($conn) {
   # code...
   echo "data berhasil disimpan";
  }else{
   echo "data gagal disimpan".mysqli_error();
  }
 }
?>
  </body>
</html>