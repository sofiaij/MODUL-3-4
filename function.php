<?php
function do_login($username, $password){

    //cek kondisi jika username dan password salah
    if($username != "admin" || $password != "admin"){
        header("location:index.php?error=wrong");
    }
    //cek kondisi jika username dan password benar
    if($username == "sofiajauzaa" && $_POST["password"] == "sfjzaa"){
        $_SESSION["user"] = $username;
        $_SESSIOn["pass"] = $password;

        header("location:beranda.php");
    }
}

function check_login(){
    //cek kondisi login session
    if(!isset($_SESSION["user"])){
        header("location:inde.php");
    }
}
?>