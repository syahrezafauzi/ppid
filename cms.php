<!DOCTYPE html>
<html>
<?php include("head.php");  ?>
<body>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <?php include('header.php'); ?>

        <section id="mainContent">
            <div class="content_top">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="content_middle_leftbar">
                            <?php include('side-left.php'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single_page_area">
                            <?php
                            $page = $_GET['page'];
                            $data = file_get_contents($w_base_url . "/api/menus/view?url=" . $page);
                            $data = json_decode($data);
                            if ($data != null) {
                                $data = $data[0];
                                $page = $data?->content ? $data?->content : $data->page[0];
                                $content = $page->content ?? "";
                                $image = @$page->image;
                                $pdf = @$page->pdf;
                                $title = @$page?->title;
                            }

                            ?>
                            <h2 style="color:#000000;" class="post_titile"><?= $title ?></h2>
                            <div class="single_page_content">
                                <?= $content ?>
                            </div>
                            <?php
                            if ($pdf) {
                                foreach ($pdf as $key => $value) {
                                    $title = $value->title;
                                    $file = $value->file;
                                    ?>
                                    <div class="single_page_content">
                                        <p><?= $title ?><br />
                                        </p>
                                        <table id="myTable">
                                            <?php
                                            foreach ($file as $key => $value) {
                                                ?>
                                                <tr>
                                                    <td><?= $value->name ?></td>
                                                    <td style="width: 1%;"><a href="<?= $w_public_url . $value->src ?>">
                                                        <i class="fa fa-eye"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <?php
                                            } ?>
                                        </table>
                                    </div>
                                    <?php
                                }

                                ?>

                                <?php
                            } ?>
                            <?php
                            if ($image) {
                                ?>
                                <div class="single_page_content">
                                    <?php
                                    foreach ($image as $key => $value) {
                                        ?>
                                        <img src="<?=$w_public_url . $value ?>">
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php

                            }
                            ?>
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