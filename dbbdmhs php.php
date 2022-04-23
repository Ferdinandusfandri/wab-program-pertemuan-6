is (14 sloc)  426 Byte
   
<?php
    /**
     * Membaca data mhs berdasarkan NIM
     * 1. ambil parameter NIM
     * 2. membuat query baca data mhs berdasarkan NIM
     * 3. jalankan
     * 4. simpan ke var
     */
    if ( isset ( $_GET [ "n" ])){
        $nim = $_GET [ "n" ];
        $sql = "PILIH NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE FROM mhs WHERE NIM='" . $nim . "';" ;
        $hsl = mysqli_query ( $cnn , $sql );
        $h = mysqli_fetch_array ( $hsl );
    }