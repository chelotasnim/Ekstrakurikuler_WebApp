<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $id = $_GET['id_user'];
    if($id === null){
        header("Location:../userAcc/index.php");
    }
    include "../connect.php";
    $selectUser = mysqli_query($conn,"SELECT * FROM user_extra WHERE id_user = $id ");
    $fetchUser = mysqli_fetch_assoc($selectUser); 
    if(isset($_POST['submit'])){
        $peserta = htmlspecialchars($_POST['peserta']);
        $notelp = htmlspecialchars($_POST['notelp']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $idEkstra1 = htmlspecialchars($_POST['idEkstra1']);
        $idEkstra2 = htmlspecialchars($_POST['idEkstra2']);

        $direktori = "../regist/uspic/";
        $fileName = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'],$direktori.$fileName);

        $update = mysqli_query($conn,"UPDATE user_extra SET peserta = '$peserta', notelp = '$notelp', alamat = '$alamat', Gambar = '$fileName', id_extra1 = '$idEkstra1' WHERE id_user = '$id'");
        header("Location: index.php?id_user=$id");
    }
    $showExtra = mysqli_query($conn,"SELECT nama_extra FROM extra");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../icons/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Ubah data pendaftaran</title>
</head>
<body>
    <div class="reset-page">
        <div class="login-layer ekskul-edit">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-head">
                    <h5>Edit Kepesertaan</h5>
                </div>
                <div class="prompt">
                    <p>Nama</p>
                    <div class="prompt-input">
                        <div class="logo">
                            <i class="fa-lg fa-solid fa-user-tag"></i>
                        </div>
                        <input class="this-field name-input" type="text" placeholder="Masukkan nama" name="peserta" maxlength="25" autocomplete="off" required value="<?php echo $fetchUser['peserta'];?>">
                    </div>
                </div>
                <div class="prompt">
                    <p>No HP</p>
                    <div class="prompt-input">
                        <div class="logo">
                            <i class="fa-lg fa-solid fa-square-phone"></i>
                        </div>
                        <input class="this-field phone-number" type="number" min="0" placeholder="+62 | - - - -" name="notelp"  autocomplete="off" required>
                    </div>
                </div>
                <div class="prompt">
                    <p>Alamat</p>
                    <div class="prompt-input">
                        <div class="logo">
                            <i class="fa-lg fa-solid fa-map-location-dot"></i>
                        </div>
                        <input class="this-field" type="text" placeholder="Alamat anda" name="alamat" maxlength="25" autocomplete="off" required value="<?php echo $fetchUser['alamat'];?>">
                    </div>
                </div>
                <div class="prompt">
                    <p>Ekstrakurikuler 1</p>
                    <div class="prompt-input">
                        <div class="logo">
                            <i class="fa-lg fa-solid fa-volleyball"></i>
                        </div>
                        <select class="this-field" name="idEkstra1" id="" required>
                            <?php foreach($showExtra as $extra):?>
                            <option class="default-value" value="<?php echo $fetchUser['id_extra1'];?>" selected disabled hidden><?php echo $fetchUser['id_extra1'];?></option>
                            <option value="<?php echo $extra['nama_extra'];?>"><?php echo $extra['nama_extra'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="prompt">
                    <p>Ekstrakurikuler 2</p>
                    <div class="prompt-input">
                        <div class="logo">
                            <i class="fa-lg fa-solid fa-basketball"></i>
                        </div>
                        <select class="this-field" name="idEkstra2" id="" required>
                            <?php foreach($showExtra as $extra):?>
                            <option class="default-value" value="<?php echo $fetchUser['id_extra2'];?>" selected disabled hidden><?php echo $fetchUser['id_extra2'];?></option>
                            <option value="<?php echo $extra['nama_extra'];?>"><?php echo $extra['nama_extra'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="prompt">
                    <p>Foto Profile</p>
                    <div class="prompt-input">
                        <div class="logo">
                            <i class="fa-lg fa-regular fa-image"></i>
                        </div>
                        <input class="this-field" type="file" title ="pilih file disini"accept="image/png, image/jpeg, image/jpg"  name="gambar" required    >
                    </div>
                </div>
                <div class="btn">
                    <button name="submit">Edit</button>
                </div>
                <p>
                    Lakukan pengeditan sesuai kebutuhan pada data pendaftaran anda dengan benar untuk menghindari kesalahan data yang berulang
                </p>
                <div class="outer-load">
                    <div class="inner-load"></div>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>