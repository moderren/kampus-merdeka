<?php
//diketahui
$namaPegawai = 'Ahmad Sopandi';
$agama = 'Islam';
$jabatan = 'Manager';
$status = 'Menikah'; // Menikah atau belum
$jmlAnak = 4;
$gaji; 
$tunjab;
$tunkel;
$zakat; 
$gator; 
$gaber;
/*
tugas : 
1. tentukan gaji pokok (pakai multi if kondisi)
    Jika manager 20 jt, Asisten : 15 jt, Kabag : 10 jt, Staff : 4 jt
2. tentukan tunjangan jabatan = 20% dari gaji pokok
3. tentukan tunjangan keluarga:
    Jika sudah menikah dan punya anak maksimal 2 = 5% dari gapok
    Jika sudah menikah dan anak antara 3 - 5 = 10% dari gapok
    selain itu belum dapat tunjangan keluarga
4. tentukan gaji kotor 
5. tentukan zakat_profesi
    jika ia muslim dan gaji minimal 6 jt, ada zakat = 2.5 %
    dari gaji kotor, sselain itu tidak ada zakat
6. tentukan take home pay
Cetaklah populasi data di atas
*/
switch ($jabatan) {
    case "Manager": $gaji = 20000000; break;
    case "Asisten Manager": $gaji = 15000000; break;
    case "Kabag": $gaji = 20000000; break;
    case "Staff": $gaji = 4000000; break;
    default: $gaji = 0;
}

$tunjab = 0.2 * $gaji;

        if($jmlAnak < 1) $tunkel = 0;
        else if($jmlAnak >= 1 && $jmlAnak <=2) $tunkel = 0.05 * $gaji;
        else if($jmlAnak >= 3 && $jmlAnak <=5) $tunkel = 0.1 * $gaji;
        else $tunkel = 0;

        $gator = $gaji + $tunjab + $tunkel;

        $zakat = $agama == "Islam" && $gator >= 7000000 ? 0.025 * $gator : 0;

        $gaber = $gator - $zakat;
    ?>
    Nama Pegawai : <?= $namaPegawai ?>
    <br /> Agama : <?= $agama ?>
    <br /> Jabatan : <?= $jabatan ?>
    <br /> Status : <?= $status ?>
    <br /> Jumlah Anak: <?= $jmlAnak ?>
    <br /> Gaji : <?= $gaji ?>
    <br /> Tunjangan jabatan : <?= $tunjab ?>
    <br /> Tunjangan Keluarga : <?= $tunkel ?>
    <br /> Zakat : <?= $zakat ?>
    <br /> Gaji Kotor : <?= $gator ?>
    <br /> Gaji Bersih : <?= $gaber ?>

