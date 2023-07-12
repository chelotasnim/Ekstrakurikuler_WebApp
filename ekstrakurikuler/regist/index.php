<?php
    error_reporting(E_ERROR | E_PARSE);
        session_start();
        if(!isset($_SESSION["login"])){
          header("Location:../userAcc/index.php");
        }
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();

    include "../connect.php";
    $idUser = $_GET['id_user'];
    $query = mysqli_query($conn,"SELECT * FROM user_extra WHERE id_user = '$idUser'");
    $result = mysqli_fetch_assoc($query);
    if($idUser === $result['id_user']){
        header("Location: ../afterRegist/index.php?id_user=$idUser&id=$idUser");
    }

    if(isset($_POST['submit'])){
        $peserta = htmlspecialchars($_POST['peserta']);
        $notelp = htmlspecialchars($_POST['notelp']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $idEkstra1 = htmlspecialchars($_POST['idEkstra1']);
        $idEkstra2 = htmlspecialchars($_POST['idEkstra2']);

        $dir = "uspic/";
        $fileName = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'],$dir.$fileName);

        $insert = mysqli_query($conn,"INSERT INTO user_extra VALUES('$idUser','$peserta','$notelp','$alamat','$fileName','$idEkstra1','$idEkstra2')");
        header("Location: ../afterRegist/index.php?id_user=$idUser&id=$idUser");
    }   
    
    $queryEx = mysqli_query($conn,"SELECT * FROM extra");
    
    $selEx = mysqli_query($conn,"SELECT * FROM extra");
    $rowsEx = mysqli_num_rows($selEx);

    
?>
<!DOCTYPE html> 
<html lang="en" translate="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../icons/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Ekstrakurikuler</title>
</head>
<body>
    <div class="page">
        <div id="pick" class="row">
            <div class="scroll top">
                <i class="fa-solid fa-chevron-up"></i>
                <a href="#form">Scroll Top</a>
            </div>
            <div class="box box-head" style="--i:10000">Klik untuk memilih :</div>
            <?php $i = $rowsEx;?>
            <?php foreach($queryEx as $a):?>
            <div class="box select-box" style="--i:<?php echo $i--;?>">
                <p><?php echo  $a['nama_extra'];?></p>
            </div>
            <?php endforeach;?>
        </div>
        <div id="form" class="row form-content">
            <form action="" method="POST" enctype="multipart/form-data">
                <h5>Pendaftaran Ekstrakurikuler</h5>
                <div class="prompt-container">
                <div class="prompt">
                        <p>Foto Peserta</p>
                        <input type="file" title="pilih file disini" name="gambar" accept="image/png, image/jpeg, image/jpg" required>
                    </div>
                    <div class="prompt">
                        <p>Nama Peserta</p>
                        <input type="text" placeholder="Maks 25 Karakter" maxlength="25" required autocomplete="off" name="peserta">
                    </div>
                    <div class="prompt">
                        <p>No HP Peserta</p>
                        <input class="phone-number" type="number" placeholder="+62 | - - -" min="0" required autocomplete="off" name="notelp">
                    </div>
                    <div class="prompt">
                        <p>Alamat Peserta</p>
                        <input type="text" placeholder="Alamat" maxlength="25" required autocomplete="off" name="alamat">
                    </div>
                    <div class="prompt">
                        <p>Ekstrakurikuler 1</p>
                        <input class="ekskul-input" type="text" placeholder="Pilih pada box" name="idEkstra1"
                        required readonly>
                    </div>
                    <div class="prompt">
                        <p>Ekstrakurikuler 2</p>
                        <input class="ekskul-input" type="text" placeholder="Pilih pada box" name="idEkstra2"
                        required readonly>
                    </div>
                    <button class="reset">
                        <a href="">
                            Reset Box
                        </a>
                    </button>
                    <button class="daftar" name="submit">
                            Daftar
                    </button>
                </div>
            </form>
            <div class="scroll down">
                <a href="#pick">Scroll Down</a>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>
</html>