<?php

require_once("db.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];
$asal = $_POST["asal"];
$alamat = $_POST["alamat"];


$query = "INSERT INTO mahasiswa (nama, nim, prodi, asal, alamat) VALUES ('" . $nama . "', '" . $nim . "', '" . $prodi . "', '" . $asal . "', '" . $alamat . "')";

mysqli_query($conn, $query);
