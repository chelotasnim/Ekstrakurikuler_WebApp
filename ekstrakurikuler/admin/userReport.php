<?php
    include "../connect.php";
    $query = mysqli_query($conn,"SELECT * FROM pesan");
?>
<header class="dashboard-header user-report">
  <?php foreach($query as $a):?>
  <div class="head-container">
    <div class="container-content">
      <h3><?php echo $a['username'];?></h3>
      <p><?php echo $a['perihal'];?></p>
      <a href="../delete/deleteCard.php?id=<?php echo $a['id'];?>">
        <i class="fa-sm fa-solid fa-trash-can"></i>
      </a>
    </div>
    <div class="container-desc">
        <p><?php echo $a['keterangan'];?></p>
    </div>
  </div>
  <?php endforeach;?>
</header>