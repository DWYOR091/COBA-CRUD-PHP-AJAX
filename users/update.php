<?php
include "koneksi.php";
$nm = $_POST['namaEdit'];
$no = $_POST['notelpEdit'];
$alamat = $_POST['alamatEdit'];
$id = $_POST['idEdit'];
$query = "UPDATE users SET nama='$nm',no_telp='$no',alamat='$alamat' WHERE id='$id'";
mysqli_query($koneksi, $query);
