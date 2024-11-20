<?php include 'header.php'; ?>
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>HOT NEWS</h2>
                </div>
            </div>
        </div>
        <div class="row blog-gird">
            <div class="grid-sizer"></div>
            <?php
            $query = "SELECT * FROM `news` WHERE hot_news = 1 ORDER BY idnews DESC LIMIT 3";
            $result = $koneksi->query($query);

            while ($row = $result->fetch_assoc()) {
                $imgWidth = getimagesize("foto/{$row['foto']}")[0];
                $imgHeight = getimagesize("foto/{$row['foto']}")[1];

                $itemClass = ($imgWidth < $imgHeight) ? 'large-item' : 'small-item';
            ?>
                <div class="col-lg-6 col-md-6 grid-item">
                    <div class="blog-item <?php echo $itemClass; ?> set-bg" data-setbg="foto/<?= $row['foto'] ?>">
                        <a href="#" class="blog-text text-dark">
                            <h5 class="text-white bg-dark p-2"><?php echo $row['judul']; ?></h5>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>NEWS</h2>
                </div>
            </div>
        </div>
        <div class="row blog-gird">
            <div class="grid-sizer"></div>
            <?php
            // Query untuk menampilkan berita yang bukan Hot News
            $query = "SELECT * FROM news WHERE hot_news = 0";
            $result = $koneksi->query($query);

            while ($row = $result->fetch_assoc()) {
                // Mendapatkan dimensi gambar
                $imgWidth = getimagesize("foto/{$row['foto']}")[0];
                $imgHeight = getimagesize("foto/{$row['foto']}")[1];

                // Tentukan class gambar berdasarkan ukuran
                $itemClass = ($imgWidth < $imgHeight) ? 'large-item' : 'small-item';
            ?>
                <div class="col-lg-6 col-md-6 grid-item">
                    <div class="blog-item <?php echo $itemClass; ?> set-bg" data-setbg="foto/<?= $row['foto'] ?>">
                        <a href="#" class="blog-text text-dark">
                            <h5 class="text-white bg-dark p-2"><?php echo $row['judul']; ?></h5>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-item set-bg" data-setbg="foto/6.png">

        </div>
        <div class="single-hero-item set-bg" data-setbg="foto/7.png">

        </div>
        <div class="single-hero-item set-bg" data-setbg="foto/8.png">

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>