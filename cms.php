<!DOCTYPE html>
<html>
<?php include("head.php"); ?>

<style>
    a.card-link {
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        align-items: center;
        gap: 1rem;
        background-color: #fff;
        padding: 1rem 1.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 1px 2px rgb(0 0 0 / 0.05);
        text-decoration: none;
        color: #1e293b;
        cursor: pointer;
        border: 1px solid #ddd;
        text-align: left;
    }

    a.card-link:hover,
    a.card-link:focus {
        background-color: #e2e8f0;
        box-shadow: 0 4px 8px rgb(0 0 0 / 0.1);
        outline: none;
    }

    a.card-link img {
        width: 48px;
        height: 48px;
        flex-shrink: 0;
        border-radius: 0.375rem;
        background-color: white;
        padding: 2px;
        transition: transform 0.3s ease;
    }

    a.card-link:hover img,
    a.card-link:focus img {
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgb(0 0 0 / 0.15);
    }

    .card-text {
        display: flex;
        flex-direction: column;
        align-items: flex-center;
    }

    .card-title {
        font-weight: 600;
        font-size: 1.5rem;
        color: #006316;
    }

    .card-subtitle {
        font-size: 1.2rem;
        color: #000;
    }

    .card-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }
</style>

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
                                $link = @$page->link;
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
                                                            <i class="fa fa-eye" aria-hidden="true"></i></a></td>
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
                                        <img src="<?= $w_public_url . $value ?>">
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php

                            }
                            ?>
                            <?php
                            if ($link) {
                                ?>
                                <div class="single_page_content">
                                    <div class="row card-container">
                                        <?php
                                        foreach ($link as $key => $value) {
                                            ?>
                                            <a href="https://aceh.kemenag.go.id/" class="card-link">
                                                    <img src="/files/images/logo_kemenag.png" alt="Logo Kemenag">
                                                    <div class="card-text">
                                                        <span class="card-title"><?= @$value?->title ?></span>
                                                        <?php if ($value?->subtitle) {
                                                            ?>
                                                            <span class="card-subtitle"><?= @$value?->subtitle ?></span>
                                                            <?php
                                                        } ?>
                                                    </div>
                                                </a>
                                            <!-- <div class="col-xs-1 col-sm-2 col-md-3 col-lg-4">
                                                
                                            </div> -->
                                            <?php
                                        }
                                        ?>
                                    </div>

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