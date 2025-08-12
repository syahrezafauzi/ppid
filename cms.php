<!DOCTYPE html>
<html>
<?php
include("head.php");
ini_set('display_errors', 0);
error_reporting(0);
error_reporting(E_ALL & ~E_WARNING); // Report everything except warnings

?>

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
        <?php
        $page = $_GET['url'];
        unset($data);
        $data = file_get_contents($w_base_url . "/api/page/view?url=" . $page);
        $data = json_decode($data);
        if ($data != null) {
            $page = $data[0];
            $content = $page->content ?? "";
            $image = @$page->image;
            $link = @$page->link;
            $pdf = @$page->pdf;
            $title = @$page?->title;
            $other = $page?->other;
            $dip = $other->{"page.dip"};
            $excludePanel = $page->excludePanel;
            $withLeft = $excludePanel == null || $excludePanel && !in_array("Left", $excludePanel);
            $withRight = $excludePanel == null || $excludePanel && !in_array("Right", $excludePanel);
            $colLeft = $withLeft ? "col-lg-3 col-md-3 col-sm-3" : "";
            $colRight = $withRight ? "col-lg-3 col-md-3 col-sm-3" : "";
            if($colLeft && $colRight) $colMid = "col-lg-6 col-md-6 col-sm-6";
            else if($colLeft || $colRight) $colMid = "col-lg-9 col-md-9 col-sm-9";
            else if(!$colLeft && !$colRight) $colMid = "col-lg-12 col-md-12 col-sm-12";
        }

        ?>
        <section id="mainContent">
            <div class="content_top">
                <div class="row">
                    <div class="<?= $colLeft ?>">
                        <div class="content_middle_leftbar">
                            <?php if ($withLeft)
                                include('side-left.php'); ?>
                        </div>
                    </div>
                    <div class="<?= $colMid ?>">
                        <div class="single_page_area">
                            <h2 style="color:#000000;" class="post_titile"><?= $title ?></h2>
                            <div class="single_page_content">
                                <?= @$content ?>
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
                                    <div class="card-container">
                                        <?php
                                        foreach ($link as $key => $value) {
                                            @$toImage = @$value?->page ? site_url() . @"/cms.php?url=" . $value?->page : null;
                                            @$url = $value->url;
                                            ?>
                                            <a href="<?= $url ?? $toImage ?? "#" ?>" class="card-link">
                                                <img src="<?= $w_public_url . $value?->icon ?>" alt="Logo Kemenag">
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
                            <?php
                            if ($dip) {
                                ?>
                                <div class="single_page_content table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>No.</th>
                                            <th>Judul Informasi</th>
                                            <th>Ringkasan</th>
                                            <th>Pejabat yang menguasai informasi</th>
                                            <th>Penanggung jawab pembuatan informasi</th>
                                            <th>Waktu, tempat pembuatan/penerbitan informasi</th>
                                            <th>Bentuk informasi yang tersedia </th>
                                            <th>Jangka waktu penyimpanan</th>
                                            <th>Jenis media yang memuat informasi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($dip as $key => $value) {
                                                $bentuk = implode(", ", $value->bentuk_tersedia);
                                                $file = $value?->media->file;
                                                $page = $value?->media->page;
                                                if ($file)
                                                    $src = $w_public_url . $file;
                                                else if ($page)
                                                    $src = site_url() . "/cms.php?url=" . $page;

                                                ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td><?= @$value->judul_informasi ?></td>
                                                    <td><?= @$value->ringkasan ?></td>
                                                    <td><?= @$value->pejabat_menguasai ?></td>
                                                    <td><?= @$value->pjp_info ?></td>
                                                    <td><?= @$value->waktu_pembuatan ?></td>
                                                    <td><?= @$bentuk ?></td>
                                                    <td><?= @$value->jangka_simpan ?></td>
                                                    <td>
                                                        <a href="<?= $src ?>">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                                <?php

                            }
                            ?>
                        </div>
                    </div>
                    <div class="<?= $colRight ?>">
                        <div class="content_middle_rightbar">
                            <?php if ($withRight)
                                include('side-right.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer id="footer">
        <?php include('footer.php'); ?>
    </footer>
    <script src="<?= site_url() ?>/assets/js/jquery.min.js"></script>
    <script src="<?= site_url() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= site_url() ?>/assets/js/wow.min.js"></script>
    <script src="<?= site_url() ?>/assets/js/slick.min.js"></script>
    <script src="<?= site_url() ?>/assets/js/custom.js"></script>
</body>

</html>