
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
<!-- fullcalendar css  -->
<link href="calendar/main.css" rel="stylesheet" />
<style>
td
{
  height:30px;
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
               <h2 style="color:#000000;" class="post_titile">Agenda Kegiatan Badan Publik</h2>
                <div class="single_page_content">
                    <br/>
                  <div class="col-lg-12">
                    <div id="calendar"></div>
                </div>
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

 <script src="calendar/jquery-3.2.1.min.js"></script>
        <script src="calendar/main.js"></script>
        <script src="calendar/moment.min.js"
            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    events: [ <?php 
            require_once('ppid_rekap/connect.php');
            $data       = mysqli_query($conn,'select * from jadwal');
            while($d = mysqli_fetch_array($data)){     
            ?>
            {
             title: '<?php echo $d['kegiatan']; ?>', 
             start: '<?php echo $d['mulai']; ?>', 
             end: '<?php echo $d['selesai']; ?>',
             url: '<?php echo $d['link'];?>'
            },
            <?php } ?> ],
            editable: true,
            eventLimit: true, 
            selectable: true,
            selectHelper: true, 
            eventColor: 'teal',
            /*eventClick: function(event) {
            $("#calenderInfo").modal("show");
            $("#calenderInfo .modal-body p").text(event.event.title);
                return false;
            },*/
            selectOverlap: function (event) {
                return event.rendering === 'background';
            }
            });
                calendar.render();
            });
        </script>
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