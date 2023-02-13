<?php
$conn=mysqli_connect("localhost","root","","web");
$result=mysqli_query($conn,"SELECT * FROM mahasiswa;");
function query($query_kedua){
    global $conn;
    $result=mysqli_query($conn,$query_kedua);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
?>