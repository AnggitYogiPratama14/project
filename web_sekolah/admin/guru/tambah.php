<?php $active = 'master'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah Data Guru</title>
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
								Tambah Data Guru
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" placeholder="nama" autocomplete="off" required="required" name="nama">
							</div>
							<div class="form-group">
								<label for="j_kelamin">Jenis Kelamin</label>
								<select name="j_kelamin" id="j_kelamin" class="form-control">
									<option value="L">Laki Laki</option>
									<option value="P">Perempuan</option>
								</select>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="tempat_lahir">Tempat Lahir</label>
										<input type="text" class="form-control" id="t_lahir" placeholder="Tempat Lahir" autocomplete="off" required="required" name="t_lahir">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="tgl_lahir">Tanggal Lahir</label>
										<input type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" autocomplete="off" required="required" name="tgl_lahir">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="no_hp">Status Pegawai</label>
										<input type="text" class="form-control" id="s_pegawai" placeholder="Status Pegawai" autocomplete="off" required="required" name="s_pegawai">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="nip">NIP</label>
										<input type="number" class="form-control" id="nip" placeholder="nip" autocomplete="off" required="required" name="nip">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="no_hp">Pendidikan</label>
										<input type="text" class="form-control" id="pendidikan" placeholder="Pendidikan" autocomplete="off" required="required" name="pendidikan">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="nip">Universitas</label>
										<input type="text" class="form-control" id="univ" placeholder="Universitas" autocomplete="off" required="required" name="univ">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"></textarea>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="no_hp">Email</label>
										<input type="text" class="form-control" id="email" placeholder="Email" autocomplete="off" required="required" name="email">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="nip">Telephon</label>
										<input type="text" class="form-control" id="telp" placeholder="Telephon" autocomplete="off" required="required" name="telp">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="foto">Foto</label>
										<input type="file" class="form-control-file" id="foto" autocomplete="off" required="required" name="foto">
									</div>
								</div>
								
							</div>
							
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="tambah">Tambah</button>
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
</body>
</html>