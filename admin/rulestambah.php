<?php include 'header.php'; ?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Rules</h6>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea name="isi" class="form-control" rows="5" required></textarea>
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

    $query = "INSERT INTO rules (judul, isi, tanggal) VALUES ('$judul', '$isi', NOW())";
    $koneksi->query($query) or die(mysqli_error($koneksi));

    echo "<script>alert('Rules berhasil ditambahkan!');</script>";
    echo "<script>location='rulesdaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>