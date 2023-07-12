<?php
    include "../connect.php";
    $query = mysqli_query($conn,"SELECT * FROM extra");
?>
<div class="user-log">
        <header class="user-head">
            <h5>Data<br><span>Ekskul.</span></h5>
        </header>
        <div class="search">
            <input type="text" class="search-box" placeholder="Cari Nama Ekskul" onkeyup="searchData()">
            <a href="index.php?halaman=editEkskul">
                <ion-icon name="duplicate-outline"></ion-icon>
                Tambahkan Ekskul
            </a>
        </div>
        <div class="user-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>Ekstrakurikuler</th>
                    <th>Pembina</th>
                    <th>Kategori</th>
                    <th>Pengaturan</th>
                </tr>
                <?php if($query):?>
                <?php $i = 1; ?>
                <?php foreach($query as $a):?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td class="search-parameter"><?php echo $a['nama_extra']; ?></td>
                        <td><?php echo $a['nama_pembina']; ?></td>
                        <td><?php echo $a['kategori']; ?></td>
                        <td>
                            <a href="../update/updateEkskul.php?id=<?php echo $a['id'];?>">
                                <i class="fa-lg fa-solid fa-pencil" style="color:rgb(225,180,0)"></i>
                            </a>
                            <a href="deleteEkskul.php?id=<?php echo $a['id'];?>">
                                <i class="fa-lg fa-solid fa-trash-can" style="color:rgb(255,0,0);margin-left:8px"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
                <?php endif;?>
            </table>
        </div>
    </div>