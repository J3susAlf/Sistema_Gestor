<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/Adm.css')}}">
</head>

<body>
    <div id="app">
        <div id="content">
            <nav class="navbar navbar-expand-lg " style="background-color: #800000;">
                <div class="container-fluid">
                    <button id="sidebarToggle" class="btn btn-light">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="Adm navbar-brand p-2 text-light">Administrador</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    </div>
                </div>
            </nav>
            @yield('Administrador')
        </div>
        <div id="sidebar" class="p-3 " >
            <div class="offcanvas-header mt-1">
           
                <h5 class="SysReq offcanvas-title">SysReq</h5>

            </div>
            <hr>
            <div class="offcanvas-body p-2 mt-3">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Solicitudes')}}">Solicitudes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Estatus')}}">Estatus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Registro')}}">Registros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Productos')}}">Productos</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav ml-auto p-2 mt-3">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Perfil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" >Nombre</a></li>
                        <li class="dropdown-item">
                            <a class="nav-link">Configuración</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('Login')}}">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('js/navbar.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>