<?php
// buat manggil sistem yang ngolah data
require_once('./sistem.php');
// Tampilin data dari database pake function tampilData() di sistem.php terus di left join biar genre_buku bukan angka tapi nama genre nya
$bukus = tampilData("SELECT * FROM buku LEFT JOIN genre ON buku.genre_buku = genre.genre_id ORDER BY buku.judul_buku ASC");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link penting yang harus ada buat manggil bootstrap onlinenya sama fontawesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/652faa76c7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- judul website (bebas ubah jadi apa aja) -->
    <title>UAS</title>
</head>

<body>

    <header>
        <!-- Navbar -->
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white"><a href="dashboard.php" class="text-white">Home</a></h4>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white"><a href="index.php" class="text-white">Buku</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Perpustakaan</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <!-- end Navbar -->



    <div class="container py-5">
        <div class="row">
            <div class="col">

                <div class="text-center">
                    <h1>Tabel Buku</h1>
                </div>
                <!-- button tambah buku baru -->
                <div class="p-4">
                    <a href="tambah.php" target="_blank" class="btn btn-primary">Tambah</a>
                </div>

                <!-- Tabel buku  -->
                <table class="table table-hover" id="example">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul buku</th>
                            <th scope="col">Penerbit buku</th>
                            <th scope="col">Genre buku</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <!-- Data tabel buku -->
                    <tbody>
                        <tr>
                            <!-- biar urut no 1 sampe n, kalo acuannya id pasti berantakan nomernya bisa 1, 3 ,15, 20 -->
                            <?php $no = 1; ?>
                            <!-- Looping buat nampilin data array dari database -->
                            <?php foreach ($bukus as $buku) : ?>
                                <th><?= $no; ?></th>
                                <td><?= $buku['judul_buku']; ?></td>
                                <td><?= $buku['penerbit_buku']; ?></td>
                                <td><?= $buku['nama_genre']; ?></td>
                                <td><?= $buku['harga_buku']; ?></td>
                                <td>
                                    <!-- tombol update + ngirim id (pake GET) dari buku id yang dipake buat cocokin sama didatabase -->
                                    <a href="update.php?id=<?= $buku['id_buku']; ?>" class="btn btn-success">
                                        Edit
                                    </a>
                                    <!-- tombol delete + ngirim id id (pake GET) dari buku id yang dipake buat cocokin sama didatabase -->
                                    <a href="hapus.php?id=<?= $buku['id_buku']; ?>" class="btn btn-danger" onclick="return confirm('Data akan terhapus dari sistem, Anda yakin??')">
                                        Delete
                                    </a>
                                </td>
                        </tr>
                        <!-- Di ++ biar kalo ada data baru nambah ga stuck di angka 1 -->
                        <?php $no++ ?>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Link penting sama kayak diatas-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

</body>

</html>