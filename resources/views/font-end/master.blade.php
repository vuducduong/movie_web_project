<!doctype html>
<html lang="en-US">

<!-- Mirrored from iqonic.design/themes/streamitnew/frontend/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Sep 2020 20:03:00 GMT -->
<head>
    <base href="{{asset('/font-end/ ')}}">
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Streamit - Responsive Bootstrap 4 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive -->
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/dropdow.css">
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Header -->
@include('font-end.core.header')
<!-- Header End -->
@yield('content')
<!-- MainContent End-->
@include('font-end.core.footer')
<!-- back-to-top -->
<div id="back-to-top">
    <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
</div>
<!-- back-to-top End -->
<!-- jQuery, Popper JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Slick JS -->
<script src="js/slick.min.js"></script>
<!-- owl carousel Js -->
<script src="js/owl.carousel.min.js"></script>
<!-- select2 Js -->
<script src="js/select2.min.js"></script>
<!-- Magnific Popup-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Slick Animation-->
<script src="js/slick-animation.min.js"></script>
<!-- Custom JS-->
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from iqonic.design/themes/streamitnew/frontend/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Sep 2020 20:04:10 GMT -->
</html>
