<?php include 'header.php'; ?>

<section class="breadcrumb-section set-bg spad" data-setbg="assets/img/about-bread.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Shop</h2>
                    <div class="breadcrumb-controls">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aboutus-section spad">
    <div class="container">
        <div class="aboutus-page-text">
            <div class="row">
                <div class="col-xl-9 col-lg-10 m-auto">
                    <div class="section-title">
                        <h2 class="text-danger">DISCLAIMER!!!</h2>
                        <p>INI HANYA MEMBERIKAN LINK UNTUK KE TOKO ONLINE BUKAN PEMBELIAN DI WEB INI JADI BIJAKLAH</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                // Query untuk mengambil produk dari tabel shop
                $query = "SELECT * FROM `shop`";
                $result = $koneksi->query($query);

                while ($row = $result->fetch_assoc()) {

                ?>
                    <div class="col-lg-12">
                        <div class="shop-item d-flex">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-center">
                                        <img src="foto/<?= $row['foto'] ?>" alt="<?= $row['nama_produk'] ?>" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-quality">
                                        <h5 class="text-danger"><?= $row['nama_produk'] ?></h5>
                                        <p><?= $row['deskripsi'] ?></p>
                                        <a href="<?= $row['link_pembelian'] ?>" class="btn btn-primary" target="_blank">Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>