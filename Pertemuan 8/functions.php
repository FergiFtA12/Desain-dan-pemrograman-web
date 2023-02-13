<?php
$conn=mysqli_connect("localhost","root","","database_barbershop");
if(!$conn){
    die('Koneksi Error : '.mysqli_connect_errno().' - '.mysqli_connect_error());
}
$result=mysqli_query($conn,"SELECT * FROM tb_register");
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
    $name=htmlspecialchars($data["name"]);
    $email=htmlspecialchars($data["email"]);
    $password=htmlspecialchars($data["password"]);
    $query="INSERT INTO tb_register VALUES ('', '$name', '$email', '$password')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM pemesanan WHERE Id_pemesanan = $id");
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
function upload()
{
    $nama_file =$_FILES['Gambar']['nama'];
    $ukuran_file =$_FILES['Gambar']['size'];
    $error       =$_FILES['Gambar']['nama'];
}
?>