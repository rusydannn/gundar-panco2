<?php include 'header.php'; ?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Tutorial</h6>
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
                        <label>URL Video</label>
                        <input type="url" name="url_video" class="form-control">
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
    $url_video = $_POST['url_video'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $folder = "../foto/";

    move_uploaded_file($tmp_foto, $folder . $foto);

    $query = "INSERT INTO tutorial (judul, isi, foto, url_video, tanggal) VALUES ('$judul', '$isi', '$foto', '$url_video', NOW())";
    $koneksi->query($query) or die(mysqli_error($koneksi));

    echo "<script>alert('Tutorial berhasil ditambahkan!');</script>";
    echo "<script>location='tutorialdaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>