<?php
$DB_HOST="localhost";
$DB_USERNAME="root";
$DB_PASSWORD="";
$DB_DATABASE="db_starbhak";
$DB_PORT='3306';
//buat koneksi
$koneksi = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD,  $DB_DATABASE, $DB_PORT);
//cek koneksi
if($koneksi->connect_error) {
    die('Koneksi Gagal :' .$koneksi->connect_error);
}
?>