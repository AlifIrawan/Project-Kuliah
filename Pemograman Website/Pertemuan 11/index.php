<!-- Can i Delete this shit? -->
<?php
require_once("db.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- ASC & DESC -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center">Data Anak Fasilkom</h1>
        <a class="btn btn-warning mb-4" data-bs-toggle="modal" data-bs-target="#insertModal">Tambah Data</a>
        <table class="table table-hover" id="example">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Asal</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody id="content">

            </tbody>
        </table>
    </div>





    <!-- Insert Data -->
    <div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama : </label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM : </label>
                            <input type="text" class="form-control" id="nim"></input>
                        </div>
                        <div class="mb-3">
                            <label for="prodi" class="form-label">Prodi : </label>
                            <select class="form-select" id="prodi" aria-label="Default select example">
                                <option selected></option>
                                <option value="SI">Sistem Informasi</option>
                                <option value="TI">Teknik Informasi</option>
                                <option value="IF">Informatika</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="asal" class="form-label">Asal : </label>
                            <input type="text" class="form-control" id="asal"></input>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat : </label>
                            <input type="text" class="form-control" id="alamat"></input>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-warning" id="save">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="ajax.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>


</html>