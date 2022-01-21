<?php
date_default_timezone_get("Asia/Jakarta");
require 'functions.php';

$id= $_GET['id'];
$mhs = query("SELECT*FROM mahasiswa WHERE id=$id");

if (isset ($_POST['edit'])) {
	if(edit($_POST)> 0){
		echo
		"<script> alert ('data berhasil diedit');
		document.location.href = 'index.php';
		</script>";
	}else{
		echo
		"<script> alert ('data gagal diedit');
		</script>";
	}
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
		<a class="navbar-brand text-white" href="#">Mahasiswa</a>
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
		<ul class="nav flex-column">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> 
			Dashboard</a><hr class="bg-dark">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="index.php"><i class="fas fa-users"></i> Calon Mahasiswa</a><hr>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="tambah.php"><i class="fas fa-user-circle"></i> Input Mahasiswa</a><hr>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="#"><i class="fas fa-users"></i> Daftar Dosen</a><hr>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="#"><i class="fas fa-calendar"></i> Jadwal Kuliah</a><hr>
		</ul>
		</div>
		
		
		<div class="col-md-10 pt-4">
		<!--Konten -->
		<h3><i class="fas fa-user-circle"></i>Edit Data Mahasiswa</h3><hr>
		
		<form method="POST" action="" >
		
			<input type="hidden" class="form-control" value="<?= $mhs['Id'] ?>" name="id">

		
			  <div class="form-group">
				<label for="nama">Nama : </label>
				<input type="text" class="form-control" id="nama" value="<?= $mhs['Nama'] ?>"  placeholder="Input nama" name="nama" autofocus required autocomplete="off">
			  </div>
			  <div class="form-group">
				<label for="alamat">Alamat : </label>
				<input type="text" class="form-control" id="alamat" value="<?= $mhs['Alamat'] ?>" placeholder="Input alamat" name="alamat" required autocomplete="off">
			  </div>
			  <div class="form-group">
				<label for="jenis kelamin">Jenis Kelamin : </label>
				<input type="text" class="form-control" id="jenis kelamin" value="<?= $mhs['Jenis Kelamin'] ?>" placeholder="Input jenis kelamin" name="jenis kelamin" required autocomplete="off">
			  </div>
			  <div class="form-group">
				<label for="Umur">Umur : </label>
				<input type="text" class="form-control" id="umur" value="<?= $mhs['Umur'] ?>" placeholder="Input umur" name="umur" required autocomplete="off">
			  </div> 
			  <div class="form-group">
				<label for="Foto">Foto : </label>
				<input type="text" class="form-control" id="foto" value="<?= $mhs['Foto']  ?>" placeholder="Input foto" name="foto" required autocomplete="off">
			  </div>
			  <br>
			  <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
			</form>
		
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