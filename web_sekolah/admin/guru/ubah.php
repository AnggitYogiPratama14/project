<?php 

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_guru WHERE id = $id");
$guru = mysqli_fetch_assoc($query);

$active = 'master'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubah Guru</title>
	<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
</head>
<body>
	<?php require_once '../navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Ubah Guru
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_ubah.php?id=<?= $guru['id'] ?>" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" value="<?= $guru['nama'] ?>" class="form-control" id="nama" placeholder="nama" autocomplete="off" required="required" name="nama">
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="j_kelamin">Jenis Kelamin</label>
										<select name="j_kelamin" id="j_kelamin" class="form-control">
											<option value="L" <?= $guru['j_kelamin'] == 'L' ? 'selected' : '' ?>>Laki Laki</option>
											<option value="P" <?= $guru['j_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="t_lahir">Tempat Lahir</label>
										<input type="text" value="<?= $guru['t_lahir'] ?>" class="form-control" id="t_lahir" placeholder="tempat lahir" autocomplete="off" required="required" name="t_lahir">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="tgl_lahir">Tanggal Lahir</label>
										<input type="date" value="<?= $guru['tgl_lahir'] ?>" class="form-control" id="tgl_lahir" placeholder="tanggal_lahir" autocomplete="off" required="required" name="tgl_lahir">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="s_pegawai">Status Pegawai</label>
										<select name="s_pegawai" id="s_pegawai" class="form-control">
											<option value="NO_DATA" <?= $guru['s_pegawai'] == 'NO_DATA' ? 'selected' : '' ?>>---OPTION---</option>
											<option value="PNS" <?= $guru['s_pegawai'] == 'PNS' ? 'selected' : '' ?>>PNS</option>
											<option value="GTT" <?= $guru['s_pegawai'] == 'GTT' ? 'selected' : '' ?>>GTT</option>
											<option value="PTT" <?= $guru['s_pegawai'] == 'PTT' ? 'selected' : '' ?>>PTT</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="nip">NIP</label>
								<input type="number" value="<?= $guru['nip'] ?>" class="form-control" id="nip" placeholder="NIP" autocomplete="off" required="required" name="nip">
							</div>
							<div class="form-group">
								<label for="pendidikan">Pendidikan</label>
								<input type="text" value="<?= $guru['pendidikan'] ?>" class="form-control" id="pendidikan" placeholder="Pendidikan" autocomplete="off" required="required" name="pendidikan">
							</div>
							<div class="form-group">
								<label for="univ">Universitas</label>
								<input type="text" value="<?= $guru['univ'] ?>" class="form-control" id="univ" placeholder="Universitas" autocomplete="off" required="required" name="univ">
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"><?= $guru['alamat'] ?></textarea>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" value="<?= $guru['email'] ?>" class="form-control" id="email" placeholder="Email" autocomplete="off" required="required" name="email">
							</div>
							<div class="form-group">
								<label for="telp">Telephon</label>
								<input type="number" value="<?= $guru['telp'] ?>" class="form-control" id="telp" placeholder="Telephon" autocomplete="off" required="required" name="telp">
							</div>
							
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="foto">Foto</label>
										<input type="file" class="form-control-file mb-2" id="foto" autocomplete="off" name="foto">
									</div>
									*foto sebelumnya <br>
									<img src="../../images/guru/<?= $guru['foto'] ?>" alt="" width="20%" class="img-thumbnail mt-2">
								</div>
							</div>
							
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="index.php" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/ckeditor/ckeditor.js"></script>
</body>
</html>