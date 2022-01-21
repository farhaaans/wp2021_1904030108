<?php
$conn = mysqli_connect('localhost','root','','newdb');

//pemanggilan tabel
function query($query)
{
global $conn;

// memngambil seluruh data tabel
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1){
	return mysqli_fetch_assoc($result);
}
// pemanggilan elemen data dengan rapih 
$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
}
	return $rows;
} 

function tambah($data)
{
	global $conn;
// 'nama' dari name di form tambah

	$nama = htmlspecialchars($data['nama']);
	$alamat = htmlspecialchars($data['alamat']);
	$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
	$umur = htmlspecialchars($data['umur']);
	$foto = htmlspecialchars($data['foto']);
	
	$query= "INSERT INTO mahasiswa
	VALUES 
	(null,'$nama','$alamat','$jenis_kelamin','$umur','$foto');";
	mysqli_query($conn, $query);
	 
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
	
}
 
function edit($data)
{
	global $conn;
// 'nama' dari name di form tambah

	$id =($data['id']);
	$nama = htmlspecialchars($data['nama']);
	$alamat = htmlspecialchars($data['alamat']);
	$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
	$umur = htmlspecialchars($data['umur']);
	$foto = htmlspecialchars($data['foto']);
	
	$query = "UPDATE `mahasiswa` SET 
	`Nama`='$nama',
	`Alamat`='$alamat',
	`Jenis Kelamin`='$jenis_kelamin',
	`Umur`='$umur',
	`Foto`='$foto' 
	WHERE `Id`='$id';";
	
	mysqli_query($conn, $query);
	 
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

function cari($keyword)
{
	global $conn;
	// %$keyword% mencari nama yang sesuai depan maupun belakang %
	$query ="SELECT * FROM mahasiswa WHERE Nama LIKE'%$keyword%'";
	$result = mysqli_query($conn, $query);
	
	$rows =[];
	while ($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
	}
	return $rows;
	
}
function hapusdosen($id)
{
	global $conn;
	
	mysqli_query($conn, "DELETE FROM dosen WHERE id=$id") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

function caridosen($keyword)
{
	global $conn;
	// %$keyword% mencari nama yang sesuai depan maupun belakang %
	$query ="SELECT * FROM dosen WHERE Nama LIKE'%$keyword%'";
	$result = mysqli_query($conn, $query);
	
	$rows =[];
	while ($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
	}
	return $rows;
}