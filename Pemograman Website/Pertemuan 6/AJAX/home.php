<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/652faa76c7.js" crossorigin="anonymous"></script>
    <title>Pemograman Website Week - 5</title>
</head>

<body>
    <div class="container">
        <div class="row m-5">
            <form class="d-flex" method="get">
                <input id='ngetik' class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>


            <table class="table table-hover mt-4">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">NO HP</th>
                    </tr>
                </thead>
                <tbody id="data">
                    <?php
                    require_once("./db.php");
                    $sql = "SELECT * FROM tbl_mhs";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <th scope="row"><?= $row['no']; ?></th>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['nim']; ?></td>
                            <td><?= $row['no_hp']; ?></td>
                        <?php endwhile; ?>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>