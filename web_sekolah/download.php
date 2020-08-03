<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DOWNLOAD</title>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons mr-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link"> <strong> SDN KEPUTRAN 06 <br> PEKALONGAN </strong>
            </a>
          </li>
        </ul>

        <!-- Left -->
        <ul class="navbar-nav ml-auto">
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

      </div>

            </div>
        </nav>
        <!-- Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Cards-->
            <section class="pt-4">

                <!-- Heading & Description -->
                <div class="wow fadeIn">
                    <!--Section heading-->
                    <h3 class="text-center mb-5">DOWNLOADs</h3>
                </div>
                <!-- Heading & Description -->

                <!--Grid row-->
                <div class="row wow fadeIn">
                
                <!-- Content Here -->
                <table class="table">
                    <thead class="black white-text" align="center">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">FILE</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'admin/download/config.php';
                        $row = $conn->query("SELECT * FROM `file`") or die(mysqli_error());
                        while($fetch = $row->fetch_array()){
                        ?>
                        <tr>
                        <?php 
                        $name = explode('/', $fetch['file']);
                        ?>
                        <td><?php echo $fetch['file_id']?></td>
                        <td><?php echo $fetch['name']?></td>
                        <td><a href="admin/download/download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a></td>

                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>

                </div>
                <!--Grid row-->

                <hr class="mb-5">
                <br>
            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->
    <br><br><br><br><br><br>
    <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn" style="background-image: url(assets/mp4/gif.gif); background-size:auto;">

<hr class="my-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

<!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-md-3 mx-auto">

  <!-- Links -->
  <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><i class="fas fa-phone-alt"></i> Hubungi Kami </h5>

  <ul class="list-unstyled">
    <li>
      <p><strong>Alamat : <br> </strong> -- coming soon -- </p>
    </li>
    <li>
      <p><strong>Email : <br> </strong> -- coming soon -- </p>
    </li>
    <li>
      <p><strong>Telephon : <br> </strong> -- coming soon -- </p>
    </li>
  </ul>

</div>
<!-- Grid column -->

<hr class="clearfix w-100 d-md-none">

<!-- Grid column -->
<div class="col-md-3 mx-auto">

  <!-- Links -->
  <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><i class="far fa-clock"></i> Jam Pelajaran </h5>

  <ul class="list-unstyled">
    <li>
      <a href="#!"> -- coming soon -- </a>
    </li>
    <li>
      <a href="#!"> -- coming soon -- </a>
    </li>
    <li>
      <a href="#!"> -- coming soon -- </a>
    </li>
    <li>
      <a href="#!"> -- coming soon -- </a>
    </li>
  </ul>

</div>
<!-- Grid column -->

<hr class="clearfix w-100 d-md-none">

<!-- youtube -->
<div class="embed-responsive embed-responsive-16by9" style="padding-bottom:20px; width:450px;">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
</div>

<hr class="clearfix w-100 d-md-none">

</div>
<!-- Grid row -->

</div>
<!-- Footer Links -->

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