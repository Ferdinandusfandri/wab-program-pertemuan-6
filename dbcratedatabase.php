<?php 
	include_once ( "dbkoneksi.php" );
	jika ($cnn){
		$sql= "BUAT DATABASE oke" ;

		$hsl = mysqli_query ($cnn,$sql );
		jika ($hsl){
			echo  "Database oke <strong>sukses</strong> dibuat<br>";
		}lain{
			echo  "Database oke <strong>gagal</strong> dibuat<br>" ;
		}
		mysqli_close ($cnn);
	}