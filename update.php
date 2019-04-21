<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'];
$sql = "UPDATE orang SET nama='$nama', pekerjaan='$pekerjaan' WHERE nama='".$_GET['nama']."'";
$result = mysqli_query($conn, $sql);
