<?php
    include "../connect.php";
    $id = $_GET['id'];
    $ekskul = mysqli_query($conn,"SELECT * FROM extra WHERE id = '$id'");
    $result = mysqli_fetch_assoc($ekskul);
    if(isset($_POST['submit'])){
        $extra = htmlspecialchars($_POST['namaExtra']);
        $pembina = htmlspecialchars($_POST['namaPembina']);
        $kategori = htmlspecialchars($_POST['kategori']);
        $deskripsi = htmlspecialchars($_POST['deskripsi']);

        $direktori = "../admin/foto/";
        $fileName = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'],$direktori.$fileName);
        $update = mysqli_query($conn,"UPDATE extra SET nama_extra = '$extra', deskripsi = '$deskripsi', Gambar = '$fileName', kategori = '$kategori' , nama_pembina = '$pembina' WHERE id = '$id'");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/style.css">
    <title>Edit Ekstrakurikuler</title>
</head>
<body>
    <div class="admin-content single-used">
        <div class="edit-ekskul">
            <header>
                <h5>Edit Ekskul</h5>
            </header>
            <div class="edit-ekskul-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="prompt">
                        <p>Nama Ekstrakurikuler</p>
                        <br>
                        <input type="text" placeholder="Masukkan Nama" name="namaExtra" maxlength="25" autocomplete="off" value="<?php echo $result['nama_extra'];?>" required>
                    </div>
                    <div class="prompt">
                        <p>Nama Pembina</p>
                        <br>
                        <input type="text" placeholder="Masukkan Pembina" name="namaPembina" maxlength="25" autocomplete="off" value="<?php echo $result['nama_pembina'];?>" required>
                    </div>
                    <div class="prompt">
                        <p>Kategori</p>
                        <br>
                        <select name="kategori" required>
                            <option value="Organisasi">Organisasi</option>
                            <option value="Olahraga">Olahraga</option>
                            <option value="Kesenian">Kesenian</option>
                        </select>
                    </div>
                    <div class="prompt">
                        <p>Deskripsi</p>
                        <br>
                        <input type="text" placeholder="Masukkan Deskripsi" name="deskripsi" minlength="70" maxlength="130" autocomplete="off" value="<?php echo $result['deskripsi'];?>" required>
                    </div>
                    <div class="prompt">
                        <p>Konten Foto</p>
                        <br>
                        <input type="file" title="pilih file disini" name="gambar" accept="image/png, image/jpeg, image/jpg" required>
                    </div>
                    <div class="prompt">
                        <p>Add Content</p>
                        <br>
                        <button type="submit" name="submit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../afterRegist/script.js"></script>
</body>
</html>