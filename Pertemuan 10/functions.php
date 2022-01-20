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
	$nama = ($data['nama']);
	$alamat = ($data['alamat']);
	$jenis_kelamin = ($data['jenis_kelamin']);
	$umur = ($data['umur']);
	$foto = ($data['foto']);
	
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
	