<?php
require_once('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM film WHERE film_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute($id);
    $result = $stmt->fetch();
} else {
    // header("Location: ./home.php");
    echo "Mau Cari apa mazzehh";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film - PwebWeek7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/652faa76c7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <form>
            <!-- FILM ID -->
            <div class="mb-3 form-group">
                <label for="film_id">film_id :</label>
                <input type="text" class="form-control" id="film_id" aria-describedby="film_id" placeholder="film_id" value="<?= $result['film_id']; ?>">
            </div>
            <!-- TITLE -->
            <div class="mb-3 form-group">
                <label for="title">title :</label>
                <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="title" value="<?= $result['title']; ?>">
            </div>
            <!-- DESCRIPTION -->
            <div class="mb-3 form-group">
                <label for="description">description :</label>
                <input type="text" class="form-control" id="description" aria-describedby="description" placeholder="description" value="<?= $result['description']; ?>">
            </div>
            <!-- RELEASE YEAR -->
            <div class="mb-3 form-group">
                <label for="release_year">release_year :</label>
                <input type="text" class="form-control" id="release_year" aria-describedby="release_year" placeholder="release_year" value="<?= $result['release_year']; ?>">
            </div>
            <!-- RENTAL DURATION -->
            <div class="mb-3 form-group">
                <label for="rental_duration">rental_duration :</label>
                <input type="text" class="form-control" id="rental_duration" aria-describedby="rental_duration" placeholder="rental_duration" value="<?= $result['rental_duration']; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>