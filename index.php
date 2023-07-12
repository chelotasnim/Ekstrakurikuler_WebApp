<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$_SESSION =[];
session_unset();
session_destroy();
$id = $_GET['id'];
$idUser = $_GET['id_user'];
if($id === null){
    $notUser = true;
}else{
    $userYes = true;
}
    include "connect.php"; 
    $show = mysqli_query($conn,"SELECT * FROM extra");

    $showFilter = mysqli_query($conn,"SELECT DISTINCT kategori FROM extra");
    while($p = mysqli_fetch_assoc($showFilter)){
        $datas[] = $p;
    }
    $result = mysqli_query($conn,"SELECT * FROM extra");
    $showCategory = mysqli_query($conn,"SELECT * FROM category");
    
    $showPeserta = mysqli_query($conn,"SELECT * FROM user_extra");

    if(isset($_POST['submit'])){
        $username = htmlspecialchars($_POST['username']);
        $subjek = htmlspecialchars($_POST['subjek']);
        $keterangan =htmlspecialchars($_POST['keterangan']);

        $query = mysqli_query($conn,"INSERT INTO pesan VALUES(null,'$username','$subjek','$keterangan')");
    }
?>
<!doctype html>
<html lang="en" translate="no">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="bootstrap-4.6.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="icons/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/eksis-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Ekskul Smakensa</title>
  </head>
  <body class="sea">
    <section class="animation-welcome d-flex align-items-center justify-content-center">
        <div class="welcome-container">
            <div class="welcome-title">
                <h1 class="display-4"><span>W</span>elcome`</h1>
            </div>
            <div class="welcome-title dark px-2">
                <h1 class="display-4"><span>W</span>elcome`</h1>
            </div>
        </div>
    </section>
    <div class="scroll-to-top">
        <div class="scroll-box">
            <i class="fa-solid fa-chevron-up"></i>
        </div>
        <div class="scroll-box">
            <p>To Top</p>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand d-flex align-items-center">
            <i class="icons ml-4 mr-2 fa-lg fa-solid fa-football"></i>
            Ekstrakurikuler
        </a>
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#beranda">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#informasi">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aktivitas">Aktivitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <?php if($userYes):?>
                            Logout
                    <?php endif;?>
                    <?php if($notUser):?>
                        Pendaftaran
                    <?php endif;?>


                    </a>
                    <div class="dropdown-menu">
                        <?php if($notUser):?>
                            <a class="dropdown-item" href="userAcc/index.php">Sign Up</a>
                            <a class="dropdown-item" href="userAcc/index.php">Login</a>
                        <?php endif;?>
                        <?php if($userYes):?>
                            <a class="dropdown-item" href="index.php">Logout</a>
                        <?php endif;?>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <p class="nav-link dropdown-toggle mb-0" role="button" data-toggle="dropdown" aria-expanded="false">
                        Tema Halaman
                    </p>
                    <div class="dropdown-menu">
                        <p class="dropdown-item mb-0 light-toggle">Mode Terang</p>
                        <p class="dropdown-item mb-0 dark-toggle">Mode Gelap</p>
                        <div class="dropdown-divider"></div>
                        <div class="sub-theme d-flex justify-content-center">
                            <div class="theme-circle sea-theme"></div>
                            <div class="theme-circle red-moon"></div>
                            <div class="theme-circle red-candy"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div id="beranda" class="jumbotron py-0 px-0 slider-jumbo d-flex align-items-center justify-content-center">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner d-flex align-items-center justify-content-center">
                <div class="carousel-item active">
                    <img src="assets/ekskul.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/sepakBola.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/teater.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <div class="hero-title">
                <h5>Ekstrakurikuler</h5>
                <p>Banyak sekali beragam ekstrakurikuler yang ada disini dan dapat kamu pilih sessuai dengan bakat dan minat mu, ayo bergabung sekarang!</p>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
    <div id="informasi" class="anchor-spacing"></div>
    <div class="section-card d-flex justify-content-center align-items-center flex-column">
        <div class="card-container d-flex justify-content-center align-items-end flex-wrap">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Jumlah Ekskul</h5>
                        <h6 class="card-subtitle mb-2">
                            <?php
                                $query = mysqli_query($conn,"SELECT nama_extra FROM extra ORDER BY nama_extra");
                                $rows = mysqli_num_rows($query);

                                echo $rows;
                            ?>
                            Jenis Ekskul
                        </h6>
                    </div>
                    <p class="card-text">Ada <?php echo $rows;?> jenis Ekstrakurikuler yang tersedia dan anda dapat mendaftar sebagai peserta sekarang juga</p>
                    <a href="#aktivitas" class="card-link">Lihat</a>
                    <a href="userAcc/index.php" class="card-link">Daftar</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Kategori Ekskul</h5>
                        <h6 class="card-subtitle mb-2">
                            <?php
                                $queryCat = mysqli_query($conn,"SELECT DISTINCT category FROM category ORDER BY category");
                                $rowsCat = mysqli_num_rows($queryCat);

                                echo $rowsCat;
                            ?>
                            Kategori
                        </h6>
                    </div>
                    <p class="card-text"><?php echo $rows;?> jenis Ekstrakurikuler yang ada terbagi menjadi <?php echo $rowsCat;?> kategori ekskul yaitu <?php foreach($datas as $b):?>
                        <?php echo $b['kategori'];?>,
                        <?php endforeach;?></p>
                    <a href="#aktivitas" class="card-link">Lihat</a>
                    <a href="userAcc/index.php" class="card-link">Daftar</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Ekskul Populer</h5>
                        <h6 class="card-subtitle mb-2">Pramuka</h6>
                    </div>
                    <p class="card-text">Pramuka merupakan ekstrakurikuler wajib saat ini, ini mungkin dapat menarik anda menjadi peserta pramuka</p>
                    <a href="#aktivitas" class="card-link">Tentang</a>
                    <a href="userAcc/index.php" class="card-link">Daftar</a>
                </div>
            </div>
        </div>
        <div class="card-desc">
            <div class="title d-flex mb-2">
                <i class="mt-1 fa-solid fa-volleyball"></i>
                <h5>Ekskul</h5>
            </div>
            <p>Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan yang dilakukan di luar jam pelajaran yang dilakukan baik di sekolah atau di luar sekolah dengan tujuan untuk mendapatkan tambahan pengetahuan, keterampilan dan wawasan serta membantu membentuk karakter peserta didik sesuai dengan minat dan bakat masing masing peserta ekstrakurikuler atau ekskul.</p>
            <div class="title d-flex mb-2">
                <i class="mt-1 fa-solid fa-layer-group"></i>
                <h5>Kategori</h5>
            </div>
            <p>
                <?php echo $rows;?>
                jenis ekstrakurikuler yang tersedia disini telah dikelompokkan menjadi 
                <?php echo $rowsCat;?>
                kategori dasar yaitu ada ekstrakurikuler yang berdasar organisasi sosial, teknologi, dan olahraga. Pemilihan dengan kategori dapat memudahkan calon peserta ekskul dalam memilih ekskul yang diminati.</p>
            <div class="title d-flex mb-2">
                <i class="mt-1 fa-solid fa-medal"></i>
                <h5>Populer</h5>
            </div>
            <p>Ada satu atau beberapa ekstrakurikuler yang terpopuler, banyak dikenal, dan banyak menarik minat para siswa atau siswi yang sedang mencari ekstrakurikuler. Biasanya karena memang ekstrakurikuler itu memiliki kualitas dan nama yang baik, selai dari kesamaan keinginan atau minat dan bakat calon peserta.</p>
        </div>
    </div>
    <div id="aktivitas" class="anchor-spacing"></div>
    <div class="section-card ekskul-section">
        <nav class="navbar ekskul-nav d-flex mx-auto" style="max-width:max-content">
            <ul>
                <li class="nav-item dropdown ekskul-filter d-flex align-items-center">
                    <i class="fa-xl fa-solid fa-bars-staggered"></i>
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                    Filter Kategori
                    </a>
                    <div class="dropdown-menu">
                        <?php foreach($showCategory as $b):?>
                            <a class="dropdown-item"><?php echo $b['category'];?></a>
                        <?php endforeach;?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item">Semua</a>
                    </div>
                </li>
            </ul>
            <div class="form-inline d-flex flex-nowrap">
                <input class="form-control mr-sm-2 search-box search-card" onkeyup="searchEkskul()" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
                <button class="btn my-2 my-sm-0 search-btn" onclick="searchEkskul()">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div> 
        </nav>
        <div class="card-container d-flex align-items-center justify-content-center flex-wrap">
        <?php if($show) :?>
            <?php foreach($show as $data):?>
            <div id="<?php echo $data['kategori'];?>" class="card ekskul-card" style="width: 18rem;">
                <img src="admin/foto/<?php echo $data['Gambar'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['nama_extra'];?></h5>
                    <p class="card-text"><?php echo $data['deskripsi'];?></p>
                </div>
                <div class="card-body">
                    <p>
                        <?php echo $data['nama_pembina'];?>
                    </p>
                </div>
                <div class="card-body">
                    <a href="#beranda" class="card-link">Beranda</a>
                    <a href="#informasi" class="card-link">Informasi</a>
                </div>
            </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
    <div id="kontak" class="contact-container d-flex align-items-center justify-content-center">
        <div class="jumbotron jumbotron-fluid">
            <form action="" method="POST">
                <div class="form-head">
                    <h5>Hubungi kami</h5>
                </div>
                <div class="prompt-field-input">
                    <div class="prompt">
                        <p>Nama pengirim</p>
                        <select name="username" required>
                            <option value="" selected disabled hidden>Siapa yang mengirim ini?</option>
                            <?php foreach($showPeserta as $peserta):?>
                            <option value="<?php echo $peserta['peserta'];?>"><?php echo $peserta['peserta'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="prompt">
                        <p>Perihal</p>
                        <select name="subjek" required>
                            <option value="" selected disabled hidden>Tentang apa anda menghubungi</option>
                            <option value="Akun dan Registrasi">Akun dan Registrasi</option>
                            <option value="Pendaftaran dan Kepesertaan">Pendaftaran dan Kepesertaan</option>
                            <option value="Masukan lain">Masukan lain</option>
                        </select>
                    </div>        
                </div>
                <div class="prompt report-desc">
                    <div class="prompt">
                        <p>Deskripsi</p>
                        <textarea name="keterangan" placeholder="Masukkan keterangan lengkap tentang apa yang anda kirimkan" minlength="50" maxlength="130" autocomplete="off" required></textarea>
                    </div>    
                </div>  
                <button type="submit" name="submit">
                    <i class="fa-regular fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="about-container d-flex align-items-center justify-content-center">
        <div class="jumbotron jumbotron-fluid d-flex justify-content-center align-items-center flex-wrap">
            <div class="container">
                <div class="map-template">
                    <a href="https://g.page/smkn1bondowoso?share" target="_blank">
                        <img src="assets/map.png">
                    </a>
                </div>
            </div>
            <div class="container">
                <p class="lead">Media Sosial kami</p>
                <ul>
                    <li class="ml-3 about-list d-flex align-items-center">
                        <i class="fa-xl fa-brands fa-instagram"></i>
                        <a class="ml-2" href="https://www.instagram.com/smkn1bws.official/" target="_blank">Instagram SMK Negeri 1 Bondowoso</a>
                    </li>
                    <li class="ml-3 about-list d-flex align-items-center">
                        <i class="fa-xl fa-brands fa-youtube"></i>
                        <a class="ml-2" href="https://www.youtube.com/channel/UCJrp0UxGJWptJOYnmoDUslA/videos" target="_blank">Youtube SMK Negeri 1 Bondowoso</a>
                    </li>
                    <li class="ml-3 about-list d-flex align-items-center">
                        <i class="fa-xl fa-solid fa-globe"></i>
                        <a class="ml-2" href="https://www.smkn1bws.sch.id/" target="_blank">Website SMK Negeri 1 Bondowoso</a>
                    </li>
                    <li class="ml-3 about-list d-flex align-items-center">
                        <i class="fa-xl fa-brands fa-facebook"></i>
                        <a class="ml-2" href="https://m.facebook.com/profile.php?id=1064100136998279" target="_blank">Facebook SMK Negeri 1 Bondowoso</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="light-stick"></div>
    </div>
    <script src="script.js"></script>
  </body>
  <script src="bootstrap-4.6.2-dist/js/jquery.min.js"></script>
  <script src="bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
</html>
