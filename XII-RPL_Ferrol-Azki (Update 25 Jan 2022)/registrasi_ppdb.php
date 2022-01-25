<?php
  require 'functions.php';

  if(isset($_POST['kirim'])){
    if(registrasi_ppdb($_POST) > 0 ){
      
      echo "
        <script>
            alert('Data berhasil di tambahkan!!');
            document.location.href = 'index.php';
        </script>
     ";
    }else{
      echo "
      <script>
          alert('Data gagal di tambahkan!!');
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

    <title>Registrasi PPDB - SMK INFORMATIKA BOGOR</title>
  </head>
  <body>
   <div class = "ppdb">
        <div class = "kotak-ppdb">
        <h1 class = "mb-3">REGISTRASI PPDB </h1>
        <form action="" method="post" enctype = "multipart/form-data">
            <div class = "row">
                <div class = "col-lg">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                         <input type="text" class="form-control" name = "nama_lengkap" id="exampleFormControlInput1" placeholder="masukkan nama lengkap">
                    </div>

                    <div class = "row">
                        <div class = "col-lg-4">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tempat</label>
                              <input type="text" class="form-control" name = "tempat" id="exampleFormControlInput1" placeholder="masukkan asal tempat lahir">
                            </div>
                        </div>
                        <div class = "col-lg-8">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                              <input type="date" class="form-control" name = "ttl" id="exampleFormControlInput1" placeholder="masukkan tanggal lahir">
                            </div>
                        </div>
                    </div>    

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Warga Negara</label>
                         <input type="text" class="form-control" name = "warga_negara" id="exampleFormControlInput1" placeholder="masukkan warga negara">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                         <input type="text" class="form-control" name = "alamat" id="exampleFormControlInput1" placeholder="masukkan alamat">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Email</label>
                         <input type="text" class="form-control" name = "email" id="exampleFormControlInput1" placeholder="masukkan email">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                         <input type="text" class="form-control" name = "no_tlp" id="exampleFormControlInput1" placeholder="masukkan nomor telepon">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
                         <input type="text" class="form-control" name = "asal_sekolah" id="exampleFormControlInput1" placeholder="masukkan asal sekolah">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Nama Ayah</label>
                         <input type="text" class="form-control" name = "nama_ayah" id="exampleFormControlInput1" placeholder="masukkan nama ayah">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Nama Ibu</label>
                         <input type="text" class="form-control" name = "nama_ibu" id="exampleFormControlInput1" placeholder="masukkan nama ibu">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Penghasilan Orang Tua</label>
                         <input type="text" class="form-control" name = "penghasilan_orang_tua" id="exampleFormControlInput1" placeholder="masukkan penghasilan orang tua">
                    </div>

                    <div class="mb-3">
                      <label for="formFile" class="form-label">Foto</label>
                      <input class="form-control" type="file" id="formFile" name = "gambar">
                    </div>

                </div>
            </div>    

            <a href = "index.php"class="btn btn-danger mb-3">Kembali</a>
            <button type="submit" class="btn btn-primary mb-3" name = "kirim">Kirim</button>
        
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