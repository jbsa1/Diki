<?php
session_start();
include "koneksi.php";

$nama  = $_POST['nama'];
$umur  = $_POST['umur'];

$_SESSION['nama'] = $nama;
$_SESSION['umur'] = $umur;

$sql  = "INSERT INTO data_diri (nama, umur) VALUES ('$nama', '$umur')";
if (mysqli_query($koneksi, $sql)) {
    header("location:pertanyaan.php");
}
