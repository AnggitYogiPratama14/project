<?php
require_once 'cek_session.php';
$base_url = "http://localhost/project/web_sekolah/" 
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<div class="container">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link <?= $active == 'dashboard' ? 'active' : '' ?>" href="<?= $base_url ?>admin">Dashboard</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link <?= $active == 'master' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Data Master</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= $base_url ?>admin/guru/index.php">Data Guru</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/visi_misi.php">Visi Misi</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/tentang_website.php">Tentang Website</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link <?= $active == 'artikel' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Artikel</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= $base_url ?>admin/kategori_artikel/index.php">Data Kategori Artikel</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/artikel/index.php">Data Artikel</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link <?= $active == 'berita' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Berita</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= $base_url ?>admin/kategori_berita/index.php">Data Kategori Berita</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/berita/index.php">Data Berita</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link <?= $active == 'agenda' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Agenda</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= $base_url ?>admin/kategori_agenda/index.php">Data Kategori Agenda</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/agenda/index.php">Data Agenda</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link <?= $active == 'pengumuman' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Pengumuman</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= $base_url ?>admin/kategori_pengumuman/index.php">Data Kategori Pengumuman</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/pengumuman/index.php">Data Pengumuman</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $active == 'download' ? 'active' : '' ?> " href="<?= $base_url ?>admin/download/index.php">Download</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $active == 'bukutamu' ? 'active' : '' ?> " href="<?= $base_url ?>admin/bukutamu.php">Bukutamu</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= $base_url ?>admin/pengguna/index.php">Pengguna</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= $base_url ?>admin/logout.php" onclick="return confirm('apakah anda yakin?')">Logout</a>
			</li>
		</ul>
	</div>
</nav>