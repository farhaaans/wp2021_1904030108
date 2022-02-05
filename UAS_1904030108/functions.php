<?php
$conn = mysqli_connect('localhost','root','','uas_1904030108');

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

function hapusbuku($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM buku WHERE no=$id") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
	
}


function editbuku($data)
{
	global $conn;
// 'nama' dari name di form tambah

	$id = ($data['no']);
	$nama = htmlspecialchars($data['nama']);
	$tahun = htmlspecialchars($data['tahun']);
	$klasifikasi= htmlspecialchars($data['klasifikasi']);
	$jumlah = htmlspecialchars($data['jumlah']);
	
	$query = "UPDATE `buku` SET 
	`Nama`='$nama',
	`Tahun`='$tahun',
	`Klasifikasi`='$klasifikasi',
	`Jumlah`='$jumlah'
	WHERE `No`='$id';";
	
	mysqli_query($conn, $query);
	 
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

function caribuku($keyword)
{
	global $conn;
	// %$keyword% mencari nama yang sesuai depan maupun belakang %
	$query ="SELECT * FROM buku WHERE Nama LIKE'%$keyword%'";
	$result = mysqli_query($conn, $query);
	
	$rows =[];
	while ($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
	}
	return $rows;
	
}

function hapusanggota($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM anggota WHERE no=$id") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
	
}


function editanggota($data)
{
	global $conn;
// 'nama' dari name di form tambah

	$id =($data['no']);
	$nama = htmlspecialchars($data['nama']);
	$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
	$alamat = htmlspecialchars($data['alamat']);
	
	$query = "UPDATE `anggota` SET 
	`Nama`='$nama',
	`Jenis Kelamin`='$jenis_kelamin',
	`Alamat`='$alamat'
	WHERE `No`='$id';";
	mysqli_query($conn, $query);
	 
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

function carianggota($keyword)
{
	global $conn;
	// %$keyword% mencari nama yang sesuai depan maupun belakang %
	$query ="SELECT * FROM anggota WHERE Nama LIKE'%$keyword%'";
	$result = mysqli_query($conn, $query);
	
	$rows =[];
	while ($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
	}
	return $rows;
	
}