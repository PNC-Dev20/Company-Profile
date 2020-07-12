<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tgl_meeting = $_POST['tgl_meeting'];
    $tempat = $_POST['tempat'];

    $sql = "INSERT INTO jadwal_meeting (nama, email, tgl_meeting, tempat) VALUE ('$nama', '$email', '$tgl_meeting', '$tempat')";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: index.php?status=sukses');
    } else {
        
        header('Location: index.php?status=gagal');
    }


} else {
    die("Terjadi kesalahan, mohon ulang");
}