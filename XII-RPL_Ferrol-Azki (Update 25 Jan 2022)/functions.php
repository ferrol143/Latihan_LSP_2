<?php 
    $conn = mysqli_connect('localhost','root','','db_sekolah');

    /* REGISTRASI LOGIN */

        function registrasi_login($data){
            global $conn;
            
            $username = strtolower(htmlspecialchars($data['username']));
            $email = htmlspecialchars($data['email']);
            $password = mysqli_real_escape_string($conn, htmlspecialchars($data['password']));
            $confirm_password = mysqli_real_escape_string($conn, htmlspecialchars($data['confirm_password']));

            //cek username
            
            $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

            if(mysqli_fetch_assoc($result)){
                echo "
                    <script>
                        alert('Username sudah terdaftar');
                    </script>
                ";

                return false;
            }

            // cek confirm password

            if($confirm_password !== $password ){
                echo "
                    <script>
                        alert('Passwword tidak sesuai!');
                    </script>
                ";
                
                return false;
            }

            // acak password

            $password = password_hash($password, PASSWORD_DEFAULT);


            mysqli_query($conn, "INSERT INTO users VALUES('','$username','$email','$password','user')");

            return mysqli_affected_rows($conn);
        }

    /* END RESITRASI LOGIN */


    /* REGISTRASI PPDB */

    function registrasi_ppdb($data){
        global $conn;
        
        $nama_lengkap = htmlspecialchars($data['nama_lengkap']);
        $tempat = htmlspecialchars($data['tempat']);
        $ttl = htmlspecialchars($data['ttl']);
        $warga_negara = htmlspecialchars($data['warga_negara']);
        $alamat = htmlspecialchars($data['alamat']);
        $email = htmlspecialchars($data['email']);
        $no_tlp = htmlspecialchars($data['no_tlp']);
        $asal_sekolah = htmlspecialchars($data['asal_sekolah']);
        $ayah = htmlspecialchars($data['nama_ayah']);
        $ibu = htmlspecialchars($data['nama_ibu']);
        $penghasilan_orang_tua = htmlspecialchars($data['penghasilan_orang_tua']);
        $foto = upload_img();

        if(!$foto){
            return false;
        }


        mysqli_query($conn, "INSERT INTO peserta_ppdb VALUES('','$nama_lengkap','$tempat','$ttl','$warga_negara', '$alamat', '$email', '$no_tlp', '$asal_sekolah', '$ayah', '$ibu', ' $penghasilan_orang_tua', '$foto' )");

        return mysqli_affected_rows($conn);
    }

    /* END REGISTRASI PPDB */

    /* UPLOAD GAMBAR */

    function upload_img(){
        $namaFile = $_FILES["gambar"]["name"];
        $tempatFile = $_FILES["gambar"]["tmp_name"];
        $error = $_FILES["gambar"]["error"];
        $size = $_FILES["gambar"]["size"];

        //cek gambar di upload / tidak

        if($error === 4){
            echo "
                    <script>
                        alert('Tolong Upload Gambarnya!');
                    </script>
                ";
                return false; 
        }

        //cek ekstensi File
        $ekstensiValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if(!in_array($ekstensiGambar, $ekstensiValid)){
            echo "
                    <script>
                        alert('Ekstensi tidak sesuai!');
                    </script>
                ";
               return false; 
        }


        //upload gambar
        move_uploaded_file($tempatFile,'img/' . $namaFile);

        return $namaFile;
    }

    /* END UPLOAD GAMBAR */
?>