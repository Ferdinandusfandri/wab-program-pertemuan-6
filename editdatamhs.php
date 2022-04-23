<?php
    include_once ( "dbkoneksi2.php" );
    include_once ( "dbbdmhs.php" );
    if ($h ["JK"]== "L" ){
        $seLaki = " dipilih" ;
        $sePerempuan = "";
     }lain{
        $seLaki = "";
        $sePerempuan = " dipilih" ;
    }
    if ($h [ "JURUSAN" ]== "MTI" ){
        $seMTI = " dipilih" ;
        $seKAB = "";
     }lain {
        $seMTI = "" ;
        $seKAB = " dipilih" ;
    }
?>
<!DOCTYPE html >
<html  lang =" en " >
<kepala >
    <meta  charset =" UTF-8 " >
    <meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    <meta  name =" viewport " content =" width=device-width, initial-scale=1.0 " >
    <title > Edit Data Mahasiswa </ title >
</kepala >
<tubuh >

<h3 >Edit Data Mahasiswa</h3 >
    <form  action =" dbupdatedatamhs.php " method =" POST " >
        <jenis masukan  =" tersembunyi " nama =" txNIMLAMA " nilai =" <?= $ h [ "NIM" ]; ?> " >
        NIM
        <div >
        <jenis masukan  =" teks " nama =" txNIM " nilai =" <?= $ h [ "NIM" ]; ?> " >
        </div>
        NAMA
        <div>
        <jenis masukan  =" teks " nama =" txNAMA " nilai =" <?= $ h [ "NAMA" ]; ?> " >
        </div >
        Jenis Kelamin
        <div >
            <pilih  nama =" txJK " >
                <nilai opsi  =" L " <?= $seLaki ; ?> >Laki-Laki</pilihan >
                <nilai opsi  =" P " <?= $sePerempuan ; ?> > Perempuan </pilihan >
            </pilih >
        </div >
        TGL Lahir
        <div >
            <jenis masukan  =" tanggal " nama =" txTALAG " nilai =" <?= $ h [ "TGLLAHIR" ] ?> " >
        </div >
        Jurusan
        <div >
        <pilih  nama =" txJUR " >
            <nilai opsi  =" MTI " <?= $seMTI ; ?> > MTI </pilihan >
            <nilai opsi  =" KAB " <?= $seKAB ; ?> > KAB </pilihan >
        </pilih >
        </div >
        Kode sandi
        <div >
            <input  type =" password " name =" txPASSS " value =" <?= $h [ "PASSCODE" ] ?> " >
        </div >

        <div >
            <button  type =" submit " > Simpan Data </​​button >
        </div >
    </bentuk >

</tubuh >
</html >