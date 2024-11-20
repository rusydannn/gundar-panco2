<?php include 'header.php'; ?>

<?php
$id = $_GET['id'];
$query = $koneksi->query("SELECT * FROM shop WHERE idshop = '$id'");
$data = $query->fetch_assoc();
?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Produk</h6>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" value="<?php echo $data['nama_produk']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="5" required><?php echo $data['deskripsi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Rating (1-5)</label>
                        <input type="number" name="rating" class="form-control" min="1" max="5" value="<?php echo $data['rating']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Link Pembelian</label>
                        <input type="url" name="link_pembelian" class="form-control" value="<?php echo $data['link_pembelian']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Foto</label><br>
                        <img src="../foto/<?php echo $data['foto']; ?>" width="100px"><br><br>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['update'])) {
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $rating = $_POST['rating'];
    $link_pembelian = $_POST['link_pembelian'];
    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $tmp_foto = $_FILES['foto']['tmp_name'];
        $folder = "../foto/";
        move_uploaded_file($tmp_foto, $folder . $foto);
    } else {
        $foto = $data['foto'];
    }
    $query = "UPDATE shop SET nama_produk = '$nama_produk', deskripsi = '$deskripsi', rating = '$rating', link_pembelian = '$link_pembelian' , foto='$foto'
              WHERE idshop = '$id'";
    $koneksi->query($query) or die(mysqli_error($koneksi));

    echo "<script>alert('Produk berhasil diperbarui!');</script>";
    echo "<script>location='shopdaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>