<?php
    /*
    * Membuat tabel
    * 1.koneksi server database dan membuka database
    * 2. script sql create tabel
    * tabel : Mhs
    * field : NIM  Varchar(8), NAMA Varchar(30) Jurusan Varchar(20), JK enum, TGLLAHIR data, PASCODE
    * 3. execute script point 2
    * 4. cek status
    * 5. close connection
    */
    include_once("dbkoneksi2.php");
    $sql - "CREATE TABLE mhs(
        NIM varchar(8) PRIMARY KAY,
        NAMA varchar(30),
        JURUSAN varchar(20),
        JK varchar(1)
        TGLLAHIR data,
        PASSCODE varchar(10
        );";

        $hsl = mysqli_query($cnn, $sqi);

        if($hsl){
            echo "Pembuatan tabel <strong>mhs</strong> sukses<br>";
        }else{
            echo "Pembuatan tabel <strong>mhs</strong> Gagal<br>";
        }