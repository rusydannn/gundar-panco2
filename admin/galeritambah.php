<?php include 'header.php'; ?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Galeri</h6>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control" required>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    // Upload foto
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $folder_foto = "../foto/";

    move_uploaded_file($tmp_foto, $folder_foto . $foto);

    $query = "INSERT INTO galeri (judul, foto, deskripsi, tanggal) VALUES ('$judul', '$foto', '$deskripsi', NOW())";
    $koneksi->query($query) or die(mysqli_error($koneksi));

    echo "<script>alert('Galeri berhasil ditambahkan!');</script>";
    echo "<script>location='galeridaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>