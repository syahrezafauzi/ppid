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
                            $url = $_GET['url'];
                            $url = $w_public_url . $url;

                            ?>
                            <h2 style="color:#000000;" class="post_titile"><?= $title ?></h2>
                            <div class="single_page_content">
                                <img src="<?= $url ?>" /> 
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
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>

</html>