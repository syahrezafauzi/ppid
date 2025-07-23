<!DOCTYPE html>
<html>

<?php include("head.php"); ?>

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
            <?php

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            $data = file_get_contents("http://localhost:1347/api/home?populate[0]=slider.image", false, $w_context);
            $data = json_decode($data)?->data;
            $header = $data?->header ?? "";
            $description = $data?->description ?? "";
            $slider = $data?->slider ?? [];
            $content = $data?->content ??"";
            ?>
            <h2><?= $header ?></h2><br />
            <p><?= $description ?></p>
            <div class="content_middle_middle">
              <div class="slick_slider2">
                <?php


                $i = 0;
                foreach ($slider as $k => $v) {
                  $title = $v->title;
                  $subTitle = $v->subTitle;
                  $img = $w_base_url . $v?->image?->url;
                  ?>
                  <?php

                  if ($i >= 5)
                    break;

                  ?>

                  <div class="single_featured_slide">
                    <a
                      href="<?php $w_base_url . $link; ?>"><?php echo '<img height="309" src="' . $img . '" alt="..."/>'; ?></a>
                    <h4>
                      <a href="<?php $w_base_url . $link; ?>"><?php echo $title; ?>
                      </a>
                    </h4>
                    <?= $subTitle ?>
                  </div>

                  <?php
                  $i++;
                }

                ?>
              </div>
            </div>
            <div></div>
            <div>
              <?= $content ?>
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