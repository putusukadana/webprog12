<?php
    include_once("konfigurasi.php");
    $cnn = mysqli_connect(HOST, USER, PWD, DBNAME) or 
    die ("Tidak Bisa konek si kedatabase");