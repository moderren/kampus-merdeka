<!DOCTYPE html>
<html>
  <head>
    <title>Belajar Memproses Form</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
  </head>
  <body>
  <form method="POST" action="tugas2.php">
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Nama">
            </div>
            <div class="mb-2">
                <select class="form-select" aria-label="Default select example" name="matpel">
                    <option selected>Mata Pelajaran</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Fisika">Fisika</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Nilai</label>
                <input type="number" class="form-control" name="nilai" id="exampleFormControlInput1" placeholder="Nilai">
            </div>
            <div class="mb-2">
                <input name="simpan" type="submit" class="btn btn-primary" value="Simpan" />
            </div>
            <br />
        </form>
        <?php

        $nama = $_POST['nama'];
        $matpel = $_POST['matpel'];
        $nilai = $_POST['nilai'];
        $simpan = $_POST['simpan'];

        $kelulusan = ($nilai >= 60) ? 'Lulus' : 'Tidak Lulus';

    if ($nilai >= 85 && $nilai <= 100) $grade = "A";
    else if ($nilai >= 75 && $nilai < 85) $grade = "B";
    else if ($nilai >= 60 && $nilai < 75) $grade = "C";
    else if ($nilai >= 30 && $nilai < 60) $grade = "D";
    else if ($nilai >= 0 && $nilai < 30) $grade = "E";

    switch ($grade) {
        case "A":
            $predikat = "Memuaskan";
            break;
        case "B":
            $predikat = "Baik";
            break;
        case "C":
            $predikat = "Cukup";
            break;
        case "D":
            $predikat = "Kurang";
            break;
        case "E":
            $predikat = "Sangat Kurang";
            break;
        default:
            $predikat = "-";
    }
    if (!empty($simpan)) {
    ?>
    <div class="container">
        Nama : <?= $nama ?>
        <br />Mata Pelajaran : <?= $matpel ?>
        <br />Nilai : <?= $nilai ?>
        <br />Keterangan : <?= $kelulusan ?>
        <br />Grade: <?= $grade ?>
        <br />Predikat : <?= $predikat ?>
    </div>
    <?php 
    } 
    ?>
  </body>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>

   