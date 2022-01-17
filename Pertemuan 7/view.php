<?php
date_default_timezone_get("Asia/Jakarta");
include 'koneksi.php';
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">Mahasiswa</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			</ul>
		<div class="text-black">
		<?php echo date('l, d-m-y'); ?>
		</div>
		</div>
		</div>
	</nav>
	
	<!-- Sidebar -->
	<div class="row">
		<div class="col-md-2 pt-4">
		<!--menu -->
		<ul class="nav flex-column">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> 
			Dashboard</a><hr class="bg-dark">
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#"><i class="fas fa-users"></i> Daftar Dosen</a><hr>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Input Mahasiswa</a><hr>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#"><i class="fas fa-calendar"></i> Jadwal Kuliah</a><hr>
		</ul>
		</div>
		
		
		<div class="col-md-10 pt-4">
		<!--Konten -->
		<h3><i class="fas fa-user-circle"></i>Data Mahasiswa</h3><hr>
			<table class="table table-success table-striped">
			<thead>
				<tr>
				  <th scope="col">Id</th>
				  <th scope="col">Nama</th>
				  <th scope="col">Alamat</th>
				  <th scope="col">Jenis Kelamin</th>
				  <th scope="col">Umur</th>
				  <th scope="col">Foto</th>
				  <th scope="col">Opsi</th>
				</tr>
			</thead>
			<tbody>
			<?php $Id=1; ?>
			<?php while ($mhs = mysqli_fetch_row($result)){ ?>
				<tr> 
				  <th scope="row"><?php echo $Id; ?></th>
				  <td><?php echo $mhs[1]; ?></td>
				  <td><?php echo $mhs[2]; ?></td>
				  <td><?php echo $mhs[3]; ?></td>
				  <td><?php echo $mhs[4]; ?></td>
				  <td><img src="img/foto1.jpg" width="75px"></td>
				  <td><i class="fas fa-edit"></i>||<i class="fas fa-trash"></i></td>
				</tr>
			<?php $Id++; ?>
			<?php }?>
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