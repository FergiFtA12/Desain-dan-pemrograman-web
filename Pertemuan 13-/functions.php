<?php
$conn=mysqli_connect("localhost","root","","web");
if(!$conn){
    die('Koneksi Error : '.mysqli_connect_errno().' - '.mysqli_connect_error());
}
$result=mysqli_query($conn,"SELECT * FROM mahasiswa");
function query($query_kedua){
    global $conn;
    $result=mysqli_query($conn,$query_kedua);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
function tambah($data){
    global $conn;
    $nama=htmlspecialchars($data["Nama"]);
    $nim=htmlspecialchars($data["Nim"]);
    $email=htmlspecialchars($data["Email"]);
    $jurusan=htmlspecialchars($data["Jurusan"]);
    $gambar=htmlspecialchars($data["Gambar"]);
    $query="INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function edit($data){
    global $conn;
    $nama=htmlspecialchars($data["Nama"]);
    $nim=htmlspecialchars($data["Nim"]);
    $email=htmlspecialchars($data["Email"]);
    $jurusan=htmlspecialchars($data["Jurusan"]);
    $gambar=htmlspecialchars($data["Gambar"]);
    $query="UPDATE `mahasiswa` SET `Nama`='$nama',`Nim`='$nim',`Email`='$email',`Jurusan`='$jurusan',`Gambar`='$gambar'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function cari($keyword)
{
    $sql="SELECT * FROM mahasiswa
    WHERE
    Nama Like '%$keyword' OR
    Nim Like '%$keyword' OR
    Email Like '%$keyword' OR
    Jurusan Like '%$keyword' OR
    ";
    return query($aql);
}
?>