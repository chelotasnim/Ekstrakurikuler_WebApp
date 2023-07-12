<?php
  include "../connect.php";
  $queryExtra = mysqli_query($conn ,"SELECT * FROM extra");
?>
<div class="dashboard-components">
<header class="dashboard-header">
  <div class="head-container">
    <div class="container-content">
      <h3>Ekskul</h3>
      <p>
      <?php
        $query = mysqli_query($conn,"SELECT nama_extra FROM extra ORDER BY nama_extra");
        $rows = mysqli_num_rows($query);

        echo $rows;
      ?>
      Jumlah Ekskul
      </p>
      <div class="logo">
        <i class="fa-6x fa-solid fa-basketball"></i>
      </div>
    </div>
  </div>
  <div class="head-container">
    <div class="container-content">
      <h3>Peserta</h3>
      <p>
      <?php
        $query = mysqli_query($conn,"SELECT peserta FROM user_extra ORDER BY peserta");
        $rows = mysqli_num_rows($query);

        echo $rows;
      ?>
      Orang
      </p>
      <div class="logo">
        <i class="fa-6x fa-solid fa-users"></i>
      </div>
    </div>
  </div>
  <div class="head-container">
    <div class="container-content">
      <h3>Pembina</h3>
      <p>
      <?php
        $query = mysqli_query($conn,"SELECT DISTINCT nama_pembina FROM extra ORDER BY nama_pembina");
        $rows = mysqli_num_rows($query);

        echo $rows;
      ?>
      Orang
      </p>
      <div class="logo">
        <i class="fa-6x fa-solid fa-ribbon"></i>
      </div>
    </div>
  </div>
</header>
<div class="dashboard-statistic">
  <div class="member-statistic">
    <header>
      <h5>Statistik jumlah peserta</h5>
    </header>
    <div class="member-statistic-chart">
      <div class="canvas-container">
        <canvas id="chart-ekskul" height="300px"></canvas>
      </div>
    </div>
  </div>
  <div class="popular-ekskul">
    <div class="desc">
      <?php foreach($queryExtra as $a):?>
      <h5><?php echo $a['nama_extra'];?></h5>
      <p>
        <?php
        $extra = $a['nama_extra'];
        $queryEkskul1 = mysqli_query($conn,"SELECT id_extra1 FROM user_extra WHERE id_extra1 = '$extra'");
        $queryEkskul2 = mysqli_query($conn,"SELECT id_extra2 FROM user_extra WHERE id_extra2 = '$extra'");
        $rowsEkskul1 = mysqli_num_rows($queryEkskul1);
        $rowsEkskul2 = mysqli_num_rows($queryEkskul2);

        echo $rowsEkskul1 + $rowsEkskul2;
      ?>
      </p>
        <?php endforeach;?>
  </div>
</div>
</div>
