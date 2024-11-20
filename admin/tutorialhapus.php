<?php
include '../koneksi.php';

$id = $_GET['id'];
$koneksi->query("DELETE FROM tutorial WHERE idtutorial = '$id'");
echo "<script>alert('Data dihapus!'); window.location='tutorialdaftar.php';</script>";
