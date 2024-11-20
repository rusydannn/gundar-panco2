<?php include 'header.php'; ?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Produk</h6>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Rating (1-5)</label>
                        <input type="number" name="rating" class="form-control" min="1" max="5" required>
                    </div>
                    <div class="form-group">
                        <label>Link Pembelian</label>
                        <input type="url" name="link_pembelian" class="form-control" required>
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
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $rating = $_POST['rating'];
    $link_pembelian = $_POST['link_pembelian'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $folder = "../foto/";

    move_uploaded_file($tmp_foto, $folder . $foto);

    $query = "INSERT INTO shop (nama_produk, deskripsi, rating, link_pembelian, tanggal,foto) 
              VALUES ('$nama_produk', '$deskripsi', '$rating', '$link_pembelian', NOW()), '$foto'";
    $koneksi->query($query) or die(mysqli_error($koneksi));

    echo "<script>alert('Produk berhasil ditambahkan!');</script>";
    echo "<script>location='shopdaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>