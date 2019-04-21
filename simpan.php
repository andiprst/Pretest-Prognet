<?php

include 'koneksi.php';

if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $sql = "INSERT INTO orang VALUES ('$nama', '$pekerjaan')";
    if(mysqli_query($conn,$sql)){
        echo "Berhasil Memasukkan Data";
    } else {
        echo "Error Memasukkan Data <br/>".mysqli_error($conn);
    }
}