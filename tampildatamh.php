<?php
    /**
     * 1. buat koneksi ke DBMS mysql dan buka database mahasiswa
     * 2. buat query untuk menampilkan seluruh data dari tabel mhs
     * 3. jalankan kueri
     * 4. tampilkan data
     * 5. tutup koneksi
     */
    include_once ( "dbkoneksi2.php" );

    $sql = "PILIH NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE FROM mhs;" ;

    $hsl = mysqli_query ( $cnn , $sql );

    echo  "<tabel>
            <tajuk>
                <tr>    
                <th>Tidak</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>Jurusan</th>
                <th>JenisKelamin</th>
                <th>TglLahir</th>
                <th>Kode Sandi</th>
                <th><a href='Insertdatamhs.php'>TambahData</a></th>
                </tr>
            </theader>
            <tubuh>" ;
            $tidak = 1 ;
            while ( $h = mysqli_fetch_Array ( $hsl ) ){
                if ( $h [ "JK" ]== "L" ){
                    $jk = "Laki-Laki" ;
                } lain {
                    $jk = "Perempuan" ;
                }
                gema  " <tr>
                    <td>" . $tidak . "</td>
                    <td>" . $h [ "NIM" ]. "</td>
                    <td>" . $h [ "NAMA" ]. "</td>
                    <td>" . $h [ "JURUSAN" ]. "</td>
                    <td>" . $jk . "</td>
                    <td>" . $h [ "TGLLAHIR" ]. "</td>
                    <td>" . $h [ "PASSCODE" ]. "</td>
                    <td><a href='editdatamhs.php?n=" . $h [ "NIM" ]. "'> Edit</a> | <a href='hpsdatamhs.php?n=" . $h [ "NIM" ]. "'> Hapus</a></td>
                </tr>" ;
                $tidak ++;
            }
    gema  " </tbody>
    </tabel>" ;