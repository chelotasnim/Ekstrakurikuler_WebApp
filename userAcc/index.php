<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    if(isset($_SESSION['login'])){
        header("Location: ../admin/index.php");
    }

    include "../connect.php";

    if(isset($_POST['regist'])){
        $username = htmlspecialchars($_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $insert = mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password','user')");
    }

    if(isset($_POST['login'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        $data = mysqli_fetch_assoc($result);

        if($username == $data['username']) {
            if(password_verify($password,$data['password'])){
                $_SESSION["login"] = true;
                if($data['role'] == 'admin'){
                    header("Location: ../admin/index.php");
                } else if($data['role'] == 'user'){
                    $id = $data['id'];
                    header("Location: ../regist/index.php?id=$id&id_user=$id");
                }else{
                    $error = true;
                }
            } else{
                $error = true;
            }
         } else{
            $error = true;
        }
    }

?>
<!DOCTYPE html>
<html lang="en" translate="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap-4.6.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../icons/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Register Account</title>
</head>
<body>
    <section class="animation-welcome d-flex align-items-center justify-content-center">
        <div class="welcome-container">
            <div class="welcome-title">
                <h1 class="display-4"><span>S</span>ignIn`</h1>
            </div>
            <div class="welcome-title dark px-2">
                <h1 class="display-4"><span>S</span>ignIn`</h1>
            </div>
        </div>
    </section>
    <section class="page">
        <div class="container-page">
            <div class="left box active">
                <div class="sub-page form-register">
                    <form action="" method= "POST">
                        <h5>Sign Up</h5>
                        <div class="prompt">
                            <div class="prompt-row">
                                <p>Username</p>
                                <div class="prompt-field">
                                    <div class="icon">
                                        <i class="fa-lg fa-regular fa-user"></i>
                                    </div>
                                    <input type="text" placeholder="Maks 12 Karakter" name="username" autocomplete="off" maxlength="12" required>
                                    <div class="input-scanner"></div>
                                </div>
                            </div>
                            <div class="prompt-row">
                                <p>Password</p>
                                <div class="prompt-field">
                                    <div class="icon">
                                        <i class="fa-solid fa-unlock-keyhole"></i>
                                    </div>
                                    <input type="password" placeholder="Minimal 8 Karakter" name="password" autocomplete="off" minlength="8" required>
                                    <div class="input-scanner"></div>
                                </div>
                            </div>
                        </div>
                        <button class="regist submit" name="regist">Sign Up</button>
                        <div class="login switch">Login</div>
                    </form>
                </div>
                <div class="sub-page image">
                    <h3>
                        <span>Login,</span>
                        <br>
                        Aktif Sekarang!
                    </h3>
                </div>
            </div>
            <div class="right box">
                <div class="sub-page form-login">
                    <form action="" method="POST">
                        <h5>Login</h5>
                        <div class="prompt">
                            <div class="prompt-row">
                                <p>Username</p>
                                <div class="prompt-field">
                                    <div class="icon">
                                        <i class="fa-lg fa-regular fa-user"></i>
                                    </div>
                                    <input style="<?php 
                                        if(isset($error)){
                                            echo "border-bottom: 2px solid rgb(255, 0, 0)";
                                        }
                                    ?>" type="text" placeholder="<?php 
                                        if(isset($error)){
                                            echo "User atau password salah";
                                        } else {
                                            echo "Maks 12 Karakter";
                                        }
                                    ?>" name="username" autocomplete="off" maxlength="12" required>
                                    <div class="input-scanner"></div>
                                </div>
                            </div>
                            <div class="prompt-row">
                                <p>Password</p>
                                <div class="prompt-field">
                                    <div class="icon">
                                        <i class="fa-solid fa-unlock-keyhole"></i>
                                    </div>
                                    <input style="<?php 
                                        if(isset($error)){
                                            echo "border-bottom: 2px solid rgb(255, 0, 0)";
                                        }
                                    ?>"type="password" placeholder="<?php 
                                        if(isset($error)){
                                            echo "User atau password salah";
                                        } else {
                                            echo "Minimal 8 Karakter";
                                        }
                                    ?>" name="password" autocomplete="off" minlength="8" required>
                                    <div class="input-scanner"></div>
                                </div>
                            </div>
                        </div>
                        <button class="login submit" name="login">Login</button>
                        <div class="regist switch">Sign Up</div>
                    </form>
                </div>
                <div class="sub-page image">
                    <h3>
                        <span>Daftar,</span>
                        <br>
                        Gabung Sekarang!
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
<script src="../bootstrap-4.6.2-dist/js/jquery.min.js"></script>
<script src="../bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
</html>