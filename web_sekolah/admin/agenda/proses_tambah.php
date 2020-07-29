<?php 

if(!isset($_POST['tambah'])) header('Location: tambah.php');


require_once '../../koneksi.php';
$judul = mysqli_real_escape_string($koneksi, isset($_POST['judul']) ? $_POST['judul'] : '');
$isi = mysqli_real_escape_string($koneksi, isset($_POST['isi']) ? $_POST['isi'] : '');
$tgla = mysqli_real_escape_string($koneksi, isset($_POST['tgla']) ? $_POST['tgla'] : '');
$tmpt = mysqli_real_escape_string($koneksi, isset($_POST['tmpt']) ? $_POST['tmpt'] : '');
$wkt = mysqli_real_escape_string($koneksi, isset($_POST['wkt']) ? $_POST['wkt'] : '');
$id_kategori = mysqli_real_escape_string($koneksi, isset($_POST['id_kategori']) ? $_POST['id_kategori'] : '');

$tanggal = date('Ymd');
// persiapan upload foto
$ekstensi = $_FILES['foto']['name'];
$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

$nama_foto = $tanggal . '-';
$nama_foto = $nama_foto . strtolower($judul);
$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;


$asal = $_FILES['foto']['tmp_name'];
$tujuan = '../../images/agenda/';

if($_FILES['foto']['error'] == 0){
	if($_FILES['foto']['size'] < 1000000){
		if (file_exists('../../images/agenda/' . $nama_foto)) unlink('../../images/agenda/' . $nama_foto);

		$query = mysqli_query($koneksi, "INSERT INTO tbl_agenda (judul, isi, tgla, tmpt, wkt, foto, id_kategori) VALUES('$judul', '$isi', '$tgla', '$tmpt', '$wkt', '$nama_foto', $id_kategori)") or die(mysqli_error($koneksi));
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');
		if($query){
			$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
			header('Location: index.php');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 1000kb!';
		header('Location: index.php');
	}
}