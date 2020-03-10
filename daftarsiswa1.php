<?php
$nis = $_POST['Nis'];
$namadepan = $_POST['Namad'];
$namabelakang = $_POST['Namab'];
$tempatl = $_POST['Tempat'];
$tanggal = $_POST['Tanggal'];
$agama = "";
if($_POST['Agama']=="islam"){
$agama = "Islam";
}
else if($_POST['Agama']=="kristen"){
    $agama = "Kristen";
}
else if($_POST['Agama']=="katolik"){
    $agama = "Katolik";
}
else if($_POST['Agama']=="hindu"){
    $agama = "Hindu";
}
else if($_POST['Agama']=="budha"){
    $agama = "Budha";
}

$jeniskelamin = "";
if($_POST['jeniskelamin']=="L"){
    $jeniskelamin = "Laki-laki";
    }
    else if($_POST['jeniskelamin']=="P"){
        $jeniskelamin = "Perempuan";
    }
$email = $_POST['Email'];
$telepon = $_POST['Telepon'];
$ig = $_POST['Instagram'];
$fb = $_POST['Facebook'];
$website = $_POST['Website'];
$alamat= $_POST['Alamat'];
$jurusan = "";
if($_POST['jurusan']=="RPL"){
    $jurusan = "Rekayasa Perangkat Lunak ";
    }
    else if($_POST['jurusan']=="TKJ"){
        $jeniskelamin = "Teknik Komputer dan Jaringan";
    }
$kelas = "";
if($_POST['kelas']=="X"){
    $kelas = "10";
    }
    else if($_POST['kelas']=="XI"){
        $kelas = "11";
    }
    else if($_POST['kelas']=="XII"){
        $kelas = "12";
    }
$username = $_POST['Username'];
$password = $_POST['Password'];
$pesan = $_POST['Pesan'];

echo "NIS             : $nis<br>";
echo "Nama Depan      : $namadepan<br>";
echo "Nama Belakang   : $namabelakang<br>";
echo "Tempat Lahir    : $tempatl<br>";
echo "Tanggal Lahir   : $tanggal<br>";
echo "Agama           : $agama<br>";
echo "Jenis Kelamin   : $jeniskelamin<br>";
echo "Email           : $email<br>";
echo "Telepon         : $telepon<br>";
echo "Instagram       : $ig<br>";
echo "Facebook        : $fb<br>";
echo "Website         : $website<br>";
echo "Alamat          : $alamat<br>";
echo "Jurusan         : $jurusan<br>";
echo "Kelas           : $kelas<br>";
echo "Username        : $username<br>";
echo "Pesan           : $pesan <br>";
 