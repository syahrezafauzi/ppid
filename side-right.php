<h4>Hubungi kami</h4><br/>
            <p>
              <b>Sekretariat PPID Utama</b><br/>
              Jl. Lapangan Banteng Barat No. 3-4 Jakarta Pusat 10710<br/>
              Helpdesk PPID: <a href="https://wa.me/628111619925">+62-811-161-9925</a><br/>
              Email: <a href="mailto:ppid@kemenag.go.id">ppid@kemenag.go.id</a><br/><br/>
              Sosial media: <br/>
              <div style="line-height: 2.6;">
                <a href=""><img src="images/fb.png" width="10%">&ensp;Kementerian Agama RI</a><br/>
                <a href=""><img src="images/twitter.png" width="10%">&ensp;@Kemenag_RI</a><br/>
                <a href=""><img src="images/ig.png" width="10%">&ensp;@kemenag_ri</a><br/>
                <a href=""><img src="images/yt.png" width="10%">&ensp;Kemenag RI</a><br/>
                <a href=""><img src="images/tiktok.png" width="10%">&ensp;@kemenag_ri</a><br/>
              </div>
            </p>
            <hr/>
            <p><b>Alur Permohonan Informasi</b></p>
              <video width="90%" controls>
                  <source src="video/alur_permohonan_informasi.mp4" type="video/mp4">
                  <source src="video/movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
              </video><br/><br/>
            <p><b>Survei Kepuasan Masyarakat</b></p>
            <a href="https://forms.gle/wWRSboxcL5kLRTteA"><img src="images/survei.jpeg" width="90%"></a><br/><br/>
            <!--  masukkan ke layanan informasi: <a href="https://eperpus.kemenag.go.id/web/"><img src="images/logo_kemenag.png" width="30%"><br/>
                            Katalog Perpustakaan Digital</a><br/><br/>
            
            <p><b>Layanan Penelusuran Referensi Digital</b></p>
            <a href="https://bit.ly/Layanan-PRD"><img src="images/layananprd.png" width="90%"></a><br/><br/>
                            -->
           <p><b>Infografis</b></p>
           <div class="latest_slider">
              <div class="slick_slider">
                  <div class="single_iteam"><a href="images/infografis/1-inpassing.jpg"><img src="images/infografis/1-inpassing.jpg" width="90%" height="auto" alt=""></a>
                </div>
                <div class="single_iteam"><a href="images/infografis/2-guru.jpg"><img src="images/infografis/2-guru.jpg" width="90%" height="auto" alt=""></a>
                </div>
                <div class="single_iteam"><a href="images/infografis/3-guru.jpg"><img src="images/infografis/3-guru.jpg" width="90%" height="auto" alt=""></a>
                </div>
                <div class="single_iteam"><a href="images/infografis/4-guru.jpg"><img src="images/infografis/4-guru.jpg" width="90%" height="auto" alt=""></a>
                </div>
                <div class="single_iteam"><a href="images/infografis/1-ponpes.png"><img src="images/infografis/1-ponpes.png" width="90%" height="auto" alt=""></a>
                </div>
                <div class="single_iteam"><a href="images/infografis/2-fasilitas-ponpes.png"><img src="images/infografis/2-fasilitas-ponpes.png" width="90%" height="auto" alt=""></a>
                </div>
                <div class="single_iteam"><a href="images/infografis/3-ponpes.png"><img src="images/infografis/3-ponpes.png" width="90%" height="auto" alt=""></a>
                </div>
                <div class="single_iteam"><a href="images/infografis/4-ponpes-fix.png"><img src="images/infografis/4-ponpes-fix.png" width="90%" height="auto" alt=""></a>
                </div>
              </div>
            </div>
           <div class="single_category wow fadeInDown"></div>
           <div class="single_category wow fadeInDown">
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">STATISTIK</a></h2><br/>
              <?php 
           $koneksi    = mysqli_connect('localhost', 'info1_users1', '@Ptx4869', 'info1_kalender');
            $data       = mysqli_query($koneksi,'select count(id_permohonan) as jml from transaksi_permohonan');
            $data2       = mysqli_query($koneksi,'select count(id_keberatan) as jml from transaksi_keberatan');
            $data3       = mysqli_query($koneksi,'select count(id_permohonan) as jml from transaksi_permohonan where status="Telah ditanggapi" OR status="Ditolak"');
            $q = mysqli_fetch_array($data); 
            $q2 = mysqli_fetch_array($data2); 
            $q3 = mysqli_fetch_array($data3); 
            ?> 
              <p>Jumlah permohonan: <b><?php echo $q[0];?></b></p>
              <p>Jumlah keberatan: <b><?php echo $q2[0];?></b></p>
              <p>Jumlah kasus yang terselesaikan: <b><?php echo $q3[0];?></b></p>
              <a href="./ppid_rekap/index.php"><button class="btn">Rekapitulasi</button></a><br/><br/>
            </div> 