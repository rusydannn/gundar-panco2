<?php include 'header.php'; ?>

<?php
$id = $_GET['id'];
$query = $koneksi->query("SELECT * FROM rules WHERE idrules = '$id'");
$data = $query->fetch_assoc();
?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Rules</h6>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" value="<?php echo $data['judul']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea name="isi" class="form-control" rows="5" required><?php echo $data['isi']; ?></textarea>
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

    $query = "UPDATE rules SET judul = '$judul', isi = '$isi' WHERE idrules = '$id'";
    $koneksi->query($query) or die(mysqli_error($koneksi));

    echo "<script>alert('Rules berhasil diperbarui!');</script>";
    echo "<script>location='rulesdaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>