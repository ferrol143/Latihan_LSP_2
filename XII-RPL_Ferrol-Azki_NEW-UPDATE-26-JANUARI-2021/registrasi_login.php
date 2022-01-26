<?php 
    require 'functions.php';

if(isset($_POST['daftar'])){
   if(registrasi_login($_POST)){
        echo "
         <script>
           alert('Registrasi telah berhasil!!');
           document.location.href = 'login.php';
         </script>
        ";
   }else{
    echo "
         <script>
           alert('Registrasi gagal!!');
         </script>
        ";
   }
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

    <title>Registrasi LOGIN - SMK INFORMATIKA BOGOR</title>
  </head>
  <body>
   <div class = "registrasi-login">
        <div class = "kotak-registrasi-login">
        <h1 class = "mb-3">REGISTRASI LOGIN </h1>
        <form action="" method="post" enctype = "multipart/form-data">
            <div class = "row">
                <div class = "col-lg">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Username</label>
                         <input type="text" class="form-control" name = "username" id="exampleFormControlInput1" placeholder="masukkan username">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Email</label>
                         <input type="text" class="form-control"  name = "email" id="exampleFormControlInput1" placeholder="masukkan email">
                    </div>

                    <div class = "row">
                        <div class = "col-lg-6">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Password</label>
                              <input type="password" class="form-control" name = "password" id="exampleFormControlInput1" placeholder="masukkan password">
                            </div>
                        </div>
                        <div class = "col-lg-6">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Konfirmasi Password</label>
                              <input type="password" class="form-control"  name = "confirm_password" id="exampleFormControlInput1" placeholder="konfirmasi password">
                            </div>
                        </div>
                    </div>    

                </div>
            </div>    

            <a href = "login.php"class="btn btn-danger mb-3">Kembali</a>
            <button type="submit" class="btn btn-primary mb-3" name = "daftar">Daftar</button>
        
        </form>
         </div>
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