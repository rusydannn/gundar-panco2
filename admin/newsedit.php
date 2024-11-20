<?php include 'header.php'; ?>

<?php
$id = $_GET['id'];
$query = $koneksi->query("SELECT * FROM news WHERE idnews = '$id'");
$data = $query->fetch_assoc();
?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Berita</h6>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" value="<?php echo $data['judul']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea name="isi" class="form-control" rows="5" required><?php echo $data['isi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto</label><br>
                        <img src="../foto/<?php echo $data['foto']; ?>" width="100px"><br><br>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" name="penulis" class="form-control" value="<?php echo $data['penulis']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Hot News</label>
                        <select type="text" name="hot_news" class="form-control" required>
                            <option value="0" <?= $data['hot_news'] == 0 ? "selected" : '' ?>>Tidak</option>
                            <option value="1" <?= $data['hot_news'] == 1 ? "selected" : '' ?>>Ya</option>
                        </select>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['update'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $penulis = $_POST['penulis'];
    $hot_news = $_POST['hot_news'];

    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $tmp_foto = $_FILES['foto']['tmp_name'];
        $folder = "../foto/";
        move_uploaded_file($tmp_foto, $folder . $foto);
    } else {
        $foto = $data['foto'];
    }

    $query = "UPDATE news SET judul = '$judul', isi = '$isi', foto = '$foto', penulis = '$penulis' , hot_news = '$hot_news' WHERE idnews = '$id'";
    $koneksi->query($query) or die(mysqli_error($koneksi));

    echo "<script>alert('Berita berhasil diperbarui!');</script>";
    echo "<script>location='newsdaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>