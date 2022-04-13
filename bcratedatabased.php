<?php 
	if ( isset ($_POST [ "txNIM"])){
	include_once ("dbkoneksi2.php" );

	$nim = $_POST [ "txNIM" ];
	$nama = $_POST [ "txNAMA" ];
	$talag = $_POST [ "txTALAG" ];
	$jk = $_POST [ "txJK" ];
	$jur = $_POST [ "txJUR" ];
	$pass = $_POST [ "txPASS" ];


	$sqlINSERT = "INSERT INTO mhs(NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE) NILAI
	('" . $nim . "','" . $nama . "','" . $jur . "','" . $jk . "','" . $talag . "','" . $lulus . "');
	" ;
	$hsl =mysqli_query ($cnn , $sqlINSERT );

	// echo "SQL:". $sqlINSERT . "<br>"; //privasi jika ditampilkan

	jika ( $hsl ){
		echo  "Masukkan Data Suka<br>" ;
	}lain{
		echo  "Masukkan Data Gagal<br>" ;
	}
	mysqli_close ($cnn );
}