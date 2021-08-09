<?php
$a[] = 1;
$a[] = 2;
$x[] = $a[1];
print_r($x);

// for ($a = 1; $a < 11; $a++) {
//     for ($b = 1; $b < 11; $b++){
//         if (isset($_POST["pertanyaan'.$a'"])) {
//             $gejalaxx = $gejala.$a;
//             $gejalaHasil = $gejala_hasil.$a;
//             $gejalaxx = $_POST["pertanyaan'.$a'"];
//             if ($gejalaxx == "True") {
//                 $gejalaHasil.$a = $presentase[10];
//             } elseif ($gejalaxx == "False") {
//                 $gejalaHasil.$a = 0;
//             }
//         }
//     }
// }

memasukkan data kedalam post
if (isset($_POST['pertanyaan1'])) {
    $gejala1 = $_POST['pertanyaan1'];
    if ($gejala1 == "True") {
        $gejala_hasil1 = $presentase[0];
    } elseif ($gejala1 == "False") {
        $gejala_hasil1 = 0;
    }
}

if (isset($_POST['pertanyaan2'])) {
    $gejala2 = $_POST['pertanyaan2'];
    if ($gejala2 == "True") {
        $gejala_hasil2 = $presentase[1];
    } elseif ($gejala2 == "False") {
        $gejala_hasil2 = 0;
    }
}

if (isset($_POST['pertanyaan3'])) {
    $gejala3 = $_POST['pertanyaan3'];
    if ($gejala3 == "True") {
        $gejala_hasil3 = $presentase[2];
    } elseif ($gejala3 == "False") {
        $gejala_hasil3 = 0;
    }
}

if (isset($_POST['pertanyaan4'])) {
    $gejala4 = $_POST['pertanyaan4'];
    if ($gejala4 == "True") {
        $gejala_hasil4 = $presentase[3];
    } elseif ($gejala4 == "False") {
        $gejala_hasil4 = 0;
    }
}

if (isset($_POST['pertanyaan5'])) {
    $gejala5 = $_POST['pertanyaan5'];
    if ($gejala5 == "True") {
        $gejala_hasil5 = $presentase[4];
    } elseif ($gejala5 == "False") {
        $gejala_hasil5 = 0;
    }
}

if (isset($_POST['pertanyaan6'])) {
    $gejala6 = $_POST['pertanyaan6'];
    if ($gejala6 == "True") {
        $gejala_hasil6 = $presentase[5];
    } elseif ($gejala6 == "False") {
        $gejala_hasil6 = 0;
    }
}

if (isset($_POST['pertanyaan7'])) {
    $gejala7 = $_POST['pertanyaan7'];
    if ($gejala7 == "True") {
        $gejala_hasil7 = $presentase[6];
    } elseif ($gejala7 == "False") {
        $gejala_hasil7 = 0;
    }
}

if (isset($_POST['pertanyaan8'])) {
    $gejala8 = $_POST['pertanyaan8'];
    if ($gejala8 == "True") {
        $gejala_hasil8 = $presentase[7];
    } elseif ($gejala8 == "False") {
        $gejala_hasil8 = 0;
    }
}

if (isset($_POST['pertanyaan9'])) {
    $gejala9 = $_POST['pertanyaan9'];
    if ($gejala9 == "True") {
        $gejala_hasil9 = $presentase[8];
    } elseif ($gejala9 == "False") {
        $gejala_hasil9 = 0;
    }
}

if (isset($_POST['pertanyaan10'])) {
    $gejala10 = $_POST['pertanyaan10'];
    if ($gejala10 == "True") {
        $gejala_hasil10 = $presentase[9];
    } elseif ($gejala10 == "False") {
        $gejala_hasil10 = 0;
    }
}

if (isset($_POST['pertanyaan11'])) {
    $gejala11 = $_POST['pertanyaan11'];
    if ($gejala11 == "True") {
        $gejala_hasil11 = $presentase[10];
    } elseif ($gejala11 == "False") {
        $gejala_hasil11 = 0;
    }
}

$ini = "$";
$itu = "gejala";
$gejala = $ini . $itu;

$gejalaHasil = "";

for ($a = 1; $a < 11; $a++) {
    if (isset($_POST["pertanyaan$a"])) {
        $gejalaxx = $gejala . $a;
        $gejalaxx = $_POST["pertanyaan$a"];
        if ($gejalaxx == "True") {
            $gejalaHasil[] = $presentase[1];
        } elseif ($gejalaxx == "False") {
            $gejalaHasil[] = 0;
        }
    }
}

$gejala_array = [$gejala1, $gejala2, $gejala3, $gejala4, $gejala5, $gejala6, $gejala7, $gejala8, $gejala9, $gejala10, $gejala11];


if($_SESSION["hasil_analisis"] == "Positif"){
    echo $info[0];
}else{
    echo $info[1];
}