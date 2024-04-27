<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "user_db";

$koneksi = new mysqli($host, $username, $password, $database);
if (!$koneksi) {
    echo "koneksi database gagal";
}
?>