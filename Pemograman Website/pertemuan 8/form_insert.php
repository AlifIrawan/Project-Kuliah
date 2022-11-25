<?php
require_once('koneksi.php');
session_start();

if (!isset($_SESSION['username'])) {
    header('location: home.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Film - PwebWeek7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/652faa76c7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <!-- TITLE -->
            <div class="mb-3 form-group">
                <label for="title">title :</label>
                <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="title" value="<?= $result['title']; ?>">
            </div>

            <!-- FILM ID -->
            <div class="mb-3 form-group">
                <label for="language_id">language_id :</label>
                <input type="text" class="form-control" id="language_id" aria-describedby="language_id" placeholder="language_id" value="1">
            </div>

            <!-- INPUT IMAGE -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image" accept="image/png, image/jpeg">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>