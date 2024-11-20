<?php include 'header.php'; ?>
<section class="breadcrumb-section set-bg spad" data-setbg="assets/img/about-bread.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Rules</h2>
                    <div class="breadcrumb-controls">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Rules</span>
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
                        <h2>Aturan Panco Berdasarkan World Armwrestling Federation</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $query = "SELECT * FROM `rules`";
                $result = $koneksi->query($query);

                while ($row = $result->fetch_assoc()) {
               
                ?>
                    <div class="col-lg-12">
                        <div class="about-quality">
                            <h4><?= $row['judul'] ?></h4>
                            <p><?= $row['isi'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>