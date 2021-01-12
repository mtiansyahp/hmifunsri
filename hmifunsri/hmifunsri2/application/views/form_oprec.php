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
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-md-6">
                    <div class="banner_text">
                        <div class="banner_text_iner text-center">
                            <h1>FORMULIR <span>PENDAFTARAN</span> </h1>
                            <H2>HMIF</H2>
                            <h3>UNIVERSITAS SRIWIJAYA</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="banner_bg">
                        <img src="<?php echo base_url(); ?>assets/img/banner_img.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- form part start-->
    <section class="">
        <div class="container pt-5 pb-5 ">
            <div class="row">
                <div class="col-lg-4" id="tc_oprec">
                    <h3>Syarat dan Ketentuan</h3>
                    <h2>OPREC STAF BPH HMIF 2020</h2>
                    <p>Rangkaian acara Open Recruitment staf BPH HMIF 2020 terdiri atas dua agenda, yaitu tes wawancara dan FGD (Forum Group Discussion).</p>
                    <p>Tes wawancara akan dilaksanakan pada hari Jumat, 31 Januari 2020 (Kampus Indralaya) dan Sabtu, 1 Februari 2020 (Kampus Palembang) pukul 09.00 s/d selesai.</p>
                    <p>FGD (Forum Group Discussion akan dilaksanakan pada hari Minggu, 2 Februari 2020 pukul 09.00 s/d selesai di Gedung Fasilkom Indralaya.</p>
                    <p>FGD wajib diikuti oleh setiap peserta. Panitia menyediakan transportasi Palembang-Indralaya sebagai opsi (tertera pada formulir).</p>
                    <p>Silahkan isi formulir dan formulir akan terunduh secara otomatis. Cetak formulir dan bawa pada saat tes berlangsung. Silahkan kunjungi akun sosial media resmi HMIF untuk memeriksa kelengkapan berkas.</p>
                </div> 
                <div class="col-lg-8">
                    <form method="POST" action="OpenRecruitment/insert">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nomor Induk Mahasiswa</label>
                            <input id="nim" type="text" class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="angkatan">Angkatan</label>
                                    <select class="form-control" name="angkatan" id="angkatan">
                                        <option selected>Pilih..</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="kelas">Kelas</label>
                                    <select class="form-control" name="kelas" id="kelas">
                                        <option selected>Pilih..</option>
                                        <option value="REG A">REG A</option>
                                        <option value="REG B">REG B</option>
                                        <option value="REG C">REG C</option>
                                        <option value="BIL A">BIL A</option>
                                        <option value="BIL B">BIL B</option>
                                        <option value="BIL C">BIL C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="dom">Domisili</label>
                                    <select class="form-control" name="dom" id="dom">
                                        <option selected>Pilih..</option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Indralaya">Indralaya</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <label for="alamat">Alamat Lengkap</label>
                                    <textarea id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" required> </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="lokasi_tes">Lokasi Tes</label>
                                    <select class="form-control" name="lokasi_tes" id="lokasi_tes">
                                        <option selected>Pilih..</option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Indralaya">Indralaya</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="transport">Transportasi FGD</label>
                                    <select class="form-control" name="transport" id="transport">
                                        <option selected>Pilih..</option>
                                        <option value="PP">Pulang-Pergi</option>
                                        <option value="Pulang">Pulang</option>
                                        <option value="Pergi">Pergi</option>
                                        <option value="Tidak">Tidak Ikut Transportasi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dinas">Dinas</label>
                            <select name="dinas" id="dinas" class="form-control">
                                <option selected>Pilih...</option>
                                <option value="Dinas Administrasi">Dinas Administrasi</option>
                                <option value="Dinas Administrasi, Divisi Kesekretariatan">Dinas Administrasi, Divisi Kesekretariatan</option>
                                <option value="Dinas Administrasi, Divisi Kebendaharaan">Dinas Administrasi, Divisi Kebendaharaan</option>
                                <option value="Dinas Informasi dan Komunikasi (INFOKOM)">Dinas Informasi dan Komunikasi (INFOKOM)</option>
                                <option value="Dinas Informasi dan Komunikasi (INFOKOM), Divisi Multimedia">Dinas Informasi dan Komunikasi (INFOKOM), Divisi Multimedia</option>
                                <option value="Dinas Informasi dan Komunikasi (INFOKOM), Divisi HUMAS">Dinas Informasi dan Komunikasi (INFOKOM), Divisi HUMAS</option>
                                <option value="Dinas Pengembangan Minat dan Bakat (PMB)">Dinas Pengembangan Minat dan Bakat (PMB)</option>
                                <option value="Dinas Pengembangan Minat dan Bakat (PMB), Divisi Olahraga">Dinas Pengembangan Minat dan Bakat (PMB), Divisi Olahraga</option>
                                <option value="Dinas Pengembangan Minat dan Bakat (PMB), Divisi Seni">Dinas Pengembangan Minat dan Bakat (PMB), Divisi Seni</option>
                                <option value="Dinas Akademik">Dinas Akademik</option>
                                <option value="Dinas Akademik, Divisi Pengembangan Teknologi Informasi (PTI)">Dinas Akademik, Divisi Pengembangan Teknologi Informasi (PTI)</option>
                                <option value="Dinas Akademik, Divisi Pengembangan Ilmu Profesi (PIP)">Dinas Akademik, Divisi Pengembangan Ilmu Profesi (PIP)</option>
                                <option value="Dinas Kajian Strategi dan Advokasi (KASTRAD)">Dinas Kajian Strategi dan Advokasi (KASTRAD)</option>
                                <option value="Dinas Kajian Strategi dan Advokasi (KASTRAD), Divisi Politik Propaganda">Dinas Kajian Strategi dan Advokasi (KASTRAD), Divisi Politik Propaganda</option>
                                <option value="Dinas Kajian Strategi dan Advokasi (KASTRAD), Divisi Sosial">Dinas Kajian Strategi dan Advokasi (KASTRAD), Divisi Sosial</option>
                                <option value="Dinas Pengembangan Sumber Daya Manusia (PSDM)">Dinas Pengembangan Sumber Daya Manusia (PSDM)</option>
                                <option value="Dinas Dana dan Usaha (DANUS)">Dinas Dana dan Usaha (DANUS)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="ukuran">Ukuran Pakaian</label>
                                    <select class="form-control" name="ukuran" id="ukuran">
                                        <option selected>Pilih..</option>
                                        <option value="XXL">XXL</option>
                                        <option value="XL">XL</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="S">S</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <center><button type="submit" class="btn btn-primary" name="submit">Daftar</button>            <button type="reset" class="btn btn-danger">Batal</button></center>
                        </div>
                    </form>
                </div>
                   
            </div>
        </div>
    </section>
    <!-- form part end-->

    
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