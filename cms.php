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
                            $data = file_get_contents("http://localhost:1347/api/menus/view?url=" . $page);
                            $data = json_decode($data);
                            if ($data != null) {
                                $content = $data[0]->page[0]->content ?? "";
                                $image = @$data[0]->page[0]->image;
                                $pdf = @$data[0]->page[0]->pdf;
                                $title = $data[0]->page[0]->title;
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
                                                    <td><a href="http://localhost:1347<?= $value->src ?>"><i class="fa fa-eye"
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
                                        <img src="http://localhost:1347<?= $value ?>">
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