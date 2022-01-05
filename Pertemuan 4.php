<?php
	//membuat array
	$values = array (10,20,30);
	var_dump($values);
	
	echo("<br>");
	$nama = ["andi","dodi","dedi"];
	var_dump($nama);
	
	echo("<br>");
	$ganjil =[1,3,4,5,7];
	var_dump($ganjil);
	
	//cara memanggil isi array
	echo("<br>");
	echo ($values[2]);
	
	echo("<br>");
	echo ($nama[3]);
	
	echo("<br>");
	echo($ganjil[4]);
	
	//mengganti isi value
	$values[1] = 19 ;
	var_dump($values);
	echo("<br>");
	
	$nama[0]="aan";
	var_dump($nama);
	echo("<br>");
	
	//menambahkan value 
	$ganjil[] = 9;
	var_dump($ganjil);
	echo("<br>");

	//menghapus value
	unset($nama[2]);
	var_dump($nama);
	echo("<br>");
	
	//total yang ada didalam array
	var_dump(count($values));
	var_dump(count($nama));
	var_dump(count($ganjil));
	
	
	echo("<br>");
	echo("<h1>Map dengan Array</h1>");
	$PC1 = array (
			"Processor" => "i5 9400f",
			"Ram" => "8gb",
			"Vga" => "GTX 1660",
	);
	var_dump($PC1);
	
	echo("<br>");
	$PC2 = [
			"Processor" => "i3 9400f",
			"Ram" => "16gb",
			"Vga" => "GTX 1050ti",
	];
	var_dump($PC2);
	echo("<br>");
	echo("Ram pada PC2 : ".$PC2["Ram"]);
	echo("<br>");
	//array didalam array
	$siswa=[
			"nama" => "hena",
			"umur" => 21,
			"Pendidikan" => [
							"Smp"=>"SMP 1 SEMARANG",
							"Sma"=>"SMA 11 SEMARANG"
							],
			"Alamat" => "Cilacap"
			];
	var_dump($siswa);
	
	echo("<br>");
	echo("<br>");
	//operasi aritmatika
	echo("<h1>Operasi aritmatika</h1>");
	$tambah = 200 + 200;
	$kurang = 100 - 50;
	$bagi = 50 / 2 ;
	$kali = 10 * 4 ;
	$modular = 100 % 4;
	$pangkat = 2**2;
	
	var_dump($tambah);
	var_dump($kurang);
	var_dump($bagi);
	var_dump($kali);
	var_dump($modular);
	var_dump($pangkat);
	echo("<br>");
	var_dump($tambah - $kurang);
	echo("<br>");
	echo($tambah - $kurang);
	echo("<br>");
	echo($kurang / $bagi);


?>