<?php 
require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT judul, isi, tanggal, foto FROM tbl_artikel");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SDN KEPUTRAN 06 PEKALONGAN</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="assets/css/style.min.css" rel="stylesheet">
</head>

<body>

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="index.php">
        <img src="assets/mp4/60x60.png" alt="">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <!-- Dropdown PROFIL-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">PROFIL</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="sambutan.php">SAMBUTAN KEPALA SEKOLAH</a>
                <a class="dropdown-item" href="sejarah.php">SEJARAH</a>
                <a class="dropdown-item" href="visimisi.php">VISI - MISI</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dataguru.php">DATA PENDIDIK</a>
            </li>
            <!-- Dropdown INFORMASI-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">INFORMASI</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="agenda.php">AGENDA</a>
                <a class="dropdown-item" href="pengumuman.php">PENGUMUMAN</a>
                <a class="dropdown-item" href="https://corona.pekalongankota.go.id/">COVID 19</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="berita.php">BERITA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="artikel.php">ARTIKEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="download.php">DOWNLOAD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hubungi.php">HUBUNGI KAMI</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Jumbotron-->
      <section class="card blue-gradient wow fadeIn">

        <!-- Content -->
        <div class="card-body text-white text-center py-5 px-5 my-5">
          <img src="assets/mp4/big.png" class="animated bounce infinite" alt="Transparent MDB Logo" id="animated-img1" width="20%">
          <h1 class="mb-4">
            <strong>ARTIKEL SDN KEPUTRAN 06 PEKALONGAN</strong>
          </a>

        </div>
        <!-- Content -->
      </section>
      <!--Section: Jumbotron-->

      <section class="pt-4">
          <br><br>
          <!-- Heading & Description -->
          <div class="wow fadeIn">
              <!--Section heading-->
              <h2 class="h1 text-center mb-5">ARTIKEL</h2>
          </div>

          <hr class="mb-5">

          <!--Grid row-->
          <div class="row mt-3 wow fadeIn">
            <?php while($row = mysqli_fetch_assoc($query)) : ?>
              <!--Grid column-->
              <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                  <h3 class="mb-3 font-weight-bold dark-grey-text">
                      <strong><a href="#"><?= $row['judul'] ?></a></strong>
                  </h3>
                  <p class="grey-text"><?= $row['tanggal'] ?></p>
                  <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank" class="btn btn-primary btn-md">Kunjungi
                      <i class="fas fa-play ml-2"></i>
                  </a>
              </div>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-lg-5 col-xl-4 mb-4">
                  <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                      <img src="images/artikel/<?= $row['foto'] ?>" class="img-fluid" alt="">
                      <a href="#" target="_blank">
                          <div class="mask rgba-white-slight"></div>
                      </a>
                  </div>
              </div>
              <!--Grid column-->
            <?php endwhile; ?>
          </div>
          <!--Grid row-->

          <hr class="mb-5">

      </section>
    </div>
    
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">
    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright:
      <a href="#" target="_blank"> TITIK KOMA DEVELOP </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
