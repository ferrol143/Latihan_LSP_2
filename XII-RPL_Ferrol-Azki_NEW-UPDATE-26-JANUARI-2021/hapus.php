<?php
session_start();
    
    require 'functions.php';
    
    if(!$_SESSION['login']){
        header("Location:login.php");
        exit;
    }
    

$id = $_GET['id'];

if(hapus_ppdb($id) > 0){
    echo "
    <script>
        alert('Data berhasil di hapus!!');
        document.location.href = 'admin.php';
    </script>
 ";
}else{
    echo "
    <script>
        alert('Data gagal di hapus!!');
        document.location.href = 'admin.php';
    </script>
 ";
}

?>