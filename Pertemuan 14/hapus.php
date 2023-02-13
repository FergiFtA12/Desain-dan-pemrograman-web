<?php
require 'functions.php';

$id=$_GET["Id"];

if(hapus ($id)>0){
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
?>