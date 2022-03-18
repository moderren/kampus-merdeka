<?php
//array scalar
$p1 = ['nip'=>'111', 'nama'=>'Andi', 'jabatan'=>'Manager', 'divisi'=>'SDM', 'agama'=>'Islam'];
$p2 = ['nip'=>'222', 'nama'=>'Dinan', 'jabatan'=>'Asisten', 'divisi'=>'Keuangan', 'agama'=>'Budha'];
$p3 = ['nip'=>'333', 'nama'=>'Dila', 'jabatan'=>'Kabag', 'divisi'=>'SDM', 'agama'=>'Katholik'];
$p4 = ['nip'=>'444', 'nama'=>'Hawa', 'jabatan'=>'Asisten', 'divisi'=>'SDM', 'agama'=>'Hindu'];
$p5 = ['nip'=>'555', 'nama'=>'Dadang', 'jabatan'=>'Staff', 'divisi'=>'Marketing', 'agama'=>'Islam'];
$p6 = ['nip'=>'666', 'nama'=>'Lala', 'jabatan'=>'Kabag', 'divisi'=>'SDM', 'agama'=>'Protestan'];
$p7 = ['nip'=>'777', 'nama'=>'Fathur', 'jabatan'=>'Manager', 'divisi'=>'Marketing', 'agama'=>'Islam'];
$p8 = ['nip'=>'888', 'nama'=>'Ahmad', 'jabatan'=>'Staff', 'divisi'=>'Keuangan', 'agama'=>'Islam'];
$p9 = ['nip'=>'999', 'nama'=>'Igede', 'jabatan'=>'Kabag', 'divisi'=>'Operasional', 'agama'=>'Hindu'];
$p10 = ['nip'=>'101', 'nama'=>'Gabriel', 'jabatan'=>'Manager', 'divisi'=>'Marketing', 'agama'=>'Protestan'];



//array associative
$ar_pegawai = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10];

//array scalar
$ar_judul = ['No','Nip','Nama','Jabatan','Divisi','Agama', 'Gaji Pokok', 'Tunjangan Jabatan', 'Gaji Kotor', 'Take Home Pay' ];
?>
<h3 align="center">Daftar Pegawai</h3>
<table border="4" align="center" cellpadding="10" cellspacing="0">
    <thead>
        <tr bgcolor="yellowgreen">
            <?php
            foreach($ar_judul as $jdl){
                echo '<th>'.$jdl.'</th>';
            }    
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($ar_pegawai as $b){
            $warna = $no % 2 == 1 ? 'khaki' : 'beige';
            switch ($b["jabatan"]) {
                case "Manager": $gaji = 20000000; break;
                case "Asisten": $gaji = 15000000; break;
                case "Kabag": $gaji = 20000000; break;
                case "Staff": $gaji = 4000000; break;
                default: $gaji = 0;
            }
            
            $tunjab = 0.2 * $gaji;

            $gator = $gaji + $tunjab;

            $zakat = $b['agama'] == "Islam" && $gator >= 7000000 ? 0.025 * $gator : 0;
                    
            $gaber = $gator - $zakat;
        ?>
        <tr bgcolor="<?= $warna; ?>">
            <td><?= $no ?></td>
            <td><?= $b['nip'] ?></td>
            <td><?= $b['nama'] ?></td>
            <td><?= $b['jabatan'] ?></td>
            <td><?= $b['divisi'] ?></td>
            <td><?= $b['agama'] ?></td>
            <td><?= $gaji ?></td>
            <td><?= $tunjab ?></td>
            <td><?= $gator ?></td>
            <td><?= $gaber ?></td>
        <?php 
        $no++;} 
        ?>
    </tbody>