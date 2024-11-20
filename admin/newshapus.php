<?php
include '../koneksi.php';

$id = $_GET['id'];
$koneksi->query("DELETE FROM news WHERE idnews = '$id'");
echo "<script>alert('Data dihapus!'); window.location='newsdaftar.php';</script>";
