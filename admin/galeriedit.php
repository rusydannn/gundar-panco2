<?php include 'header.php'; ?>

<?php
$id = $_GET['id'];
$query = $koneksi->query("SELECT * FROM galeri WHERE idgaleri = '$id'");
$data = $query->fetch_assoc();
?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Galeri</h6>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" value="<?php echo $data['judul']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="5" required><?php echo $data['deskripsi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control">
                        <p>Foto saat ini:</p>
                        <img src="../foto/<?php echo $data['foto']; ?>" width="100px">
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
    $deskripsi = $_POST['deskripsi'];

    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $tmp_foto = $_FILES['foto']['tmp_name'];
        $folder_foto = "../foto/";

        move_uploaded_file($tmp_foto, $folder_foto . $foto);

        $query = "UPDATE galeri SET judul = '$judul', foto = '$foto', deskripsi = '$deskripsi' WHERE idgaleri = '$id'";
    } else {
        $query = "UPDATE galeri SET judul = '$judul', deskripsi = '$deskripsi' WHERE idgaleri = '$id'";
    }

    $koneksi->query($query) or die(mysqli_error($koneksi));

    echo "<script>alert('Galeri berhasil diperbarui!');</script>";
    echo "<script>location='galeridaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>