<!DOCTYPE html>
<html>

<head>
  <title>PPID Kementerian Agama</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <style>
    td {
      height: 30px;
    }
  </style>

  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
<?php include('header.php'); ?>
<?php include('env.php'); ?>

  <section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="content_middle_leftbar">
            <?php include('side-left.php'); ?>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <h2>Selamat Datang di Portal PPID<br/><br/>Kementerian Agama</h2><br/>
          <p>Layanan ini merupakan sarana layanan bagi pemohon informasi publik sebagai salah satu
            wujud pelaksanaan keterbukaan informasi publik di Kementerian Agama.</p>
             <div class="content_middle_middle">
              <div class="slick_slider2">
                                <?php

                                ini_set('display_errors', 1);
                                ini_set('display_startup_errors', 1);
                                error_reporting(E_ALL);

                                $data = file_get_contents("http://localhost:1347/api/articles?populate=*");
                                $data = json_decode($data);

                                $i = 0;
                                foreach ($data->data as $k => $v) {
                                  $title = $v->title;
                                  //  $published_at= $v->published_at;
                                  //  $preview= $v->preview;
                                  $img = $cms_url . $v->cover[0]->formats->thumbnail->url;
                                  //  $link= $v->path;
                                
                                  ?>
                                         <?php

                                         if ($i >= 5)
                                           break;

                                         ?>
                                   
                                     <div class="single_featured_slide"> 
                                        <a href="https://kemenag.go.id<?php echo $link; ?>"><?php echo '<img height="309" src="' . $img . '" alt="..."/>'; ?></a>
                                        <h4>
                                          <a href="https://kemenag.go.id<?php echo $link; ?>"><?php echo $title; ?>
                                        </a>
                                      </h4>
                                      
                                      </div>
                          
                                      <?php
                                      $i++;
                                }

                                ?>
              </div>
            </div> 
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="content_middle_rightbar">
            <?php include('side-right.php'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<footer id="footer">
<?php include('footer.php'); ?>
</footer>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>