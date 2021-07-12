<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Judul Halaman -->
    <title></title>
    <!-- Pembuat -->
    <meta name="author" content="Putu Juniarta Eka Saputra">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->

    <link rel="shortcut icon" type="image/x-icon" href="/img/logo-ftk.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS link =========================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="/home/css/font-awesome.min.css">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="/home/css/bootstrap.min.css">
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="/home/css/jquery.fancybox.css">
    <!-- animate -->
    <link rel="stylesheet" href="/home/css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/home/css/main.css">
    <!-- media-queries -->
    <link rel="stylesheet" href="/home/css/media-queries.css">
    <!-- slick Slider -->
    <link rel="stylesheet" href="/home/css/slick.css">

    <!-- Modernizer Script for old Browsers -->
    <script src="/home/js/modernizr-2.6.2.min.js"></script>
</head>

<body id="body">
    <!-- preloader -->
    <!-- <div id="preloader">
		<img src="img/preloader.gif" alt="Preloader">
	</div> -->
    <!-- end preloader -->
    <!-- Fixed Navigation ==================================== -->
    <?= $this->include('Home/Components/navbar'); ?>
    <!--End Fixed Navigation ==================================== -->
    <!--Home Slider ============================================= -->
    <?= $this->renderSection('content'); ?>
    <?= $this->include('Home/Components/footer'); ?>



    <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

    <!-- Essential jQuery Plugins
	================================================== -->
    <!-- Main jQuery -->
    <script src="/home/js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
    <script src="/home/js/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="/home/js/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="/home/js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
    <script src="/home/js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
    <script src="/home/js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
    <script src="/home/js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
    <script src="/home/js/jquery.appear.js"></script>
    <!-- Contact form validation
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script> -->
    <!-- Google Map -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <!-- jquery easing -->
    <script src="/home/js/jquery.easing.min.js"></script>
    <!-- jquery easing -->
    <script src="/home/js/wow.min.js"></script>
    <!-- Slick slider -->
    <script src="/home/js/slick.min.js"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 120, // distance to the element when triggering the animation (default is 0)
            mobile: false, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();
    </script>
    <!-- Custom Functions -->
    <script src="/home/js/custom.js"></script>
</body>

</html>