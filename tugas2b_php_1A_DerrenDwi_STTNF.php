<!DOCTYPE html>
<html>
  <head>
    <title>Belajar Memproses Form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
  <form method="POST" action="tugas2b.php">
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Nama">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                <select class="form-select" aria-label="Default select example" name="pekerjaan">
                    <option selected>Pilih Pekerjaan</option>
                    <?php
                    $nama = $_POST['nama'];
                    $pekerjaan = $_POST['pekerjaan'];
                    $hobby = $_POST['hobby'];
                    $simpan = $_POST['simpan'];

                    for ($y = 1; $y <= 10; $y++) { ?>
                        <option value="pekerjaan<?= $y ?>">pekerjaan <?= $y ?> </option>
                <?php 
                } 
                ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Hobby</label>
                <?php
                $b = 1;
                while ($b <= 10) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobby" id="flexRadioDefault1" value="hobby<?= $b ?>">
                        <label class="form-check-label" for="flexRadioDefault1">
                            hobby<?= $b ?>
                        </label>
                    </div>
                <?php $b++;
                } 
                ?>
            </div>
            <div class="mb-3">
                <input name="simpan" type="submit" class="btn btn-primary" value="Simpan" />
            </div>
        </form>
        <?php if (!empty($simpan)) { ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Hobby</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $nama ?></td>
                    <td><?= $pekerjaan ?></td>
                    <td><?= $hobby ?></td>
                </tr>
            </tbody>
        </table>
    <?php 
    } 
    ?>
    </body>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>

            