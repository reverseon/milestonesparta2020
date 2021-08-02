<?php 
header("Access-Control-Allow-Origin: http://localhost:8080");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: Content-Type, Authorization");

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="src/style.css">
    </head>
    <body>
    <?php header('Access-Control-Allow-Origin: *'); ?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand ms-3 mb-1" href="#"><img src="src/logo2.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-2 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" id="nav" href="#"><span>Beranda</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" id="infonav" href="#info"><span>Info</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" id="tautannav" href="#tautan"><span>Tautan Penting</span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="img-bg" id="beranda">
        <!-- desktop landing -->
          <div class="caption-landing text-left hide-mobile">
            <div class="container" >
              <div class="row">
                <div class="col-7">
                  <div class="container">
                    <h1 class="">Your one-stop solution for COVID information in Indonesia</h1>
                    <a class="btn btn-light btn-lg infobtn my-3" style="width: 15rem;" href="#info"><span style="float: left;">Official Gov Source</span><span style="font-weight: 900; float: right"><i class="fas fa-angle-right"></i></span></a>
                    <br>
                    <a class="btn btn-light btn-lg infobtn my-1" style="width: 15rem;" href="#info"><span style="float: left;">Get Latest Info</span><span style="font-weight: 900; float: right"><i class="fas fa-angle-right"></i></span></a>
                  </div>
                </div>
                <div class="col-5">
                  <div class="container">
                    <img src="src/tabungcorona.png" class="img-fluid"alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- mobile landing -->
            <div class="caption-landing text-left show-mobile">
                <div class="container">
                  <h3 class="mb-2 ms-3 me-5">Your one-stop solution for COVID information in Indonesia</h3>
                  <a class="btn btn-light btn-lg ms-3 infobtn mb-2" style="width: 15rem;" href="#info"><span style="float: left;">Official Gov Source</span><span style="font-weight: 900; float: right"><i class="fas fa-angle-right"></i></span></a>
                  <br>
                  <a class="btn btn-light btn-lg infobtn ms-3 mt-3" style="width: 15rem;" href="#info"><span style="float: left;">Get Latest Info</span><span style="font-weight: 900; float: right"><i class="fas fa-angle-right"></i></span></a>
                </div>
            </div>
      </div>

      <div class="img-bg2" id="info">
        <!-- content desktop -->
      <div class="container py-5 hide-mobile">
        <div class="row">
          <div class="col-4">
            <div class="my-5" style="width: 95%;">
                  <?php include 'htmlel/info/covidglobal.php' ?>
            </div>
          </div>
          <div class="col-8">
              <div class="container my-5">
          <?php include 'htmlel/info/accordion.php' ?>
              </div>
          </div>
        </div>
    </div>

    <!-- content mobile -->
    <div class="container show-mobile py-5">
      <div class="container" style="width: 90%;">
        <div class="row my-4">
          <div class="container">
          <?php include 'htmlel/info/covidglobal.php' ?>
        </div>
      </div>
      <div class="row">
        <div class="container">
          <?php include 'htmlel/info/accordion.php' ?>
        </div>
      </div>
    </div>
      </div>  
    </div>

      <!-- SECTION 3 STARTS HERE -->
    <div class="img-bg3" id="tautan">
      <!-- desktop content -->
        <div class="container py-5 hide-mobile">
          <div class="row my-5">
            <div class="col-4">
            <?php
                include 'htmlel/tautan/tautancard1.php'
              ?>
              </div>
            <div class="col-4">
            <?php
                include 'htmlel/tautan/tautancard2.php'
              ?>
            </div>
            <div class="col-4">
            <?php
                include 'htmlel/tautan/tautancard3.php'
              ?>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-4">
            <?php
                include 'htmlel/tautan/tautancard4.php'
              ?>
            </div>
            <div class="col-4">
              <?php
                include 'htmlel/tautan/tautancard5.php'
              ?>
            </div>
            <div class="col-4">
              <?php
                include 'htmlel/tautan/tautancard6.php'
              ?>
            </div>
          </div>
        </div>
        <!-- mobile content -->
        <div class="container py-5 show-mobile">
          <div class="container" style="width: 90%;">
          <div class="row">
            <div class="container my-3">
            <?php
                include 'htmlel/tautan/tautancard1.php'
              ?>
            </div>  
          </div>
          <div class="row">
            <div class="container my-3">
            <?php
                include 'htmlel/tautan/tautancard2.php'
              ?>
            </div>
          </div>
          <div class="row">
            <div class="container my-3">
            <?php
                include 'htmlel/tautan/tautancard3.php'
              ?>
            </div>
          </div>
          <div class="row">
            <div class="container my-3">
            <?php
                include 'htmlel/tautan/tautancard4.php'
              ?>
            </div>
          </div>
          <div class="row">
            <div class="container my-3">
            <?php
                include 'htmlel/tautan/tautancard5.php'
              ?>
            </div>
          </div>
          <div class="row">
            <div class="container my-3">
            <?php
                include 'htmlel/tautan/tautancard6.php'
              ?>
            </div>
          </div>
          </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/7b0f2c2d58.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" async defer></script>
        <script src="src/getcorona.js"></script>
        <script src="src/render.js"></script>
        <script src="src/process.js"></script>
        <script src="src/test.js"></script>
    </body>
</html>