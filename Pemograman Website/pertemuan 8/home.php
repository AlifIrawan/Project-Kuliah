<?php
require_once('koneksi.php');
session_start();

if (isset($_SESSION['username'])) {
    $query = "SELECT * FROM film";
    $stmt = $conn->prepare($query);
    $stmt->execute([$_POST["email"], $_POST["password"]]);
    $result = $stmt->fetch();
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
    <title>Pemograman Website Week - 8</title>
</head>

<body>
    <div class="container-fluid">
        <!-- JIKA BELUM MELAKUKAN LOG IN -->
        <?php if (isset($_SESSION['username'])) : ?>
            <form action="login.php" method="POST" id="form">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php else : ?>
            <?php $counter =  0; ?>
            <?php foreach ($result as $key => $value) : ?>
                <a href="form_insert.php">
                    <button type="button" class="btn btn-primary">Tambah Data</button>
                </a>
                <a href="logout.php">
                    <button type="button" class="btn btn-alert">Hapus Data</button>
                </a>

                <!-- JIka Sudah Melakukan LogIN -->
                <div class="card-header text-muted">
                    <?= $value['release_year']; ?>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['title']; ?></h5>
                        <p class="card-text"><?= $value['description']; ?></p>
                        <a href="./detail_fillm.php?id=<?= $value['film_id'] ?>" class="btn btn-primary">Detail Film</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
                <?php $counter++ ?>
                <?php if ($counter == 20) : ?>
                    <?php break ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <script>
        // $('#form').on('submit', function(e) {
        //     e.preventDefault();

        //     let form = $(this);
        //     let action = form.attr('action');
        //     console.log(form);

        //     $.ajax({
        //         type: 'POST',
        //         url: action,
        //         data: form.serialize(),
        //         success: function(data) {
        //             console.log(data);
        //         },
        //         error: function(data) {
        //             alert('error nich');
        //         }

        //     });
        // });
    </script>
</body>

</html>