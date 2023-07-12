<?php
    include "../connect.php";
    $id = $_GET['id'];
    $showCategory = mysqli_query($conn,"SELECT * FROM category WHERE id='$id'");
    $result = mysqli_fetch_assoc($showCategory);
    if(isset($_POST['submitEdit'])){
        $editcat = htmlspecialchars($_POST['edit']);
        $update = mysqli_query($conn,"UPDATE category SET category = '$editcat' WHERE id = '$id'");
        header("Location:../admin/index.php?halaman=editEkskul");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/style.css">
    <title>Edit Category</title>
</head>
<body>
    <div class="admin-content single-used">
        <div class="edit-ekskul">
            <header>
                <h5>Edit Category</h5>
            </header>
            <div class="edit-ekskul-content">
                <form action="" method="POST" enctype="multipart/form-data" class="category-form" >
                <div class="search">
                    <input type="text" class="search-box" placeholder="Edit nama Kategori" autocomplete="off" name="edit" required>
                    <button class="submit" name="submitEdit">Edit</button>
                </div>
                </form>
                <div class="user-container">
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><?php echo $result['category'];?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>