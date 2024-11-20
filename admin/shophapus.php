<?php
include '../koneksi.php';

$id = $_GET['id'];
$koneksi->query("DELETE FROM shop WHERE idshop = '$id'");
echo "<script>alert('Data dihapus!'); window.location='shopdaftar.php';</script>";
