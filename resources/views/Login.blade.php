<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/Login.css')}}">
    <link rel="stylesheet" href="{{asset('css/logo.css')}}">
</head>

<body>
    <div class="container-fluid">
        <h3 class="text-center text-light py-4 mt-5 login-title ">SOLICITUD DE REQUERIMIENTOS</h3>
        <div class="container w-25 border p-3 ">
            <img class="logo" src="{{ asset('img/SEDUMOPH.jpeg') }}" alt="Logo de la empresa">
            <h5 class="text-center p-3">Ingresar al Sistema de Requerimientos</h5>
            <hr>
            <form method="POST" action="{{route('Login')}}">
                @csrf
                @if (session('info'))
                <h5 class="alert alert-danger">{{ session('info') }}</h5>
                @endif
                <div class="mb-3">
                    <label class="Letras form-label"> <strong>Usuario</strong></label>
                    <input type="text" class="form-control" name="Usuario" required>
                </div>
                <div class="mb-3">
                    <label class="Letras form-label"><strong>Contraseña</strong></label>
                    <input type="password" class="form-control" name="Contrasena" required>
                </div>
                <button type="submit" class="btn btn-primary" name="Ingresar">Ingresar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>