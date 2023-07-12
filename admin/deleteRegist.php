<?php
    include "../connect.php";
    $peserta = $_GET['peserta'];
    $sql = "DELETE FROM user_extra WHERE peserta = '$peserta'";
    $q1 = mysqli_query($conn,$sql);
    if($q1){
        header("Location:index.php?halaman=regist");
    }else{
        echo "Gagal hapus data";
    }
?>