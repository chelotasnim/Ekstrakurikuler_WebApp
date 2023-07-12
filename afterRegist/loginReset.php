<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    include "../connect.php";
    $id = $_GET['id'];
    if($id === null){
        header("Location:../userAcc/index.php");
    }
    if(isset($_POST['submit'])){
        $username = htmlspecialchars($_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $update = mysqli_query($conn,"UPDATE user SET username = '$username', password = '$password' WHERE id = '$id'");
        header("Location:../afterRegist/index.php?id_user=$id&id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../icons/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/eksis-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Reset Akun</title>
</head>
<body>
    <div class="reset-page">
        <div class="login-layer">
            <form action="" method="POST">
                <h5>Edit Akun</h5>
                <div class="prompt">
                    <p>New Username</p>
                    <div class="prompt-input">
                        <div class="icons">
                            <i class="fa-solid fa-user-pen"></i>
                        </div>
                        <input class="this-field" type="text" placeholder="Masukkan username baru" name="username" maxlength="12" autocomplete="off" required>
                    </div>
                </div>
                <div class="prompt">
                    <p>New Password</p>
                    <div class="prompt-input">
                        <div class="icons">
                            <i class="fa-solid fa-lock-open"></i>
                        </div>
                        <input class="this-field" type="password" placeholder="Masukkan password baru" name="password" minlength="8" autocomplete="off" required>
                    </div>
                </div>
                <button type="submit" name="submit">Edit</button>
                <p>
                    Lakukan pengeditan sesuai kebutuhan pada password akun anda dengan benar untuk menjaga keamanan akun anda tetap terjaga
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