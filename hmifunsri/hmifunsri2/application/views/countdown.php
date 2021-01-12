<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Open Recruitment - HMIF UNSRI</title>
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

<body>
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container-xl">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-12 col-md-12">
                    <div class="banner_text">
                        <div class="banner_text_iner text-center">
                            <h2>COMING SOON<span></span> </h2>
                            <H1>OPEN RECRUITMENT</H1>
                            <h3></h3>
                             <div class="contain"> 
                                            
                                        <div class="count">
                                            <div class="countd">
                                                <span id="days">00</span>
                                                <p>DAYS</p>
                                            </div>
                                        
                                            <div class="countd">
                                                <span id="hours">00</span>
                                                <p>HOURS</p>
                                            </div>
                                       
                                            <div class="countd">
                                                <span id="minutes">00</span>
                                                <p>MINUTES</p>
                                            </div>
                                       
                                            <div class="countd">
                                                <span id="seconds">00</span>
                                                <p>SECONDS</p>
                                            </div>
                                      
                                        </div>
                                    </div>

                                  

                                    <script type="text/javascript">
                                        var count= new Date("jan 18,2020 00:00:00").getTime();
                                        var x = setInterval(function() {
                                        var now =  new Date().getTime();
                                        var d = count - now;
                                        var days = Math.floor(d/(1000*60*60*24));
                                        var hours =Math.floor((d%(1000*60*60*24))/(1000*60*60));
                                        var minutes =Math.floor((d%(1000*60*60))/(1000*60));
                                        var seconds=Math.floor((d%(1000*60))/1000);

                                        document.getElementById("days").innerHTML =days;
                                        document.getElementById("hours").innerHTML =hours;
                                        document.getElementById("minutes").innerHTML =minutes;
                                        document.getElementById("seconds").innerHTML =seconds;

                                        if (d<=0) {
                                            clearInterval(x);
                                        }
                                    } ,1000);


                                    </script>       
                        </div>

                    </div>

                </div>
                
            </div>

        </div>

        <div class="hero-app-7 custom-animation"><img src="<?php echo base_url(); ?>assets/img/animate_icon/icon_7.png" alt=""></div>
        <div class="hero-app-8 custom-animation2"><img src="<?php echo base_url(); ?>assets/img/animate_icon/icon_4.png" alt=""></div>
        <div class="hero-app-6 custom-animation3"><img src="<?php echo base_url(); ?>assets/img/animate_icon/icon_5.png" alt=""></div>
    </section>
    <!-- banner part end-->

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