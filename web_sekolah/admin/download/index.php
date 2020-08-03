<?php 
$active = 'download';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Upload dan Download File</title>
  
  <!--Script CSS-->
  <link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../resources/datatables/datatables.min.css">
	<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
  
</head>
<body>
<!-- navbar start -->
<?php
require_once '../cek_session.php';
$base_url = "http://localhost/project/web_sekolah/" 
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<div class="container">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link <?= $active == 'dashboard' ? 'active' : '' ?>" href="<?= $base_url ?>admin/index.php">Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $active == 'download' ? 'active' : '' ?> " href="<?= $base_url ?>admin/download/index.php">Download</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= $base_url ?>admin/logout.php" onclick="return confirm('apakah anda yakin?')">Logout</a>
			</li>
		</ul>
	</div>
</nav>
<!-- navbar end -->
<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Daftar Guru
							</div>
              
						</div>
					</div>
					<div class="card-body">
					<form class="form-inline" method="POST" action="upload.php" enctype="multipart/form-data">
          <input class="form-control" type="file" name="upload"/>
          <button type="submit" class="btn btn-success form-control" name="submit"><span class="glyphicon glyphicon-upload"></span> Upload</button>
          </form>
          <table id="table_id" class="dataTable table table-bordered" width="100%">
              <thead>
                <tr>  
                  <th>No</th>
                  <th>File Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="alert-success">
                <?php
                require 'config.php';
                $row = $conn->query("SELECT * FROM `file`") or die(mysqli_error());
                while($fetch = $row->fetch_array()){
                ?>
                <tr>
                  <?php 
                  $name = explode('/', $fetch['file']);
                  ?>
                  <td><?php echo $fetch['file_id']?></td>
                  <td><?php echo $fetch['name']?></td>
                  <td>
                    <a href="download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a>
                    <!-- <a href="hapus.php?file=<?php echo $name[1]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</a> -->
                  </td>
                  
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
          </div>
				</div>
			</div>
		</div>
	</div>

  


<!--Script Javascript-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
<script>
$(document).ready(function() {
  $('#example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
    'colvis'
    ]
  } );
} );
</script>
</body>
</html>