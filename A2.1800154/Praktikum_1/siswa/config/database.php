<?php

date_default_timezone_set("ASIA/JAKARTA");

$server    = "localhost";
$username  = "id13235730_admin";
$password  = "hEt7t4Y&L44>%Knq";
$database  = "id13235730_db_sekolah";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('Koneksi database gagal : ' . mysqli_connect_error());
}
