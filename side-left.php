<script src="https://code.responsivevoice.org/responsivevoice.js?key=Z0X7zgap6"></script>
<h4>&ensp;&ensp;Permohonan Informasi</h4><br />
<table border="0">
  <tr>
    <td style="text-align: center;">
      &emsp;&emsp;<a href="./ppid_rekap/register.php" class="btn btn-success">Permohonan Informasi
        Online</a><br /><br />
    </td>
  </tr>
  <tr>
    <td style="text-align: center;">
      &emsp;Sudah punya akun?&ensp;<a href="./ppid_rekap/login.php">Log In</a>
    </td>
  </tr>
  <tr>
    <td style="text-align: center;">
      <hr />
  </tr>
  <tr>
    <td style="text-align: center;">
      &emsp;&emsp;<a href="manual.php"><button class="btn">Permohonan Informasi Manual</button></a>
    </td>
  </tr>
</table>
<hr />
<h4>&ensp;&ensp;Pengajuan Keberatan</h4><br />
<table border="0">
  <tr>
    <td style="text-align: center;">
      &emsp;&emsp;&emsp;<a href="./ppid_rekap/keberatan.php" class="btn btn-success">Ajukan Keberatan
        Informasi</a><br /><br />
    </td>
  </tr>
</table>
<hr />
<div class="single_category wow fadeInDown">
  <?php
  if ($w_sites) {
    ?>
    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#"
        class="title_text">SITUS</a> </h2>
    <br /><br />
    <p style="line-height: 2.6; text-align: center;">
      <?php
      foreach ($w_sites as $value) {
        ?>
        <a href="<?=$value?->link?>"><img src="<?=$w_public_url . $value?->icon->url?>" width="30%"><br />
          <?= $value?->text ?></a><br /><br />
        <?php
      }
      ?>

    </p>
    <?php
  }
  ?>
</div>