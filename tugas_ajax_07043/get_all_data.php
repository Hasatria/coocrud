<?php
// Nama : Satria Surya Nugraha
// NIM : A12.2023.07043
header('Content-Type: application/json');
include 'db.php';

$sql = "SELECT nim, nama, jurusan FROM mahasiswa ORDER BY nim ASC";
$result = $koneksi->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
