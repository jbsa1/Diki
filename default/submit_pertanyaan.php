<?php
session_start();
include "koneksi.php";

$result = mysqli_query($koneksi, "SELECT id_presentase, presentase FROM presentase");

while ($row = $result->fetch_assoc()) {
    $presentase[] = $row['presentase'];
}
//memasukkan data kedalam post
for ($i = 0; $i < 11; $i++) {
    if (isset($_POST["pertanyaan$i"])) {
        ${"gejala$i"} = $_POST["pertanyaan$i"];
        if (${"gejala$i"} == "True") {
            ${"gejala$i"} = $presentase[$i];
        } elseif (${"gejala$i"} == "False") {
            ${"gejala$i"} = 0;
        }
    }
}

//memasukkan data pertanyaan kedalam array
for ($i = 0; $i < 11; $i++) {
    $gejala_array[$i] = ${"gejala$i"};
}
//menghitung kemungkinan
$average = array_sum($gejala_array) / count($gejala_array);

print_r($gejala_array);
echo '<br>';
echo $average;

//memanggil nama dan umur untuk dimasukkan ke database hasil
$nama = $_SESSION['nama'];
$umur = $_SESSION['umur'];
echo '<br>';

$_SESSION["jawaban"] = $gejala_array;

print_r($_SESSION["jawaban"]);



if ($average >= 50) {
    $_SESSION["hasil_analisis"] = "Positif";
    $sql = "INSERT INTO hasil_analisis(nama, umur, status) VALUES ('$nama', '$umur', 1)";
    if (mysqli_query($koneksi, $sql)) {
        header("location:hasil.php");
    } else {
        echo "datane ga mlebu cok";
    }
} else {
    $_SESSION["hasil_analisis"] = "Negatif";
    $sql = "INSERT INTO hasil_analisis(nama, umur, status) VALUES ('$nama', '$umur', 0)";
    if (mysqli_query($koneksi, $sql)) {
        header("location:hasil.php");
    } else {
        echo "datane ga mlebu cok";
    }
}
