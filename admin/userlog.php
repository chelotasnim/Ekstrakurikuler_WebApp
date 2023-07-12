<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    session_start();
     if(!isset($_SESSION['login'])){
        header('Location: ../userAcc/index.php');
     }
     include "../connect.php";
    $queryUser = mysqli_query($conn,"SELECT * FROM user WHERE role = 'user'");
?>
    <div class="user-log">
        <header class="user-head">
            <h5>Akun<br><span>terdaftar.</span></h5>
        </header>
        <div class="search">
            <input type="text" class="search-box" placeholder="Cari Nama User" onkeyup="searchData()">
        </div>
        <div class="user-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Pengaturan</th>
                </tr>
                <?php if($queryUser):?>
                    <?php $i=1;?>
                        <?php foreach($queryUser as $a):?>
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td class="search-parameter"><?php echo $a['username'];?></td>
                            <td>
                                <a href="../update/editUser.php?id=<?php echo $a['id'];?>">
                                    <i class="fa-lg fa-solid fa-pencil" style="color:rgb(225,180,0)"></i>
                                </a>
                                <a href="delete.php?id=<?php echo $a['id'];?>">
                                    <i class="fa-lg fa-solid fa-trash-can" style="color:rgb(255,0,0);margin-left:8px"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                <?php endif;?>
            </table>
        </div>
    </div>