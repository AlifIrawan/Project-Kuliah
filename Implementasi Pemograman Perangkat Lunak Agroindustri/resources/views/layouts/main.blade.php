<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/652faa76c7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <title>{{ $title }}</title>
</head>

<body>
    <!-- NAVBAR -->
    <header class="p-3 mb-3 border-bottom fixed-top bg-light">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/dashboard_customer/{{ $dataCustomer->id }}" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <img src="/img/logo.png" alt="Logo" width="50" height="38" class="d-inline-block align-text-top">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-dark"></a></li>
                    <li><a href="#" class="nav-link px-2 link-dark"></a></li>
                    <li><a href="/dashboard_customer/{{ $dataCustomer->id }}" class="nav-link px-2 link-dark {{ ($title === "Dashboard") ? 'btn btn-success' : '' }} ">Dashboards</a></li>
                    <li><a href="/pesanan/{{ $dataCustomer->id }}?id={{ $dataCustomer->id }}" class="nav-link px-2 link-dark {{ ($title === "Pemesanan") ? 'btn btn-success' : '' }} ">Pesanan</a></li>
                </ul>

                <div class="dropdown text-end">
                    <a href="#" class=" btn btn-light d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('storage/'. $dataCustomer->image ) }}" alt="profile" width="32" height="32" class="rounded-circle shadow">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="/profileCustomer?id={{ $dataCustomer->id }}">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="spacer" style="height: 100px;"></div>

    @yield('container')

















    <!-- PROFIL CUSTOMER -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="profile" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Profile Customer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <form action="" method="" enctype="multipart/form-data">
                    <div class="col-lg-12">
                        <img src="/img/{{ $dataCustomer->image }}" class="img-thumbnail rounded mx-auto d-block mb-2" alt="Profile Picture">
                        <input type="file" class="form-control mb-4" id="inputGroupFile01">
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label for="nama" class="form-label">Nama : </label>
                        <input type="text" name="name" value="{{ $dataCustomer->name }}" class="form-control" id="nama" autofocus autocomplete="off" placeholder="">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="text" value="{{ $dataCustomer->email }}" class="form-control" id="Email">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="Username" class="form-label">Username</label>
                        <input type="text" value="{{ $dataCustomer->username }}" class="form-control" id="Username">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="Password" class="form-label">Password: </label>
                        <input type="text" value="{{ $dataCustomer->password }}" class="form-control" id="Password">
                    </div>

                    <input type="hidden" name="update_at">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="offcanvas" aria-label="Close">Kembali</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mytable').DataTable();
        });
    </script>
</body>

</html>