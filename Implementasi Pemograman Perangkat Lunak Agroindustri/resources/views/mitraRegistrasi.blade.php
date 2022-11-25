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
    <link rel="stylesheet" href="/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <title>Registrasi Page</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="background">
                    <center>
                        <img src="/img/logo.png" alt="@" width="193" height="172">
                        <p class="montserrat">Registrasi Mitra</p>
                        <div class="col-lg-6">
                            <form action="/registrasiMitra" method="post">
                                @csrf
                                <div class="mb-3 poppins">
                                    <input type="text" name="username" required class="form-control @error('username')is-invalid @enderror" autofocus placeholder="Masukkan username anda *">
                                </div>
                                <div class="mb-3 poppins">
                                    <input type="email" name="email" required class="form-control @error('email')is-invalid @enderror" placeholder="Email yang digunakan *">
                                </div>
                                <div class="mb-3 poppins">
                                    <input type="password" name="password" required class="form-control @error('password')is-invalid @enderror" placeholder="Password *">
                                </div>
                                <button type="submit" class="btn btn-success mybtn m-4 poppinslg">Daftar</button>
                            </form>
                        </div>
                        <p class="poppins">Sudah Bergabung? <a href="/loginMitra">Ayo Login</a> *</p>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>

</html>