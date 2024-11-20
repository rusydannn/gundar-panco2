<?php include 'header.php'; ?>
<section class="breadcrumb-section set-bg spad" data-setbg="assets/img/about-bread.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Tutorial</h2>
                    <div class="breadcrumb-controls">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Tutorial</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section spad">
    <div class="container">

        <div class="row blog-gird">
            <div class="grid-sizer"></div>
            <?php
            $query = "SELECT * FROM tutorial";
            $result = $koneksi->query($query);

            while ($row = $result->fetch_assoc()) {

            ?>
                <div class="col-lg-6 col-md-6 grid-item">
                    <div class="blog-item large-item set-bg" data-setbg="foto/<?= $row['foto'] ?>">
                        <a href="<?php echo $row['url_video']; ?>" class="blog-text" target="_blank">
                            <h5 class="text-white bg-dark p-2"><?php echo $row['judul']; ?></h5>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>