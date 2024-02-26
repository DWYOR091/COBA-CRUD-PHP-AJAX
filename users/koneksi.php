<?php
$db = "user";
$host = "localhost";
$username = "root";
$pass = "";
$koneksi = mysqli_connect($host, $username, $pass, $db);
if ($koneksi) {
    echo "oke gas";
} else {
    echo "gagal";
}
