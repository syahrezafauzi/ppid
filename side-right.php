<h4>Hubungi kami</h4><br />
<p>
      <b>Sekretariat PPID Utama</b>
<div class="text-secondary"><?= $w_address . "<br/>" ?></div>
Helpdesk PPID: <a href="<?= $w_whatsapp?->link ?>"><?= $w_whatsapp?->text ?></a><br />
Email: <a href="mailto:<?= $w_email ?>"><?= $w_email ?></a><br />
</p>
<?php if ($w_social_media) {
      ?>
      Sosial media: <br />
      <div style="line-height: 2.6;">
            <?php
            foreach ($w_social_media as $value) {
                  ?>
                  <a href="<?= $value?->link ?>"><img width="24" height="24" src="<?= $w_public_url . $value?->icon?->url ?>"
                              width="10%">&ensp;<?= $value?->text ?></a><br />
                  <?php
            }
            ?>
      </div>
      <?php
} ?>
<hr /><br />
<?php if ($w_media) {
      foreach ($w_media as $value) {
            ?>
            <p><b><?= $value?->title ?></b></p>

            <?php if ($value?->video) {
                  ?>
                  <video width="90%" controls>
                        <source src="<?= $w_public_url . $value?->video?->url ?>" type="video/mp4">
                        <source src="video/movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                  </video><br /><br />
                  <?php
            }
            ?>

            <?php if ($value?->image) {
                  ?>
                  <a href="https://forms.gle/wWRSboxcL5kLRTteA">
                        <img src="<?= $w_public_url . $value?->image?->icon?->url ?>" width="90%">
                  </a>
                  <br />
                  <br />
                  <?php
            }
            ?>

            <?php if ($value?->slider) {
                  ?>

                  <div class="latest_slider">
                        <div class="slick_slider">
                              <?php foreach ($value?->slider as $value) {
                                    ?>
                                    <div class="single_iteam">
                                          <a href="<?= $w_public_url . $value?->url ?>">
                                                <img src="<?= $w_public_url . $value?->url ?>" width="90%" height="auto" alt="">
                                          </a>
                                    </div>
                                    <?php
                              }
                              ?>
                        </div>
                  </div>
                  <?php
            }
      ?>
      <?php

      }
      ?>

      <?php
} ?>
<!-- 
<p><b>Survei Kepuasan Masyarakat</b></p>
<a href="https://forms.gle/wWRSboxcL5kLRTteA"><img src="images/survei.jpeg" width="90%"></a><br /><br />

<p><b>Infografis</b></p>
<div class="latest_slider">
      <div class="slick_slider">
            <div class="single_iteam"><a href="images/infografis/1-inpassing.jpg"><img
                              src="images/infografis/1-inpassing.jpg" width="90%" height="auto" alt=""></a>
            </div>
            <div class="single_iteam"><a href="images/infografis/2-guru.jpg"><img src="images/infografis/2-guru.jpg"
                              width="90%" height="auto" alt=""></a>
            </div>
            <div class="single_iteam"><a href="images/infografis/3-guru.jpg"><img src="images/infografis/3-guru.jpg"
                              width="90%" height="auto" alt=""></a>
            </div>
            <div class="single_iteam"><a href="images/infografis/4-guru.jpg"><img src="images/infografis/4-guru.jpg"
                              width="90%" height="auto" alt=""></a>
            </div>
            <div class="single_iteam"><a href="images/infografis/1-ponpes.png"><img src="images/infografis/1-ponpes.png"
                              width="90%" height="auto" alt=""></a>
            </div>
            <div class="single_iteam"><a href="images/infografis/2-fasilitas-ponpes.png"><img
                              src="images/infografis/2-fasilitas-ponpes.png" width="90%" height="auto" alt=""></a>
            </div>
            <div class="single_iteam"><a href="images/infografis/3-ponpes.png"><img src="images/infografis/3-ponpes.png"
                              width="90%" height="auto" alt=""></a>
            </div>
            <div class="single_iteam"><a href="images/infografis/4-ponpes-fix.png"><img
                              src="images/infografis/4-ponpes-fix.png" width="90%" height="auto" alt=""></a>
            </div>
      </div>
</div> -->
<div class="single_category wow fadeInDown"></div>
<div class="single_category wow fadeInDown">
      <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#"
                  class="title_text">STATISTIK</a></h2><br />
      <?php
      $koneksi = mysqli_connect('localhost', 'info1_users1', '@Ptx4869', 'info1_kalender');
      $data = mysqli_query($koneksi, 'select count(id_permohonan) as jml from transaksi_permohonan');
      $data2 = mysqli_query($koneksi, 'select count(id_keberatan) as jml from transaksi_keberatan');
      $data3 = mysqli_query($koneksi, 'select count(id_permohonan) as jml from transaksi_permohonan where status="Telah ditanggapi" OR status="Ditolak"');
      $q = mysqli_fetch_array($data);
      $q2 = mysqli_fetch_array($data2);
      $q3 = mysqli_fetch_array($data3);
      ?>
      <p>Jumlah permohonan: <b><?php echo $q[0]; ?></b></p>
      <p>Jumlah keberatan: <b><?php echo $q2[0]; ?></b></p>
      <p>Jumlah kasus yang terselesaikan: <b><?php echo $q3[0]; ?></b></p>
      <a href="./ppid_rekap/index.php"><button class="btn">Rekapitulasi</button></a><br /><br />
</div>