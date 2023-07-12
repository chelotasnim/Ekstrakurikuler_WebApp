<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $id = $_GET['id'];
    $idUser = $_GET['id_user'];
    if($id === null && $idUser === null){
        header("Location:../userAcc/index.php");
    }
    
    include "../connect.php";
    $id_user = $_GET['id_user'];
    $showPeserta = mysqli_query($conn, "SELECT * FROM user_extra WHERE id_user = '$id_user'");
    $fetchPeserta = mysqli_fetch_assoc($showPeserta);
    $showUser = mysqli_query($conn,"SELECT * FROM user WHERE id = '$id_user'");
    $fetchUser = mysqli_fetch_assoc($showUser);
?>
<!DOCTYPE html>
<html lang="en" translate="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../icons/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Selamat Datang <?php echo $fetchUser['username'];?>!</title>
</head>
<body>
    <div class="page">
        <header>
            <div class="user-profile">
                <img src="../regist/uspic/<?php echo $fetchPeserta['Gambar'];?>" alt="">
                <div class="profile-data">
                    <p><?php echo $fetchUser['username'];?></p>
                    <p><?php echo $fetchPeserta['peserta']?></p>
                    <p><?php echo $fetchPeserta['notelp'];?></p>
                    <p><?php echo $fetchPeserta['id_extra1']?> & <?php echo $fetchPeserta['id_extra2'];?></p>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="row">
                <div class="row-content">
                    <div class="logo">
                        <i class="fa-xl fa-solid fa-football"></i>
                    </div>
                    <p>
                        Hai <?php echo $fetchPeserta['peserta'];?>! Anda sekarang sudah terdaftar sebagai anggota resmi dari ekstrakurikuler <?php echo $fetchPeserta['id_extra1'];?> dan <?php echo $fetchPeserta['id_extra2'];?>, disana anda dapat berpartisipasi sesuai minat dan bakat anda. Ayo berpartisi aktif pada kegiatan kegiatan ekstrakurikuler mu!
                    </p>
                </div>
                <div class="row-content">
                    <div class="logo">
                        <i class="fa-xl fa-solid fa-user-gear"></i>
                    </div>
                    <p>
                        Ubah pengaturan akun anda disini, anda juga bisa melakukan perubahan data terhadap data pendaftaran ekstrakurikuler yang sudah dilakukan melalui perubahan peserta, cukup masuk ke dalam menu perubahan akun atau perubahan peserta pada halaman ini.
                    </p>
                </div>
            </div>
            <div class="row card-row">
                <div class="card">
                    <h5>Pengaturan Akun</h5>
                    <p>Lakukan perubahan nama dan atau password pada akun anda, proses ini mudah dan cepat anda hanya perlu memasukkan kembali perubahan 2 data tersebut</p>
                    <div class="change">
                        <a href="loginReset.php?id=<?php echo $id_user?>">Ubah data</a>
                    </div>
                </div>
                <div class="card">
                    <h5>Pengaturan Peserta</h5>
                    <p>Semua Data pendaftaran ekstrakurikuler yang anda kirim masih dapat diubah disini, silahkan masukkan Nama, No HP, Alamat dan pemilihan ekstrakurikuler 1 atau 2</p>
                    <div class="change">
                        <a href="ekskulReset.php?id_user=<?php echo $id_user?>">Ubah data</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="act-box">
            <div class="finish">
                <a href="../index.php?id_user=<?php echo $id_user?>&id=<?php echo $id_user?>">Beranda</a>
            </div>
            <div class="finish">
                <a href="../index.php">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>