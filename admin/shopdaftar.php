<?php include 'header.php'; ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="shoptambah.php" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk</a>
</div>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Produk</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Nama Produk</th>
                                <th>Deskripsi</th>
                                <th>Rating</th>
                                <th>Link Pembelian</th>
                                <th>Tanggal</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $query = $koneksi->query("SELECT * FROM shop ORDER BY idshop DESC");
                            while ($row = $query->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td><?php echo $row['nama_produk']; ?></td>
                                    <td><?php echo substr($row['deskripsi'], 0, 50) . '...'; ?></td>
                                    <td><?php echo $row['rating']; ?>/5</td>
                                    <td><a href="<?php echo $row['link_pembelian']; ?>" target="_blank"><?php echo $row['link_pembelian']; ?></a></td>
                                    <td><?php echo $row['tanggal']; ?></td>
                                    <td><img src="../foto/<?php echo $row['foto']; ?>" width="100px"></td>

                                    <td>
                                        <a href="shopedit.php?id=<?php echo $row['idshop']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="shophapus.php?id=<?php echo $row['idshop']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>