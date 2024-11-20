<?php include 'header.php'; ?>

<?php
$id = $_GET['id'];
$query = $koneksi->query("SELECT * FROM tutorial WHERE idtutorial = '$id'");
$data = $query->fetch_assoc();
?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Tutorial</h6>
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
                        <label>URL Video</label>
                        <input type="url" name="url_video" class="form-control" value="<?php echo $data['url_video']; ?>">
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
    $url_video = $_POST['url_video'];

    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $tmp_foto = $_FILES['foto']['tmp_name'];
        $folder = "../foto/";
        move_uploaded_file($tmp_foto, $folder . $foto);
    } else {
        $foto = $data['foto'];
    }

    $query = "UPDATE tutorial SET judul = '$judul', isi = '$isi', foto = '$foto', url_video = '$url_video' WHERE idtutorial = '$id'";
    $koneksi->query($query) or die(mysqli_error($koneksi));

    echo "<script>alert('Tutorial berhasil diperbarui!');</script>";
    echo "<script>location='tutorialdaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>