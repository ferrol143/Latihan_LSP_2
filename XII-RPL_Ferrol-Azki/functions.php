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



    /* END REGISTRASI PPDB */
?>