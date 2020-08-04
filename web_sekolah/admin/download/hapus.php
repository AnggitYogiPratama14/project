<?php 

if(!isset($_GET['file_id']) || $_GET['file_id'] == '') header('Location: index.php');

require_once 'config.php';
$file_id = $_GET['file_id'];
$query = mysqli_query($conn, "SELECT file FROM file WHERE file_id = {$file_id}");
$name= mysqli_fetch_assoc($query);

if(file_exists("files" . $name['file'])) unlink("files" . $name['file']) or die('foto tidak bisa dihapus');

$query = mysqli_query($conn, "DELETE FROM file WHERE file_id = {$file_id}");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Dihapus!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Dihapus!';
	header('Location: index.php');
}