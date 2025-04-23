<?php
// Nama : Satria Surya Nugraha
// NIM : A12.2023.07043
$host = "localhost";
$user = "root";
$pass = "";
$db = "kampus";

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
