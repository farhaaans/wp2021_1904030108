<?php
require 'functions.php';

//agar tidak bisa masuk secara pengetikan manual pada urldecodeif 
if (!isset ($_GET['id'])) {
	header("location index.php");
	exit;
}
$id = $_GET['id'];
	if (hapusanggota($id)>0) {
		echo
		"<script> alert ('data berhasil dihapus');
		document.location.href = 'anggota.php';
		</script>";
	}else{
		echo
		"<script> alert ('data gagal dihapus');
		</script>";
	}


?>