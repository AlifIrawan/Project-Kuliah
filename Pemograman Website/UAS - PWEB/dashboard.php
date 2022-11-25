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
    <!-- Navbar -->
    <header>
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

    <main>

        <!-- buat nampilin kek banner besar (boleh ganti apa aja) -->
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Perpustakaan Terbesar</h1>
                </div>
            </div>
        </section>

        <!-- Album buat nampilin data dari database -->
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <!-- Looping buat nampilin data array dari database -->
                    <?php foreach ($bukus as $buku) : ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Foto Buku" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <!-- Judul buku -->
                                    <title><?= $buku['judul_buku']; ?></title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="40%" y="50%" fill="#eceeef" dy=".3em">Foto Buku</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil adipisci excepturi accusamus aperiam!</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <!-- Genre buku nya -->
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><?= $buku['nama_genre']; ?></button>
                                            <!-- Penerbit buku nya -->
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><?= $buku['penerbit_buku']; ?></button>
                                        </div>
                                        <!-- Harga buku -->
                                        <small class="text-muted">Rp. <?= $buku['harga_buku']; ?>-,</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

    </main>

    <!-- Link penting sama kayak diatas-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

</body>

</html>