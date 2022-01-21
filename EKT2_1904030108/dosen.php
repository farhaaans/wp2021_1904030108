<?php
date_default_timezone_get("Asia/Jakarta");
require 'functions.php';

$dsn = query("SELECT*FROM dosen");

if(isset($_POST['cari'])) {
	$dsn = caridosen($_POST['keyword']);
}
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font -->
	<link href="tema/fontawesome/css/all.min.css" rel="stylesheet">

    <title>CRUD</title>
  </head>
  <body>
	<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
		<div class="container-fluid">
		<a class="navbar-brand text-white" href="#"><b>Sistem Falkultas</b></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			</ul>
		<div class="text-white">
		<?php echo date('l, d-m-y'); ?>
		</div>
		</div>
		</div>
	</nav>
	
	<!-- Sidebar -->
	<div class="row">
		<div class="col-md-2 pt-4 bg-secondary">
		<!--menu -->
		<ul class="nav flex-column ">
		<li class="nav-item">
			<a class="nav-link active text-white" aria-current="page" href="index.php"><i class="fas fa-tachometer-alt"></i> 
			Dashboard</a><hr class="bg-dark">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="index.php"><i class="fas fa-users"></i> Calon Mahasiswa</a><hr>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="tambah.php"><i class="fas fa-user-circle"></i> Input Mahasiswa</a><hr>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="dosen.php"><i class="fas fa-users"></i> Daftar Dosen</a><hr>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="#"><i class="fas fa-calendar"></i> Jadwal Kuliah</a><hr>
		</ul>
		</div>
		
		
		<div class="col-md-10 pt-4">
		<!--Konten -->
		<h3><i class="fas fa-user-circle"></i>Dosen Fakultas Teknik</h3><hr>
		
		<!--Pencarian data -->
		<form action="" method="POST">
			<input type="text" id="keyword" size="50" name="keyword" placeholder= "masukan keyword" autocomplete="off">
			<button type="submit" class="btn btn-primary" name="cari"> Cari </button>
			</form>

		<hr>
			<table class="table table-success table-striped">
			<thead>
				<tr>
				  <th scope="col">Id</th>
				  <th scope="col">NIDN</th>
				  <th scope="col">Nama</th>
				  <th scope="col">Email</th>
				  <th scope="col">Aksi</th>
				</tr>
			</thead>
			
			<?php if (empty($dsn)) : ?>
			<tr>
				<td colspan="5" class="alert alert-danger text-center" role="alert" >
					<p><b> Data Dosen tidak ada </p></b> 
					
				</td>
			</tr>
			<?php endif; ?>
			<tbody>
			<?php $Id=1; ?>
			<?php foreach ($dsn as $dosen) : ?>
				<tr>  
				  <th scope="row"><?php echo $Id; ?></th>
				  <td><?php echo $dosen['NIDN']; ?></td>
				  <td><?php echo $dosen['Nama']; ?></td>
				  <td><?php echo $dosen['Email']; ?></td>
				  <td><a href="detaildosen.php?id=<?=  $dosen['Id']; ?>" class="btn btn-warning" role="button">detail</a> </td>
				</tr>
			<?php $Id++; ?>
			<?php endforeach ?>
			</tbody> 
			</table>
		</div>
	</div>
	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>