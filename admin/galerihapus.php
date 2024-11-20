<?php
include '../koneksi.php';

$id = $_GET['id'];
$koneksi->query("DELETE FROM hapus WHERE idhapus = '$id'");
echo "<script>alert('Data dihapus!'); window.location='hapusdaftar.php';</script>";
