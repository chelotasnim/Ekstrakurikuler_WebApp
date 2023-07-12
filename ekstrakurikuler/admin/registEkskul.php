<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    session_start();
    if(!isset($_SESSION["login"])){
    header("Location:../userAcc/index.php");
    }
    include "../connect.php";
    $query = mysqli_query($conn,"SELECT * FROM user_extra");

?>
    <div class="user-log">
        <header class="user-head">
            <h5>Peserta<br><span>terdaftar.</span></h5>
        </header>
        <div class="search">
            <input type="text" class="search-box" placeholder="Cari Nama Peserta" onkeyup="searchData()">
        </div>
        <div class="user-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>Peserta</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th>Ekstrakurikuler 1</th>
                    <th>Ekstrakurikuler 2</th>
                    <th>Delete</th>
                </tr>
            <?php if($query):?>
                <?php $i = 1;?>
                <?php foreach($query as $b):?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td class="search-parameter"><?php echo $b['peserta'];?></td>
                        <td><?php echo $b['notelp'];?></td>
                        <td><?php echo $b['alamat'];?></td>
                        <td><?php echo $b['id_extra1'];?></td>
                        <td><?php echo $b['id_extra2'];?></td>
                        <td>
                            <a href="deleteRegist.php?peserta=<?php echo $b['peserta'];?>">
                                <i class="fa-lg fa-solid fa-trash-can" style="color:rgb(255,0,0)"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
            <?php endif;?>
            </table>
        </div>
    </div>