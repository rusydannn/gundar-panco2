<?php
include '../koneksi.php';

$id = $_GET['id'];
$koneksi->query("DELETE FROM rules WHERE idrules = '$id'");
echo "<script>alert('Data dihapus!'); window.location='rulesdaftar.php';</script>";
