<?php

require_once('./sistem.php');

// Ambil id dari url
$id = $_GET['id'];

// terus di query ke database dan ambil salah satu data dengan nyocokin id nya
$buku = tampilData("SELECT * FROM buku LEFT JOIN genre ON buku.genre_buku = genre.genre_id WHERE id_buku = $id ORDER BY buku.judul_buku ASC")[0];


if (isset($_POST['ubah'])) {
    // kalo berhasil masukin data ke database function updateData() bakal jadi angka 1
    if (updateData($_POST) > 0) {
        echo
        "
		<script>
			alert('Buku baru berhasil diupdatekan');
			document.location.href = './index.php';
		</script>
		
		";
    } else {
        echo
        "
		<script>
			alert('Data Buku gagal diupdatekan');
			document.location.href = './index.php';
		</script>
		
		";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/652faa76c7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>UAS</title>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="text-center">
                <h1>Update Data Buku</h1>
            </div>
            <div class="col-lg-11">
                <!-- Formulir buat nambah data -->
                <form action="" method="POST">

                    <!-- Jangan lupa kirim juga id nya biar pas diupdate di sistem.php ada acuannya berupa id_buku, sekalian coba ubah typenya dari type="text" ke type="hidden" -->
                    <input type="text" name="id" value="<?= $id ?>">

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Buku : </label>
                        <!-- value="" buat isi inputannya sama data yang diquery diatas-->
                        <input type="text" value="<?= $buku['judul_buku'] ?>" autocomplete="off" autofocus name="judul" class="form-control" id="judul" required placeholder="Masukkan judul buku">
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit Buku : </label>
                        <input type="text" autocomplete="off" value="<?= $buku['penerbit_buku'] ?>" name="penerbit" class="form-control" id="penerbit" required placeholder="Masukkan penerbit buku">
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label for="genre" class="form-label">Pilih Genre : </label>
                        <select class="form-select" name="genre" aria-label="Default select example">
                            <option>-</option>
                            <option value="1" '.($buku == "1" ? ' selected="selected"':'').'>Fantasi</option>
                            <option value="2" '.($buku == "2" ? ' selected="selected"':'').'>Dinosaurus</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Buku : </label>
                        <input type="text" value="<?= $buku['harga_buku'] ?>" autocomplete="off" name="harga" class="form-control" id="harga" required placeholder="Masukkan harga buku">
                    </div>

                    <button type="submit" name="ubah" class="btn btn-primary">Update Data</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>