<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.8.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
include_once "base.php";
$name=['name'=>$_GET['do']];
$project=$Project->find($name);
$num=['num'=>$project['num']];
$img=$Img->all($num);

for ($i=0; $i <count($img) ; $i++) { 
  $file[$i]='assets/img/'.$img[$i]['file'].'/'.$img[$i]['name'];
}

?>
  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title"><?=$project['name'];?></h2>

            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src=<?=$file[0];?> width="750">
                </div>

                <div class="swiper-slide">
                  <img src=<?=$file[1];?> width="750">
                </div>

                <div class="swiper-slide">
                  <img src=<?=$file[2];?> width="750">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

          <div class="col-lg-4 portfolio-info">
            <h3><?=$project['name'];?> 簡介</h3>
            <ul>
              <li><strong>類別</strong>:<?=$project['type'];?></li>
              <li><strong>製作日期</strong>: <?=$project['date'];?></li>
              <li><strong>作品網站</strong>: <a href=<?=$project['web'];?>><?=$project['web'];?></a></li>
            </ul>

            <p>
              <?=$project['introduce'];?>
            </p>
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>