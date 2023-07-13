
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

<!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/ticker-style.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  @yield('styles-index')

<div class="p-5 bg-success text-white text-center">
  <h1>Trang tin tức</h1>
  <p>Cập nhật tin tức mới nhất trong thời gian sớm nhất!</p> 
</div>


@include('Tin.nav')

<div class="container-fuiled ">
  <div class="row">
    <div class="col-lg-9 bg-secondary">
      @yield('content')
    </div>
    <div class="col-lg-3 bg-primary">
      <h5>Thong tin bo sung</h5>
    </div>
  </div>
</div>

<div class=" p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                 <div class="row d-flex align-items-center justify-content-between">
                     <div class="col-lg-6">
                         <div class="footer-copy-right">
                             <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">BH-IIIII</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="footer-menu f-right">
                             <ul>                             
                                 <li><a href="#">Terms of use</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Contact</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<!-- JS here -->

 <!-- All JS Custom Plugins Link Here here -->
     <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
 <!-- Jquery, Popper, Bootstrap -->
 <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
     <script src="./assets/js/popper.min.js"></script>
     <script src="./assets/js/bootstrap.min.js"></script>
   <!-- Jquery Mobile Menu -->
     <script src="./assets/js/jquery.slicknav.min.js"></script>

 <!-- Jquery Slick , Owl-Carousel Plugins -->
     <script src="./assets/js/owl.carousel.min.js"></script>
     <script src="./assets/js/slick.min.js"></script>
     <!-- Date Picker -->
     <script src="./assets/js/gijgo.min.js"></script>
 <!-- One Page, Animated-HeadLin -->
     <script src="./assets/js/wow.min.js"></script>
 <script src="./assets/js/animated.headline.js"></script>
     <script src="./assets/js/jquery.magnific-popup.js"></script>

     <!-- Breaking New Pluging -->
     <script src="./assets/js/jquery.ticker.js"></script>
     <script src="./assets/js/site.js"></script>

 <!-- Scrollup, nice-select, sticky -->
     <script src="./assets/js/jquery.scrollUp.min.js"></script>
     <script src="./assets/js/jquery.nice-select.min.js"></script>
 <script src="./assets/js/jquery.sticky.js"></script>
     
     <!-- contact js -->
     <script src="./assets/js/contact.js"></script>
     <script src="./assets/js/jquery.form.js"></script>
     <script src="./assets/js/jquery.validate.min.js"></script>
     <script src="./assets/js/mail-script.js"></script>
     <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
     
 <!-- Jquery Plugins, main Jquery -->	
     <script src="./assets/js/plugins.js"></script>
     <script src="./assets/js/main.js"></script>
</body>
</html>
