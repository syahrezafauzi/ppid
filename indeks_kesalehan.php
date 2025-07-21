
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
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 14px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 10px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

</style>
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <?php include('header.php');?>
  
  <section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="content_middle_leftbar">
            <?php include('side-left.php');?>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="single_page_area">
               <h2 style="color:#000000;" class="post_titile">Indeks Kesalehan Sosial Umat Beragama</h2>
                <div class="single_page_content">
                  <table id="myTable">
                      <tr>
                          <th colspan="3">Indeks Kesalehan Sosial Umat Beragama</th>
                      </tr>
                      <tr>
                          <td>1.</td>
                          <td>Survei Indeks Kesalehan Sosial Tahun 2018</td>
                          <td><a href="./files/files_new/2018-SURVEI_INDEKS_KESALEHAN_SOSIAL_TAHUN_2018.pdf" target="_blank">lihat</a></td>
                      </tr>
                      <tr>
                          <td>2.</td>
                          <td>Laporan Tahunan Kehidupan Keagamaan Tahun 2019</td>
                          <td><a href="./files/files_new/Laporan Tahunan Kehidupan Keagamaan Tahun 2019.pdf" target="_blank">lihat</a></td>
                      </tr>
                      <tr>
                          <td>3.</td>
                          <td>Policy Brief Indeks Kesalehan Sosial Tahun 2019</td>
                          <td><a href="./files/files_new/policy brief IKS 2019.pdf" target="_blank">lihat</a></td>
                      </tr>
                      <tr>
                          <td>4.</td>
                          <td>Survei Indeks Kesalehan Sosial Umat Beragama Tahun 2020</td>
                          <td><a href="./files/files_new/4. SURVEI INDEKS KESALEHAN (SOSIAL) UMAT BERAGAMA.pdf" target="_blank">lihat</a></td>
                      </tr>
                  </table>
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="content_middle_rightbar">
            <?php include('side-right.php');?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<footer id="footer">
<?php include('./footer.php');?>
</footer>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>