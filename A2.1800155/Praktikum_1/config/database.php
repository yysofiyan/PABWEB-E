<?php

date_default_timezone_set("ASIA/JAKARTA");

$server    = "localhost";
$username  = "id13332093_admin";
$password  = "bd!ZxeWVH{0P|zH$";
$database  = "id13332093_db_siswa";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('Koneksi database gagal : ' . mysqli_connect_error());
}
