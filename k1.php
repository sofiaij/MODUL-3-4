<?php
    $jari = $_POST["jari2"];
    $sisi = $_POST["sisi"];
    $tinggi = $_POST["tinggi"];
	$phi = 22/7; 

    if ($_POST["submit"] == "Hitung volume"){
	$hasil = 1/3 * $phi * $jari* $jari* $tinggi ;
		echo"Rumus Volume =  1/3 . π. r x r x t .<br>";
        echo"Jari jari  = $jari .<br>" ;
        echo"sisii = $sisi .<br>" ;
        echo"tinggii = $tinggi.<br>" ;
		echo "Volume Kerucut : 1/3 . $phi . $jari . $jari . $tinggi = $hasil ";    
	}
	else if($_POST["submit"] == "Hitung luas permukaan"){
        $has = $sisi + $jari;
		$hasil =   $phi * $jari * $has ;
		echo "Rumus luas permukaan  Kerucut = π x r x (r + s) .<br>";
        echo"jari2 = $jari .<br>" ;
        echo"sisii = $sisi .<br>" ;
        echo"tinggii = $tinggi.<br>" ;
		echo "Luas Permukaan Bola : $phi . $jari . ($jari + $s) = $hasil";
	}
?>