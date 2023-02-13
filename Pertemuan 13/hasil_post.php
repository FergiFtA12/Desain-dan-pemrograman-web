<?php

    //cek apakah c sudah diset belum
    if
    (
        !isset($_GET["submit"]))
        
    {
        //redirect
        header("Location:form_post.php");
        exit;
    }
    
?>