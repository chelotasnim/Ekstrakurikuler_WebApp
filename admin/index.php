<?php
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location:../userAcc/index.php");
  }
  include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en" translate="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../icons/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
</head>
<body>
  <section class="dashboard">
    <div class="side-bar">
      <?php
        include 'navbar.php';
      ?>
    </div>
    <div class="admin-content">
      <?php
        if(isset($_GET["halaman"])){
          $halaman = $_GET["halaman"];
          switch ($halaman) {
          case 'dashboard':
            include "dashboard.php";
            break;
            
          case 'user':
            include "userlog.php";
            break;

          case 'regist':
            include "registEkskul.php";
            break;

          case 'dataEkskul':
            include "dataEkskul.php";
            break;

          case 'editEkskul':
            include "editEkskul.php";
            break;  
  
          case 'adminAcc':
            include "adminAcc.php";
            break;

          case 'report':
            include "userReport.php";
            break;

          }
        } else{
          include "dashboard.php";
        }
      ?>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
  <script src="script.js"></script>
</body>
</html>