<?php include 'header.php'; ?>
<section class="breadcrumb-section set-bg spad" data-setbg="assets/img/about-bread.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Gallery</h2>
                    <div class="breadcrumb-controls">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Gallery</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-section spad">
    <div class="container">
        <div class="row gallery-filter">
            <?php
            $query = "SELECT * FROM galeri";
            $result = $koneksi->query($query);
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="foto/<?= $row['foto'] ?>"" alt=""  class=" img-fluid">
                        <div class=" gi-hover-warp">
                            <div class="gi-hover">
                                <a href="foto/<?= $row['foto'] ?>" class="image-popup"><i class="fa fa-search-plus"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</section>


<?php include 'footer.php'; ?>