<?php
include "../connect.php";
?>    
    <div class="toggle-dashboard">
        <i class="fa-lg fa-solid fa-bars-staggered"></i>
    </div>
    <div class="profile-bar">
        <i class="fa-3x fa-regular fa-id-badge"></i>
        <h3>Admin</h3>
        <p>Administrator</p>
        <ion-icon name="document-lock-outline"></ion-icon>
        <div class="light bottom-stick"></div>
    </div>
    <div class="bar-box">
        <i class="fa-solid fa-table-cells"></i>
        <p>Dashboard</p>
        <div class="light side-stick"></div>
    </div>
    <div class="sub-bar">
        <div class="sub-box">
        <i class="fa-solid fa-chart-simple"></i>
        <a href="?halaman=dashboard">Statistic</a>
        </div>
        <div class="sub-box">
        <i class="fa-regular fa-comment-dots"></i>
        <a href="?halaman=report">User Report</a>
        </div>
    </div>
    <div class="bar-box">
        <i class="fa-solid fa-folder-open"></i>
        <p>Table</p>
        <div class="light side-stick"></div>
    </div>
    <div class="sub-bar">
        <div class="sub-box">
        <i class="fa-solid fa-users"></i>
        <a href="?halaman=user">User Log</a>
        </div>
        <div class="sub-box">
        <i class="fa-solid fa-id-card"></i>
        <a href="?halaman=regist">Registration</a>
        </div>
        <div class="sub-box">
        <i class="fa-solid fa-cubes"></i>
        <a href="?halaman=dataEkskul">Ekskul Data</a>
        </div>
    </div>
    <div class="bar-box">
        <i class="fa-solid fa-bookmark"></i>
        <p>Content</p>
        <div class="light side-stick"></div>
    </div>
    <div class="sub-bar">
        <div class="sub-box">
        <i class="fa-solid fa-puzzle-piece"></i>
        <a href="?halaman=editEkskul">Edit Content</a>
        </div>
    </div>
    <div class="bar-box">
        <i class="fa-solid fa-image-portrait"></i>
        <p>Account</p>
        <div class="light side-stick"></div>
    </div>
    <div class="sub-bar">
        <div class="sub-box">
        <i class="fa-regular fa-id-badge"></i>
        <a href="?halaman=adminAcc">Add Administrator</a>
        </div>
        <div class="sub-box">
        <i class="fa-solid fa-right-from-bracket"></i>
        <a href="logout.php">Log Out</a>
        </div>
    </div>