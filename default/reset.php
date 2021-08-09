<?php

session_start();
unset($_SESSION["nama"]);
unset($_SESSION["umur"]);
unset($_SESSION["jawaban"]);
unset($_SESSION["hasil_analisis"]);

header('location:datahasil.php');
