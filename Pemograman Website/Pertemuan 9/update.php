<?php

require_once('./koneksi.php');

$id = $_GET['id'];
$movie = tampilData("SELECT * FROM movie WHERE id = $id")[0];


if (isset($_POST['submit'])) {
    if (updateData($_POST) > 0) {
        echo
        "
		<script>
			alert('Film baru berhasil diupdatekan');
			document.location.href = './home.php';
		</script>
		
		";
    } else {
        echo
        "
		<script>
			alert('Data Film gagal diupdatekan');
			document.location.href = './home.php';
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
    <title>Pemograman Website Week - 9</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://cdn-icons-png.flaticon.com/512/705/705062.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                NETFLUX
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Genre
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Adventure</a></li>
                            <li><a class="dropdown-item" href="#">Comedy</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="home.php?title='ASC'">Title Ascending</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-warning" href="tambah.php">Add</a>
                    </li>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Adventure</a></li>
                        <li><a class="dropdown-item" href="#">Comedy</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="home.php?title='ASC'">Title Ascending</a></li>
                    </ul>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Find your movie.." aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <h1 class="text-center pt-4">Form tambah data</h1>

    <div class="container">
        <div class="row justify-content-center">

            <form action="" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $id ?>">

                <input type="hidden" name="gambarlama" value="<?= $movie['img'] ?>">

                <div class="mb-3 mt-3">
                    <img width="250" src="img/<?= $movie['img'] ?>" alt="foto thumbnail" class="img-thumbnail rounded mx-auto d-block mb-2">
                    <input type="file" value="<?= $movie['img'] ?>" name="image" class="form-control mb-4" id="gambarku">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama :</label>
                    <input type="text" value="<?= $movie['nama_film'] ?>" name="nama" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="Rating" class="form-label">Rating : </label>
                    <input type="text" value="<?= $movie['rating_film'] ?>" name="rating" class="form-control" id="Rating">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>