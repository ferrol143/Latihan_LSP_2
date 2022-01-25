<?php
    require 'functions.php';

    $p_ppdb = read("SELECT * FROM peserta_ppdb");

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
   
    <nav class="navbar navbar-expand-lg navbar-light position-static">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class = "logo" src = "img/logo.png" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
            <a class="nav-link active" href="profil-sekolah.php">PROFIL</a>
            <a class="nav-link active" href="registrasi_ppdb.php">DAFTAR PPDB</a>
            <a class="nav-link active" href = "login.php">LOGIN</a>
        </div>
        </div>
    </div>
    </nav>

    <div class = "datas">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Tempat</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Warga Negara</th>
      <th scope="col">Alamat</th>
      <th scope="col">Email</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Asal Sekolah</th>
      <th scope="col">Ayah</th>
      <th scope="col">Ibu</th>
      <th scope="col">Penghasilan Orang tua</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $i = 1; ?>
      <?php foreach($p_ppdb as $p) : ?>
    <tr>
      <th scope="row"><?= $i++ ?></th>
      <td><img src="img/<?= $p['foto'] ?>" width = "200px" alt=""></td>
      <td><?= $p['nama_lengkap'] ?></td>
      <td><?= $p['tempat'] ?></td>
      <td><?= $p['tanggal_lahir'] ?></td>
      <td><?= $p['warga_negara'] ?> </td>
      <td><?= $p['alamat'] ?></td>
      <td><?= $p['email'] ?></td>
      <td><?= $p['no_tlp'] ?></td>
      <td><?= $p['asal_sekolah'] ?></td>
      <td><?= $p['ayah'] ?></td>
      <td><?= $p['ibu'] ?></td>
      <td><?= $p['penghasilan_orangtua'] ?></td>
      <td>
          <a href = "ubah.php?id=<?= $p['id'] ?>" class = "btn btn-primary">Ubah</a>
          <a href = "hapus.php?id=<?= $p['id'] ?>" class = "btn btn-danger"> Hapus </a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
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