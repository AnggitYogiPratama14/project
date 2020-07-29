<?php 

if(!isset($_POST['ubah'])) header('Location: ubah.php');


require_once '../../koneksi.php';
$nama = mysqli_real_escape_string($koneksi, isset($_POST['nama']) ? $_POST['nama'] : '');
$j_kelamin = mysqli_real_escape_string($koneksi, isset($_POST['j_kelamin']) ? $_POST['j_kelamin'] : '');
$t_lahir = mysqli_real_escape_string($koneksi, isset($_POST['t_lahir']) ? $_POST['t_lahir'] : '');
$tgl_lahir = mysqli_real_escape_string($koneksi, isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : '');
$s_pegawai = mysqli_real_escape_string($koneksi, isset($_POST['s_pegawai']) ? $_POST['s_pegawai'] : '');
$nip = mysqli_real_escape_string($koneksi, isset($_POST['nip']) ? $_POST['nip'] : '');
$pendidikan = mysqli_real_escape_string($koneksi, isset($_POST['pendidikan']) ? $_POST['pendidikan'] : '');
$univ = mysqli_real_escape_string($koneksi, isset($_POST['univ']) ? $_POST['univ'] : '');
$alamat = mysqli_real_escape_string($koneksi, isset($_POST['alamat']) ? $_POST['alamat'] : '');
$email = mysqli_real_escape_string($koneksi, isset($_POST['email']) ? $_POST['email'] : '');
$telp = mysqli_real_escape_string($koneksi, isset($_POST['telp']) ? $_POST['telp'] : '');

$id = $_GET['id'];

// persiapan upload foto

if($_FILES['foto']['error'] == 0){
	$ekstensi = $_FILES['foto']['name'];
	$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

	$nama_foto = strtolower($judul);
	$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;

	$asal = $_FILES['foto']['tmp_name'];
} else {
	// hapus foto sebelumnya
	$query_guru = mysqli_query($koneksi, "SELECT foto FROM tbl_guru WHERE id = $id");
	$row = mysqli_fetch_assoc($query_guru);
	
	$nama_foto = $row['foto'];
}

$tujuan = '../../images/guru/';
		
if($_FILES['foto']['error'] == 0){
	if($_FILES['foto']['size'] < 1000000){
		if (file_exists('../../images/guru/' . $nama_foto)) unlink('../../images/guru/' . $nama_foto . '.' . $ekstensi);
		if(file_exists('../../images/guru/' . $row['foto'])) unlink('../../images/guru/' . $row['foto']);
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');

		// ubah data
		$query = mysqli_query($koneksi, "UPDATE tbl_guru SET nama = '$nama', j_kelamin = '$j_kelamin', t_lahir = '$t_lahir', tgl_lahir = '$tgl_lahir', s_pegawai = '$s_pegawai', nip = '$nip', pendidikan = '$pendidikan', univ = '$univ', alamat = '$alamat', email = '$email', telp = '$telp', foto = '$nama_foto' WHERE id = $id") or die(mysqli_error($koneksi));
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
	$query = mysqli_query($koneksi, "UPDATE tbl_guru SET nama = '$nama', j_kelamin = '$j_kelamin', t_lahir = '$t_lahir', tgl_lahir = '$tgl_lahir', s_pegawai = '$s_pegawai', nip = '$nip', pendidikan = '$pendidikan', univ = '$univ', alamat = '$alamat', email = '$email', telp = '$telp', foto = '$nama_foto' WHERE id = $id") or die(mysqli_error($koneksi));

	if($query){
			$_SESSION['sukses'] = 'Data Berhasil Diubah!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Diubah!';
			header('Location: index.php');
		}
}