<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    session_start();
    if(!isset($_SESSION["login"])){
    header("Location:../userAcc/index.php");
    }

    include "../connect.php";
    if(isset($_POST['submit'])){
        $namaExtra = htmlspecialchars($_POST['namaExtra']);
        $namaPembina = htmlspecialchars($_POST['namaPembina']);
        $kategori = htmlspecialchars($_POST['kategori']);
        $deskripsi = htmlspecialchars($_POST['deskripsi']);

        $direktori = "foto/";
        $fileName = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'],$direktori.$fileName);
        $insert = mysqli_query($conn,"INSERT INTO extra VALUES('','$namaExtra','$deskripsi','$fileName','$kategori','$namaPembina')");

    }
    if(isset($_POST['submitcategory'])){
        $newCategory = htmlspecialchars($_POST['newcategory']);
        $insert = mysqli_query($conn,"INSERT INTO category VALUES('','$newCategory')");
    }
    $showCategory = mysqli_query($conn,"SELECT * FROM category");
    $categoryDropdown = mysqli_query($conn,"SELECT DISTINCT category FROM category");
?>
    <div class="edit-ekskul">
        <header>
            <h5>Edit Category</h5>
        </header>
        <div class="edit-ekskul-content">
            <form action="" method="POST" enctype="multipart/form-data" class="category-form">
            <div class="search">
                <input type="text" class="search-box" placeholder="Tambahkan Kategori Baru" name="newcategory" autocomplete="off" required>
                <button class="submit" name="submitcategory">Add</button>
            </div>
            </form>
            <div class="user-container">
                <table> 
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Pengaturan</th>
                    </tr>
                    <?php $i =1;?>
                    <?php foreach($showCategory as $category):?>
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $category['category'];?></td>
                            <td>
                                <a href="../update/updateCategory.php?id=<?php echo $category['id'];?>">
                                    <i class="fa-lg fa-solid fa-pencil" style="color:rgb(225,180,0)"></i>
                                </a>
                                <a href="../delete/deleteCategory.php?id=<?php echo $category['id'];?>">
                                    <i class="fa-lg fa-solid fa-trash-can" style="color:rgb(255,0,0);margin-left:8px"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
    <div class="edit-ekskul">
        <header>
            <h5>Add Ekskul</h5>
        </header>
        <div class="edit-ekskul-content">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="prompt">
                    <p>Nama Ekstrakurikuler</p>
                    <br>
                    <input type="text" placeholder="Masukkan Nama" name="namaExtra" maxlength="25" autocomplete="off" required>
                </div>
                <div class="prompt">
                    <p>Nama Pembina</p>
                    <br>
                    <input type="text" placeholder="Masukkan Pembina" name="namaPembina" maxlength="25" autocomplete="off" required>
                </div>
                <div class="prompt">
                    <p>Kategori</p>
                    <br>
                    <select name="kategori" required>
                        <?php foreach($categoryDropdown as $a):?>
                            <option value="<?php echo $a['category'];?>"><?php echo $a['category'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="prompt">
                    <p>Deskripsi</p>
                    <br>
                    <input type="text" placeholder="Masukkan Deskripsi" name="deskripsi" autocomplete="off" minlength="70" maxlength="130" required>
                </div>
                <div class="prompt">
                    <p>Konten Foto</p>
                    <br>
                    <input type="file" title="pilih file disini" name="gambar" accept="image/png, image/jpeg, image/jpg" required>
                </div>
                <div class="prompt">
                    <p>Add Content</p>
                    <br>
                    <button type="submit" name="submit">Add</button>
                </div>
            </form>
        </div>
    </div>