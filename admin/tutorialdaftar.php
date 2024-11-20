<?php include 'header.php'; ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="tutorialtambah.php" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Tutorial</a>
</div>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Tutorial</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Foto</th>
                                <th>URL Video</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $query = $koneksi->query("SELECT * FROM tutorial ORDER BY idtutorial DESC");
                            while ($row = $query->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td><?php echo $row['judul']; ?></td>
                                    <td><?php echo substr($row['isi'], 0, 50) . '...'; ?></td>
                                    <td><img src="../foto/<?php echo $row['foto']; ?>" width="100px"></td>
                                    <td><a href="<?php echo $row['url_video']; ?>" target="_blank"><?php echo $row['url_video']; ?></a></td>
                                    <td><?php echo $row['tanggal']; ?></td>
                                    <td>
                                        <a href="tutorialedit.php?id=<?php echo $row['idtutorial']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="tutorialhapus.php?id=<?php echo $row['idtutorial']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
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