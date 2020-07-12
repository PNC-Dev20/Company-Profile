<?php

$server = "localhost";
$user = "admin";
$password = "php123";
$nama_database = "db_meeting";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>