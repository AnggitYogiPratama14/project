<?php 

if(!isset($_POST['ubah'])) header('Location: ubah.php');


require_once '../../koneksi.php';
$judul = mysqli_real_escape_string($koneksi, isset($_POST['judul']) ? $_POST['judul'] : '');
$isi = mysqli_real_escape_string($koneksi, isset($_POST['isi']) ? $_POST['isi'] : '');
$tgla = mysqli_real_escape_string($koneksi, isset($_POST['tgla']) ? $_POST['tgla'] : '');
$tmpt = mysqli_real_escape_string($koneksi, isset($_POST['tmpt']) ? $_POST['tmpt'] : '');
$wkt = mysqli_real_escape_string($koneksi, isset($_POST['wkt']) ? $_POST['wkt'] : '');
$id_kategori = mysqli_real_escape_string($koneksi, isset($_POST['id_kategori']) ? $_POST['id_kategori'] : '');

$tanggal = date('Ymd');
$id = $_GET['id'];

// persiapan upload foto

if($_FILES['foto']['error'] == 0){
	$ekstensi = $_FILES['foto']['name'];
	$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

	$nama_foto = $tanggal . '-';
	$nama_foto = $nama_foto . strtolower($judul);
	$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;

	$asal = $_FILES['foto']['tmp_name'];
} else {
	// hapus foto sebelumnya
	$query_agenda = mysqli_query($koneksi, "SELECT foto FROM tbl_agenda WHERE id = $id");
	$row = mysqli_fetch_assoc($query_agenda);
	

	$nama_foto = $row['foto'];
}

$tujuan = '../../images/agenda/';
		
if($_FILES['foto']['error'] == 0){
	if($_FILES['foto']['size'] < 1000000){
		if (file_exists('../../images/agenda/' . $nama_foto)) unlink('../../images/agenda/' . $nama_foto . '.' . $ekstensi);
		if(file_exists('../../images/agenda/' . $row['foto'])) unlink('../../images/agenda/' . $row['foto']);
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');

		// ubah data
		$query = mysqli_query($koneksi, "UPDATE tbl_agenda SET judul = '$judul', isi = '$isi', tgla = '$tgla', tmpt = '$tmpt', wkt = '$wkt', id_kategori = '$id_kategori', foto = '$nama_foto' WHERE id = $id") or die(mysqli_error($koneksi));
		if($query){
			$_SESSION['sukses'] = 'Data Berhasil Diubah!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Diubah!';
			header('Location: index.php');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 1000kb!';
		header('Location: index.php');
	}
} else {
	$query = mysqli_query($koneksi, "UPDATE tbl_agenda SET judul = '$judul', isi = '$isi', tgla = '$tgla', tmpt = '$tmpt', wkt = '$wkt', id_kategori = '$id_kategori', foto = '$nama_foto' WHERE id = $id") or die(mysqli_error($koneksi));

	if($query){
			$_SESSION['sukses'] = 'Data Berhasil Diubah!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Diubah!';
			header('Location: index.php');
		}
}