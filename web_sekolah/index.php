<?php 
require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT judul, isi, tgla, foto FROM tbl_berita LIMIT 4");
$query1 = mysqli_query($koneksi, "SELECT nama, pendidikan, foto FROM tbl_guru LIMIT 4");
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>SD NEGERI KEPUTRAN 06</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">

  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php"></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <!--Awal Header-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">PROFIL</a>
                <ul class="dropdown-menu">
                  <li><a href="SambutanKepsek.php">Sambutan Kepala Sekolah</a></li>
                  <li><a href="VisiMisi.php">Visi & Misi</a></li>
                  <li><a href="sejarah.php">Sejarah</a></li>
                  <!-- <li><a href="DataPendidik.php">Data Pendidik</a></li> -->
                </ul>
              </li>
              <li><a href="DataPendidik.php">Data Pendidik</a></li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">INFORMASI</a>
                <ul class="dropdown-menu">
                  <li><a href="Agenda.php">Agenda</a></li>
                  <li><a href="Pengumuman.php">Pengumuman</a></li>
                  <li><a href="https://corona.pekalongankota.go.id/">Covid-19</a></li>
                </ul>
              </li>
              <li><a href="berita.php">BERITA</a></li>
              <li><a href="artikel.php">ARTIKEL</a></li>
              <li><a href="download.php">DOWNLOAD</a></li>
              <li><a href="hubungi.php">HUBUNGI KAMI</a></li>
              <!-- Akhir Header -->
            </ul>
          </div>
        </div>
      </nav>
      <section class="home-section home-full-height bg-dark-30" id="home" data-background="assets/images/dobak.png">
        <div class="video-player" data-property="{videoURL:'#', containment:'.home-section', startAt:18, mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
        <div class="video-controls-box">
          <div class="container">
            <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" id="video-play" href="#">&nbsp;</a></div>
          </div>
        </div>
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-10 titan-title-size-2">SELAMAT DATANG</div>
            <div class="font-alt mb-20 titan-title-size-3">SDN KEPUTRAN 06 <br> PEKALONGAN</div>
            
            <!-- Tulisan Bergerak -->
            <script language="JavaScript">
            var text="PUTNAM THE BRIGHTER FUTURE";
            var delay=20;
            var currentChar=1;
            var destination="[none]";
            function type()
            {
              //if (document.all)
            {
            var dest=document.getElementById(destination);
            if (dest)// && dest.innerHTML)
            {
            dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink>";
            currentChar++;
            if (currentChar>text.length)
            {
            currentChar=1;
            setTimeout("type()", 4000);
            }
            else
            {
              setTimeout("type()", delay);
            }
            }
            }
            }
            function startTyping(textParam, delayParam, destinationParam)
            {
            text=textParam;
            delay=delayParam;
            currentChar=1;
            destination=destinationParam;
            type();
            }
            </script> <b><div 0px="" 12px="" arial="" color:="" ff0000="" font:="" id="textDestination" margin:="" style="background-color: none;"></div></b> <script language="JavaScript">
            javascript:startTyping(text, 50, "textDestination");
            </script>
            <!-- End Tulisan Bergerak -->
            <a class="section-scroll btn btn-border-w btn-round" href="#about">Kunjungi</a>
          </div>
        </div>
      </section>
      <div class="main">
        
      <!-- Berita -->
     
      <section class="module" id="news">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Berita</h2></div>
            </div>
          </div>

        <div class="container-fluid" >
        <div class="row">
        
        <?php while($row = mysqli_fetch_assoc($query)) : ?>
              <div class="col-lg-3 col-lg-3 col-lg-3 col-lg-3" align="center">
              
        
                <div class="post-thumbnail"><a href="#"><img src="images/berita/<?= $row['foto'] ?>" alt="Blog-post Thumbnail" width="1000px" height="100px"/></a></div>
                <h2 class="post-title"><a href="#"><?= $row['judul'] ?></a></h2>
                <div class="post-meta"><?= $row['tgla'] ?></div>
              </div>
              
            <?php endwhile; ?>
            
         
                                   
          </div>
          <div class="container-fluid">
          <div class="row multi-columns-row post-columns ">

          <div class="post-more" align="center"><button><a class="more-link" href="#">Read more</a></button></div>
          
              </div>
              </div>
           
        </section>
      <!-- End Berita -->
        
      <!-- presentation-->
      <section class="module bg-dark-60" data-background="assets/images/section-6.jpg" autoplay>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="video-box">
                <div class="video-box-icon"><a class="video-pop-up" href="https://www.youtube.com/watch?v=TTxZj3DZiIM"><span class="icon-video"></span></a></div>
                <div class="video-title font-alt">Presentation</div>
                <div class="video-subtitle font-alt">Watch the video about our new products</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Guru -->
      <section class="module" id="news">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Guru</h2></div>
            </div>
          </div>

        <div class="container-fluid" >
        <div class="row multi-columns-row post-columns">
            <?php while($row1 = mysqli_fetch_assoc($query1)) : ?>
              <div class="col-3 col-sm-4 col-md-2 col-lg-3" align="center">
              
                <div class="post-thumbnail"><a href="#"><img src="images/guru/<?= $row1['foto'] ?>" alt="Blog-post Thumbnail" width="150px" height="50px"/></a></div>
                <h2 class="post-title"><a href="#"><?= $row1['nama'] ?></a></h2>
                <div class="post-meta"><?= $row1['pendidikan'] ?></div>
              </div>
              
            <?php endwhile; ?>
                                   
          </div>
          <div class="container-fluid">
          <div class="row multi-columns-row post-columns ">

          <div class="post-more" align="center"><button><a class="more-link" href="DataPendidik.php">Read more</a></button></div>
          
              </div>
              </div>
           
        </section>
      <!-- End Guru -->

      
      <!--Start Footer-->
      <hr class="divider-w">
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Hubungi Kami</h5>
                  <p>--coming soon--</p>
                  <p>Phone: --coming soon--</p>
                  <p>Email: --coming soon--</p>
                  <!-- <p>Email:<a href="#">--coming soon--</a></p>-->
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">JAM PEMBELAJARAN</h5>
                  <ul class="icon-list">
                    <li>SENIN <a href="#"> 07.00 - 13.30</a></li>
                    <li>SELASA<a href="#">07.00 - 13.30</a></li>
                    <li>RABU   <a href="#">   07.00 - 13.30</a></li>
                    <li>KAMIS <a href="#"> 07.00 - 13.30</a></li>
                    <li>JUMAT <a href="#"> 07.00 - 10.30</a></li>
                    <li>SABTU <a href="#"> 07.00 - 12.30</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Kategori</h5>
                  <ul class="icon-list">
                    <li><a href="#">Berita</a></li>
                    <li><a href="#">PPDB 2020</a></li>
                    <li><a href="#">Agenda</a></li>
                    <li><a href="#">Pengumuman</a></li>
                    <li><a href="#">Tenaga Pendidik</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">MAPS</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <!-- Elemen yang akan menjadi kontainer peta -->
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9502177888335!2d109.6760193143671!3d-6.8965580694050646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7024321f4ddfcd%3A0x2f5e37fb128178d0!2sSDN%20KEPUTRAN%2006%20PEKALONGAN!5e0!3m2!1sid!2sid!4v1595303947308!5m2!1sid!2sid" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> <!--End Footer-->
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2020&nbsp;<a href="index.html">TIM IT SMAYANI</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>