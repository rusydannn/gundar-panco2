<?php include 'header.php'; ?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Berita</h6>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea name="isi" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" name="penulis" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Hot News</label>
                        <select type="text" name="hot_news" class="form-control" required>
                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>
                        </select>
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
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi']);
    $penulis = $_POST['penulis'];
    $hot_news = $_POST['hot_news'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $folder = "../foto/";

    move_uploaded_file($tmp_foto, $folder . $foto);

    $query = "INSERT INTO news (judul, isi, foto, penulis, tanggal,hot_news) VALUES ('$judul', '$isi', '$foto', '$penulis', NOW()), '$hot_news'";
    $koneksi->query($query) or die(mysqli_error($koneksi));

    echo "<script>alert('Berita berhasil ditambahkan!');</script>";
    echo "<script>location='newsdaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>