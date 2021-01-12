<!doctype html>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HMIF UNSRI</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
    <!-- cta part start-->
    <section class="cta_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="cta_part_iner">
                        <div class="cta_part_text">
                            <p>Silahkan Download dan Cetak</p>
                            <h1>Formulir Pendaftaran</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta part end-->
    <!-- show form part start -->
    <section class="mb-5">
        <div class="container">
            <?php foreach ($data as $i => $row) {?>
                
            <div class="row">
                <div class="col-md-4">
                    <p>Nama Lengkap</p>
                </div>
                <div class="col-md-8">
                    <p><?php echo $row['nama_lengkap']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>NIM</p>
                </div>
                <div class="col-md-8">
                    <p><?php echo $row['nim']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Angkatan</p>
                </div>
                <div class="col-md-8">
                    <p><?php echo $row['angkatan']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Kelas</p>
                </div>
                <div class="col-md-8">
                    <p><?php echo $row['kelas']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Domisili</p>
                </div>
                <div class="col-md-8">
                    <p><?php echo $row['domisili']; ?></p>
                </div>
            </div><div class="row">
                <div class="col-md-4">
                    <p>Alamat Lengkap</p>
                </div>
                <div class="col-md-8">
                    <p><?php echo $row['alamat']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Lokasi Tes</p>
                </div>
                <div class="col-md-8">
                    <p><?php echo $row['lokasi_tes']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Dinas Pilihan</p>
                </div>
                <div class="col-md-8">
                    <p><?php echo $row['dinas']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Bersedia ditempatkan di dinas manapun</p>
                </div>
                <div class="col-md-8">
                    <p><?php echo $row['non_dinas']; ?></p>
                </div>
            </div><br>
            <?php } ?>
            <center><a class="btn btn-primary" href="pdf/<?php echo $row['nim'];?>">Download dan Cetak Formulir</a></center>
        </div>
    </section>
    <!-- show form part end -->
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url(); ?>assets/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url(); ?>assets/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel2.thumbs.min.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
    <!-- custom js -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body></html>