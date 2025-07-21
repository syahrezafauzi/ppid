
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
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('images/search.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 14px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

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
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="single_page_area">
               <h2 style="color:#000000;" class="post_titile">Daftar Informasi Publik</h2>
                <div class="single_page_content">
                <br/>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari judul informasi.." title="Type in a name">
            
            <table id="myTable">
              <tr class="header">
                <th>No.</th>
                <th>Judul Informasi</th>
                <th>Ringkasan</th>
                <th>Pejabat yang menguasai informasi</th>
                <th>Penanggung jawab pembuatan informasi</th>
                <th>Waktu, tempat pembuatan/penerbitan informasi</th>
                <th>Bentuk informasi yang tersedia</th>
                <th>Jangka waktu penyimpanan</th>
                <th>Jenis media yang memuat informasi</th>
              </tr>
              
            <?php  
            require_once('ppid_rekap/connect.php');
            $query = "SELECT * FROM dip";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
              $sn=1;
              while($data = mysqli_fetch_assoc($result)) {
             ?>
             <tr>
               <td><?php echo $sn; ?> </td>
               <td><?php echo $data['judul_informasi']; ?> </td>
               <td><?php echo $data['ringkasan']; ?> </td>
               <td><?php echo $data['pejabat_menguasai']; ?> </td>
               <td><?php echo $data['penanggung_jawab']; ?> </td>
               <td><?php echo $data['waktu_tempat_pembuatan_penerbitan']; ?> </td>
               <td><?php echo $data['bentuk_informasi']; ?> </td>
               <td><?php echo $data['jangka_waktu']; ?> </td>
               <td><a href="<?php echo $data['jenis_media_link']; ?>">link</a> </td>
             <tr>
             <?php
              $sn++;}} else { ?>
                <tr>
                 <td colspan="8">No data found</td>
                </tr>
             <?php } ?>
    
            </table>
            
            <script>
            function myFunction() {
              var input, filter, table, tr, td, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");
              for (i = 1; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                  txtValue = td.textContent || td.innerText;
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }       
              }
            }
            </script>
                </div>
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