<?php
include "koneksi.php";
$id = $_POST['id'];
$nm = $_POST['nama'];
$no = $_POST['notelp'];
$alamat = $_POST['alamat'];
$query = "INSERT INTO users (id,nama,no_telp,alamat) VALUES ('$id','$nm','$no','$alamat')";
$data = mysqli_query($koneksi, $query);
