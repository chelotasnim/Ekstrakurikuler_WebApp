<?php
    include "../connect.php";
    $id = $_GET['id'];
    $delete = mysqli_query($conn, "DELETE FROM user WHERE id = '$id'");
    if($delete){
        header("Location:index.php");
    }
?>