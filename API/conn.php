<?php

    $_SERVER = "localhost";
    $_USER = "221911079";
    $_PASSWORD = "4e6942d9";
    $_DATABASENAME = "db221911079";

    $conn = mysqli_connect($_SERVER,$_USER,$_PASSWORD,$_DATABASENAME);
    if (!$conn) {
        die("Koneksi tidak berhasil");
    }

?>