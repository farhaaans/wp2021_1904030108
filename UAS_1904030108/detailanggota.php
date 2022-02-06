<?php

require 'functions.php';

if (!isset ($_GET['id'])) {
	header("location index.php");
	exit;
}
$id= $_GET['id'];
$anggota = query("SELECT*FROM anggota WHERE no=$id");
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

    <title>Perpustakaan Cerdas</title>
  </head>
  <body class="bg-secondary">
	<!-- Menu -->
	<ul class="nav justify-content-end bg-info fixed-top">
			<li class="nav-item">
				<a class="nav-link text-secondary" aria-current="page" href="index.php"> <b>Dashboard</b></a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-secondary" href="buku.php"><i class="fas fa-book"></i> <b>Buku </b></a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-secondary" href="anggota.php"><i class="fas fa-users"></i> <b>Anggota</b></a>
			</li>
	</ul>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			</ul>
		</div>
		
	
		
		
	<div style="padding-left:100px; padding-right:100px; padding-top:30px; padding-bottom:100px;">
		<div class="card-body border border-dark bg-light">
		<!--Konten -->
		<h3><i class="fas fa-user-circle"></i>Data Anggota Perpustakaan Cerdas</h3><hr>
		
		<ul class="list-group">
			<li class="list-group-item">Nama : <?= $anggota['Nama']; ?></li>
			<li class="list-group-item">Jenis Kelamin : <?= $anggota['Jenis Kelamin']; ?></li>
			<li class="list-group-item">Alamat : <?= $anggota['Alamat']; ?></li>
			<li class="list-group-item">
				<a href="hapusanggota.php?id=<?=  $anggota['No']; ?>" onclick ="return confirm('apakah anda ingin menghapus data ini?');" class="btn btn-danger" role="button">Hapus</a>
				<a href="editanggota.php?id=<?=  $anggota['No']; ?>" class="btn btn-warning" role="button">Edit</a>
				<a href="anggota.php" class="btn btn-primary" role="button">Kembali</a>
			</li>
		
		</ul>	
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