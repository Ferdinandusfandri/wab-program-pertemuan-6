<?php
    /**
     * Perbaharui data
     * 1. Buka koneksi dan buka database mhs
     * 2. buat query update data
     * 3. jalankan
     * 4. tutup koneksi
     * 5. kembali ke daftar data mhs
     */
    include_once ( "dbkoneksi2.php" );
    
    if ( isset ($_POST ["txNIM"])){
        $nim = $_POST ["txNIM"];
        $nama = $_POST ["txNAMA"];
        $talag = $_POST ["txTALAG"];
        $jk= $_POST ["txJK"];
        $jur = $_POST ["txJUR"];
        $pass = $_POST ["txPASSS"];
        $nimlama = $_POST ["txNIMLAMA"];

        $sql = "PERBARUI SET mhs
            NIM='$nim',
            NAMA='$nama',
            TGLLAHIR = '$talag',
            JK = '$jk',
            JURUSAN = '$jur',
            KODE SANDI = '$pass'
            WHERE NIM='$nimlama';";
        
            //echo "DEBUG: ".$sql;

        $hsl =mysqli_query($cnn,$sql);
        mysqli_close ( $cnn );
    }
    header ( "lokasi: tampildatamhs.php");