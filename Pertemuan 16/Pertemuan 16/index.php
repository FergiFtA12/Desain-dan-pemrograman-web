<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Daftar Mahasiswa</h4>
              <a href="tambah.php" class="btn btn-primary float-end">Tambah Mahasiswa</a>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Nim</th>
                  <th>Email</th>
                  <th>Jurusan</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i=1?>
                <?php while($row=mysqli_fetch_assoc($result)):?>
                  <tr>
                      <td><?= $i; ?></td>
                      <td><?= $row["Nama"]; ?></td>
                      <td><?= $row["Nim"]; ?></td>
                      <td><?= $row["Email"]; ?></td>
                      <td><?= $row["Jurusan"]; ?></td>
                      <td><img src="image/<?php echo $row["Gambar"]; ?>" alt="" width="100" height="100" srcset=""></td>
                      <td>
                          <a href="edit.php?id=<?= $row["id"] ?>" class="btn btn-success btn-sm">Edit</a>
                          <form action="functions.php" method="POST" class="d-inline">
                            <a href="hapus.php?id=<?= $row["id"] ?>" class="btn btn-danger btn-sm" name="update_student">Hapus</a>
                          </form>
                      </td>
                  </tr>
                  <?php $i++ ?>
                  <?php endwhile; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>