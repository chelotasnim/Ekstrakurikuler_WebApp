<?php
include "../connect.php";
if(isset($_POST['submit'])){
  $usernameAdmin = htmlspecialchars($_POST['usernameAdmin']);
  $passswordAdmin = mysqli_real_escape_string($conn,$_POST['passwordAdmin']);
  $passswordAdmin=password_hash($passswordAdmin, PASSWORD_DEFAULT);

  $insert = mysqli_query($conn,"INSERT INTO user VALUES(null,'$usernameAdmin','$passswordAdmin','admin')");
}

$showAdmin = mysqli_query($conn,"SELECT * FROM user WHERE role = 'admin'");
?>

      <div class="admin-acc-components">
        <div class="admin-acc-card regist-admin">
          <div class="acc-logo">
            <i class="fa-5x fa-regular fa-id-badge" style="color:rgb(255,255,255)"></i>
          </div>
          <div class="acc-form">
            <form action="" method="POST">
              <div class="prompt">
                <p>New Admin</p>
                <input type="text" name="usernameAdmin" autocomplete="off" required>
              </div>
              <div class="prompt">
                <p>Password</p>
                <input type="password" name="passwordAdmin" autocomplete="off" required>
              </div>
              <button type="submit" name="submit">Regist</button>
            </form>
          </div>
        </div>
        <?php if($showAdmin):?>
          <?php foreach($showAdmin as $a):?>
              <div class="admin-acc-card">
                <div class="acc-logo">
                  <i class="fa-4x fa-regular fa-id-badge" style="color:rgb(255,255,255)"></i>
                </div>
                <div class="acc-form">
                  <form action="">
                    <div class="prompt">
                      <p>Admin</p>
                      <input type="text" value="<?php echo $a['username'];?>" readonly>
                    </div>
                    <div class="prompt">
                      <p>Role</p>
                      <input type="text" value="<?php echo $a['role'];?>" readonly>
                    </div>
                    <a href="deleteAdmin.php?id=<?php echo $a['id'];?>">Delete</a>
                  </form>
                </div>
              </div>
          <?php endforeach;?>
        <?php endif;?>
      </div>