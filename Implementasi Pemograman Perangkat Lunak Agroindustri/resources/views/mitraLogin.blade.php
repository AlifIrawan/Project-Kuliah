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
    <title>Login Page</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @if(session()->has('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif



                <div class="background">
                    <center>
                        <img src="/img/logo.png" alt="@" width="193" height="172">
                        <p class="montserrat">Login Mitra</p>
                        <div class="col-lg-6">
                            <form action="/loginMitra" method="post">
                                @csrf
                                <div class="mb-3 poppins">
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" require class="form-control @error('email') is-invalid @enderror" autofocus placeholder="Masukkan email anda *">
                                </div>
                                @error('email')
                                <p>{{ $message }}</p>
                                @enderror
                                <div class="mb-3 poppins">
                                    <input type="password" id="password" name="password" required class="form-control" placeholder="Password *">
                                </div>
                                <button type="submit" name='button' class="btn btn-success mybtn m-4 poppinslg">LOGIN</butt>
                            </form>
                        </div>
                        <p class="poppins">Belum Bergabung? <a href="/registrasiMitra">Klik disini</a> untuk bergabung *</p>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>

</html>