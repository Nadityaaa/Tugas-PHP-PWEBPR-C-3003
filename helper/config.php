<?php
// require_once __DIR__.'/env.php';
require_once 'env.php';

// $app_name = $_ENV['APP_NAME'];
$url = $_ENV['BASEURL'];
$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

// $url = 'http://localhost/Play Box/';
// $host = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'playbox';

try {
    $koneksi = new mysqli($host,$username,$password,$database);
} catch (\Thorwable $e) {
    echo "error";
}
?>