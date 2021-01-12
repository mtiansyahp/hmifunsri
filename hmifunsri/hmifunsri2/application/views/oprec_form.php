<!doctype html>
<html lang="en">

<head>
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
    <!-- banner part start-->
    <section class="banner_part pb-5">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-md-6">
                    <div class="banner_text">
                        <div class="banner_text_iner text-center">
                            <h2>FORM<span>OPREC</span> </h2>
                            <H1>HMIF</H1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <form action="send_data" method="POST">
                        <div class="form-group">
                            <label for="name1">Nama</label>
                            <input type="text" name="name" class="form-control" id="name1" placeholder="Masukkan nama anda">        
                        </div>
                        <div class="form-group">
                            <label for="nim1">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim1" placeholder="Masukkan NIM anda">
                        </div>
                        <div class="form-group">
                                <label for="inputKelas">Kelas</label>
                                <select name="kelas" id="inputKelas" class="form-control">
                                    <option selected>Pilih..</option>
                                    <option value="TI 2 REG A">TI 2 REG A</option>
                                    <option value="TI 2 REG B">TI 2 REG B</option>
                                    <option value="TI 2 REG C">TI 2 REG C</option>
                                    <option value="TI 2 BIL A">TI 2 BIL A</option>
                                    <option value="TI 2 BIL B">TI 2 BIL B</option>
                                    <option value="TI 4 REG A">TI 4 REG A</option>
                                    <option value="TI 4 REG B">TI 4 REG B</option>
                                    <option value="TI 4 REG C">TI 4 REG C</option>
                                    <option value="TI 4 BIL A">TI 4 BIL A</option>
                                    <option value="TI 4 BIL B">TI 4 BIL B</option>
                                    <option value="TI 4 BIL C">TI 4 BIL C</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputDinas">Dinas</label>
                                <select name="dinas" id="inputDinas" class="form-control">
                                    <option selected>Dinas yang dipilih...</option>
                                    <option value="Administrasi">Administrasi</option>
                                    <option value="Administrasi">Administrasi</option>
                                    <option value="Akademik">Akademik</option>
                                    <option value="Danus">Danus</option>
                                    <option value="Humas">Humas</option>
                                    <option value="Infokom">Infokom</option>
                                    <option value="Kastrad">Kastrad</option>
                                    <option value="Kestari">Kestari</option>
                                    <option value="Multimedia">Multimedia</option>
                                    <option value="Olahraga">Olahraga</option>
                                    <option value="Perbendaharaan">Perbendaharaan</option>
                                    <option value="PIP">PIP</option>
                                    <option value="PMB">PMB</option>
                                    <option value="Polpro">Polpro</option>
                                    <option value="PSDM">PSDM</option>
                                    <option value="PTI">PTI</option>
                                    <option value="Seni">Seni</option>
                                    <option value="Sosial">Sosial</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Domisili</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="domisili" id="inputDomisili1" value="Palembang" checked>
                                    <label class="form-check-label" for="inputDomisili1">Palembang</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="domisili" id="inputDomisili2" value="Indralaya">
                                    <label class="form-check-label" for="inputDomisili2">Indralaya</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat1">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat1" placeholder="Alamat">        
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jenisKelamin" id="inputJK1" value="Laki-laki" checked>
                                    <label class="form-check-label" for="inputJK1">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                        <input type="radio" class="form-check-input" name="jenisKelamin" id="inputJK2" value="Perempuan">
                                        <label class="form-check-label" for="inputJK2">Perempuan</label>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="ttl1">Tempat Tanggal Lahir</label>
                                <input type="text" name="tempat" class="form-control" id="ttl1" placeholder="Tempat">
                                <input class="form-control" type="date" id="ttl1">        
                            </div>
                            <div class="form-group">
                                <label>Ukuran Baju</label>
                                <select name="ukuran_baju" id="inputUkuran" class="form-control">
                                    <option selected>Pilih..</option>
                                    <option value="XXL">XXL</option>
                                    <option value="XL">XL</option>
                                    <option value="L">L</option>
                                    <option value="M">M</option>
                                    <option value="S">S</option>
                                </select>
                            </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

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
</body>

</html>