<?php
    /**
     * Menghapus data mhs berdasarkan NIM
     * 1. buka koneksi
     * 2. buat sql
     * 3. jalankan sql
     * 4. tutup koneksi
     * 5. kembali ke daftar data mhs
     */
    include_once ( "dbkoneksi2.php" );

    if ( isset ( $_GET [ "n" ])){
        $sql = "HAPUS DARI mhs WHERE NIM='" . $_GET [ "n" ]. "'" ;
        $hsl = mysqli_query ( $cnn , $sql );
    }
    mysqli_close ( $cnn );
    header ( "lokasi: tampildatamhs.php" );