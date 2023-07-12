<?php 
    include "../connect.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM extra WHERE id = '$id'";
    $q1 = mysqli_query($conn,$sql);
    if($q1){
        header("Location:index.php?halaman=dataEkskul");
    }else{
        $error = "Gagal hapus data";
    }
?>