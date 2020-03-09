<?php
$jari = $_POST["Jari-jari"];
$sisi = $_POST["Sisi"];
$tinggi = $_POST["Tinggi"];

 if($_POST["submit"] == "Luas Permukaan"){
    $ha = $jari + $tinggi ;
    $hasil  = 22/7 . $jari . $ha;
    echo " 22/7 . $jari . ($jari + $tinggi) = $hasil";
}
else if($_POST["submit"] == "Volume"){
    $hasil = 1/3 . 22/7 . $jari . $jari . $tinggi ;
    echo "1/3 . 22/7 .  $jari. $jari . $tinggi = $hasil";
    ?>