<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Breakpoint</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="assets/images/logo.svg" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">Dia: {{Carbon\Carbon::now('America/Lima')->format('d/m/Y')}}</p>
                            <p class="login-card-description">Hora: {{Carbon\Carbon::now('America/Lima')->format('H:i')}}</p>
                            <form action="#!">
                                <div class="form-group mb-12">
                                    <label for="" class="form-label">Marcador</label>
                                    <select class="form-select form-select-lg" name="" id="">
                                        <option selected>Entrada</option>
                                        <option value="">Salida Refrigerio</option>
                                        <option value="">Entrada Refrigerio</option>
                                        <option value="">Salida</option>
                                    </select>
                                </div>
                                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button"
                                    value="Marcar">
                            </form>
                            {{-- <a href="#!" class="forgot-password-link">Olvido la clave?</a>
                <p class="login-card-footer-text">No tiene cuenta? <a href="#!" class="text-reset">Registrese aqui</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
