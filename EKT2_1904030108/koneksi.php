<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$namadb	= 'newdb';

$conn = mysqli_connect($host,$user,$pass,$namadb);

$result = mysqli_query($conn,'SELECT*FROM mahasiswa');
$result = mysqli_query($conn,'SELECT*FROM dosen');
// ambil data
//mysqli_fetch_row(); mengembalikan data dalam bentuk numerik
//mysqli_fetch_assoc(); mengembalikan data dalam nama field
//mysqli_fetch_array(); mengembalikan data dalam bentuk numerik dan nama field

//while ($mhs = mysqli_fetch_row($result)){
//var_dump($mhs);
//}
//while untuk looping




?>