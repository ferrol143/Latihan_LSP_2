<?php 
    session_start();
    
    require 'functions.php';
    
    if(!$_SESSION['login']){
        header("Location:login.php");
        exit;
    }
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- MY CSS -->
    <link href="style.css" rel="stylesheet">

    <title>Beranda - SMK INFORMATIKA BOGOR</title>
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class = "logo" src = "img/logo.png" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">BERANDA</a>
             <?php if($_SESSION['role'] == 'admin') : ?>
                <a class="nav-link active" href = "admin.php">ADMIN</a>
             <?php endif; ?>
            <a class="nav-link active" href="registrasi_ppdb.php">DAFTAR PPDB</a>
            <?php if($_SESSION['login']) : ?>
                <a class="nav-link active" href = "logout.php">LOGOUT</a>
            <?php else : ?>
                <a class="nav-link active float-end" href = "login.php">LOGIN</a>
            <?php endif; ?>
            
                
            
        </div>
        </div>
    </div>
    </nav>

    <div class = "welcome p-3">
        <div class = "row">
            <div class = "col-lg-6">
                <h1>SELAMAT DATANG DI WEBSITE SEKOLAH KAMI</h1>
                <a href = "#profil" class = "btn btn-primary">Jelajahi</a>
                
            </div>
            
            <div class = "col-lg-6">
                <img src = "img/pesar.jfif" width = "470"class = "float-end"></img>
            </div>
        </div>
        
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#a2d9ff" fill-opacity="1" d="M0,96L30,117.3C60,139,120,181,180,181.3C240,181,300,139,360,128C420,117,480,139,540,133.3C600,128,660,96,720,90.7C780,85,840,107,900,128C960,149,1020,171,1080,165.3C1140,160,1200,128,1260,101.3C1320,75,1380,53,1410,42.7L1440,32L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
                </svg>

    
    <div class = "profil p-3" id = "profil">
        <div class = "row">
            
         <div class = "col-lg-6">
                <img src = "img/profil.jfif" width = "470"class = ""></img>
            </div>
            <div class = "col-lg-6">
                <h1>PROFIL SEKOLAH KAMI</h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
        </div>
    </div>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#a2d9ff" fill-opacity="1" d="M0,96L30,117.3C60,139,120,181,180,181.3C240,181,300,139,360,128C420,117,480,139,540,133.3C600,128,660,96,720,90.7C780,85,840,107,900,128C960,149,1020,171,1080,165.3C1140,160,1200,128,1260,101.3C1320,75,1380,53,1410,42.7L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>
    <div class = "jurusan p-3">
        <div class = "row">
         <h1> JURUSAN SEKOLAH </h1>
         <div class = "col-lg-4">
            <img src = "img/p1.jpg" width = "400" class = ""></img>
            <h1 class = "p1-j" >Teknik Komputer dan Jaringan </h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
         </div>
         
         <div class = "col-lg-4">
            <img src = "img/p2.jpg" width = "400" class = ""></img>
            <h1 class = "p2-j" >Multimedia </h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
         </div>
         
         <div class = "col-lg-4">
            <img src = "img/p3.jpg" width = "400" class = ""></img>
            <h1 class = "p3-j" >Rekayasa Perangkat Lunak </h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
         </div>
        </div>
    </div>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#a2d9ff" fill-opacity="1" d="M0,96L30,117.3C60,139,120,181,180,181.3C240,181,300,139,360,128C420,117,480,139,540,133.3C600,128,660,96,720,90.7C780,85,840,107,900,128C960,149,1020,171,1080,165.3C1140,160,1200,128,1260,101.3C1320,75,1380,53,1410,42.7L1440,32L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
    </svg>
    
    <div class = "footer">
        <p class = "text-center">Copyright @2021 Ferrol Azki Mashudi</p>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

      
    </div>
</html>