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
                <a href="/dashboardMitra" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <img src="/img/logo.png" alt="Logo" width="50" height="38" class="d-inline-block align-text-top">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-dark"></a></li>
                    <li><a href="#" class="nav-link px-2 link-dark"></a></li>
                    <li><a href="/dashboardMitra" class="nav-link px-2 link-dark {{ ($title === "Dashboard") ? 'btn btn-success' : '' }} ">Dashboards</a></li>
                    <li><a href="/produk" class="nav-link px-2 link-dark {{ ($title === "Produk") ? 'btn btn-success' : '' }} ">Produk anda</a></li>
                    <li><a href="/penjualan" class="nav-link px-2 link-dark {{ ($title === "Penjualan") ? 'btn btn-success' : '' }} ">Penjualan</a></li>
                    <li><a href="/pencatatan" class="nav-link px-2 link-dark {{ ($title === "Pencatatan") ? 'btn btn-success' : '' }} ">Pencatatan</a></li>
                    <li><a href="/pengeluaran" class="nav-link px-2 link-dark {{ ($title === "Pengeluaran") ? 'btn btn-success' : '' }} ">Pengeluaran</a></li>
                </ul>
                @auth
                <div class="dropdown text-end">
                    <a href="#" class=" btn btn-light d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('storage/'. auth()->user()->image ) }}" alt="profile" width="32" height="32" class="rounded-circle shadow">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="/profileMitra">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item" href="/">Sign out</button>
                            </form>
                        </li>
                    </ul>
                </div>
                @endauth
            </div>
        </div>
    </header>

    <div class="spacer" style="height: 100px;"></div>

    @yield('container')























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