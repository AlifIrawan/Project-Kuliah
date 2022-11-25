<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Landing Page E-mbako</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">E-mbako</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                        </li>
                    </ul>
                    <form class="d-flex">
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Login
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/login">Sebagai Customer</a></li>
                                <li><a class="dropdown-item" href="/loginMitra">Sebagai Mitra</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Registrasi
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/registrasi">Sebagai Customer</a></li>
                                <li><a class="dropdown-item" href="/registrasiMitra">Sebagai Mitra</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-success"></button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>



        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="https://images.unsplash.com/photo-1527847263472-aa5338d178b8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=874&q=80" width="100%" height="100%" alt="Foto 1">
                    </svg>

                    <div class="container">

                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="https://images.unsplash.com/photo-1536854353104-6496f84e39f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" width="100%" height="100%" alt="Foto 2">
                    </svg>

                    <div class="container">

                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="https://images.unsplash.com/photo-1522184074623-e772ae8ec940?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" width="100%" height="100%" alt="Foto 3">
                    </svg>

                    <div class="container">

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Menghubungkan Mitra <span class="text-muted">dengan para customer.</span>
                    </h2>
                    <p class="lead">Kami memiliki misi untuk memudahkan pemasaran petani tembakau, dalam memasarkan produk pada perusahaan maupun customer dalam kebutuhan mereka.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="https://img.freepik.com/free-vector/employees-giving-hands-helping-colleagues-walk-upstairs_74855-5236.jpg?t=st=1654488170~exp=1654488770~hmac=8ed2f377900b061819a1039f7b4fafd1b53c1674df2e19d9b9f0cfd1a25c4b6b&w=900" width="100%" height="100%">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Memudahkan Pembelian, <span class="text-muted">Tembakau dari petani.</span></h2>
                    <p class="lead">Petani dan customer dapat saling terhubung dan berdiskusi secara langsung lewat perantara program kami sehingga baik itu petani maupun customer tidak perlu repot.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="https://img.freepik.com/free-vector/digital-device-users-spending-time-together_74855-5234.jpg?t=st=1654490466~exp=1654491066~hmac=4bcd013ed26331b2662950aa2495da2b0e8e5eff47fde11972f5acdc45e246b2&w=996" width="100%" height="100%">

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Harga Terjangkau <span class="text-muted">Tanpa Perantara.</span></h2>
                    <p class="lead">Kami memahami permasalah yang sedang dialami oleh para petani tembakau dan customer, Melambungnya harga tembakau dikarenakan para pengepul yang kurang bertanggung jawab .</p>
                </div>
                <div class="col-md-5">
                    <img src="https://img.freepik.com/free-vector/people-using-online-payment-mobile-app-cartoon-illustration_74855-14481.jpg?t=st=1654488278~exp=1654488878~hmac=0be9b44575b5e6bd296b84c197d84f2abfbc601769c29507c169aa4f82372463&w=826" width="100%" height="100%">

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2017–2021 E-mbako PPL-E10. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>