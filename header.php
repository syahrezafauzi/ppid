<header id="header">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="header_bottom">
        <div class="header_bottom_left">
          <?php if ($w_logo) {
            ?>
            <img src="<?= $w_base_url . $w_logo?->url ?>" width="110%" />
            <?php
          }
          ?>

        </div>
        <!-- <div class="header_bottom_right"><a href="https://pusaka.kemenag.go.id"><img src="images/pusaka_icon.png" width="8%" style="float:right;"></a>-->
        <!-- <a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a> -->
      </div>
    </div>
  </div>
</header>
<div id="navarea">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span
            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav custom_nav">
          <li class=""><a href="index.php">Beranda</a></li>
          <?php
          ini_set('display_errors', 1);
          ini_set('display_startup_errors', 1);
          $data = file_get_contents("http://localhost:1347/api/menus?populate=*");
          $data = json_decode($data);

          $i = 0;
          foreach ($data->data as $k => $v) {
            $title = $v->title;
            $pages = $v->page;
            $url = $v->content?->url ?? "#";
            $class = $pages == null ? "" : "dropdown";
            ?>
            <li class="<?= $class ?>"><a href="<?= $url ?>"><?= $title ?></a>
              <?php if ($pages) { ?>
                <ul class="dropdown-menu" role="menu">
                  <?php foreach ($pages as $k => $v):
                    $title = $v->title;
                    $url = $v->url ?? "#";
                    ?>
                    <li><a href="<?= $url ? "cms.php?page=" . $url : $url ?>"><?= $title ?></a></li>
                  <?php endforeach; ?>
                </ul>

              <?php } ?>
            </li>
            <?php
            $i++;
          }
          ?>

          <!-- <li class=""><a href="index.php">Beranda</a></li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Profil</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="profil.php">Profil PPID</a></li>
                <li><a href="profil_pejabat.php">Profil Pejabat</a></li>
                <li><a href="profil_visimisi.php">Visi, Misi, dan Moto PPID</a></li>
                <li><a href="profil_tugas.php">Tugas, Fungsi, dan Wewenang PPID</a></li>
                <li><a href="profil_struktur.php">Struktur Organisasi PPID</a></li>
              </ul>
            </li>
            <li><a href="dip.php">Daftar Informasi Publik</a></li>
            <li><a href="regulasi.php">Regulasi</a></li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Layanan Informasi</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="li_eppid.php">e-PPID Mobile</a></li>
                <li><a href="li_tc_permohonan-informasi.php">Tata Cara Permohonan Informasi</a></li>
                <li><a href="li_tc_pengajuan-keberatan.php">Tata Cara Pengajuan Keberatan</a></li>
                <li><a href="li_tc_sengketa-informasi.php">Tata Cara Sengketa Informasi</a></li>
                <li><a href="li_sop.php">SOP Layanan Informasi Publik</a></li>
                <li><a href="li_standar.php">Standar Pengumuman Informasi</a></li>
                <li><a href="li_tc_pengaduan-masyarakat.php">Tata Cara Pengaduan Masyarakat</a></li>
                <li><a href="li_alasan-keberatan.php">Alasan Pengajuan Keberatan</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Standar Layanan</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="sl_maklumat.php">Maklumat Pelayanan</a></li>
                <li><a href="sl_jadwal.php">Jadwal Pelayanan</a></li>
                <li><a href="sl_biaya.php">Biaya/Tarif Layanan</a></li>
                <li><a href="https://ppid.kemenag.go.id/v4/files/Standar Pelayanan Informasi Publik Kemenag.pdf">Standar Pelayanan</a></li>
                <li><a href="sl_arah.php">Arah Kebijakan Layanan</a></li>
                <li><a href="sl_strategi.php">Strategi dan Metode PPEM</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Informasi Publik</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="if_berkala.php">Informasi Berkala</a></li>
                <li><a href="https://kemenag.go.id/informasi">Informasi Serta Merta</a></li>
                <li><a href="if_tersedia.php">Informasi Tersedia Setiap Saat</a></li>
              </ul>
             </li>
             <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Satuan Kerja</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="https://kemenag.go.id/unit/pusat">Pusat</a></li>
                <li><a href="https://kemenag.go.id/unit/kanwil">Kanwil</a></li>
                <li><a href="https://kemenag.go.id/unit/perguruan-tinggi">Perguruan Tinggi</a></li>
                <li><a href="https://kemenag.go.id/unit/kankemenag">Kankemenag</a></li>
              </ul>
             </li> -->
        </ul>
      </div>
    </div>
  </nav>
</div>