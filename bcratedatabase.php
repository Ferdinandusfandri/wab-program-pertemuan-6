<?php 
	include_once ("dbkoneksi2.php");
	$sql = "BUAT TABEL mhs(
			NIM varchar(8) KUNCI UTAMA,
			NAMA varchar(30),
		    JURUSAN varchar(30),
			JK varchar(1),
			TGLLAHIR tanggal,
			PASSCODE varchar(10)
		);" ;

	$hsl = mysqli_query ($cnn,$sql);

	jika ($hsl){
		echo  "Pembuatan Tabel <strong>mhs</strong> sukses<br>" ;
	} lain {
		echo  "pembuatan tabel <strong>mhs</strong> Gagal<br>" ;
	}
	mysqli_close ($cnn );