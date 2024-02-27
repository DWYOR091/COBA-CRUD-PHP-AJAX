<?php

include "koneksi.php";
$id = $_POST['id'];
$query = "DELETE FROM users WHERE id='$id'";
$q = mysqli_query($koneksi, $query);
