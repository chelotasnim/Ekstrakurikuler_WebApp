<?php
    include "../connect.php";
    $id = $_GET['id'];
    $delete = mysqli_query($conn,"DELETE FROM pesan WHERE id = '$id'");
    if($delete){
        header("Location: ../admin/index.php?halaman=report");
    }
?>