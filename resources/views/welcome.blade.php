<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo Kanasta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
  <body>
  <div class="header-bot">
            <div class="container">
                <div class="row header-bot_inner_wthreeinfo_header_mid">
                    <!-- logo -->
                    <div class="col-md-3 logo_agile">
                        <h1 class="text-center" style="color:crimson">
                                <img src="images/LogoTC.png" alt=" " class="img-fluid">TodoKnasta
                        </h1>
                    </div> 
                    <!-- //logo -->
                    <!-- header-bot -->
                    <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                        <div class="row">
                            <!-- search -->
                            <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar Producto ..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar </button>
      </form>
                            <!-- //search -->
                            <!-- cart details -->
                            <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                                    <form action="#" method="post" class="last">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="display" value="1">
                                        <button class="btn w3view-cart" type="submit" name="submit" value="">
                                            <i class="fas fa-cart-arrow-down"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- //cart details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <nav class="navbar navbar-expand-lg bg-light">
 <div class="container">
 <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" href="{{ url('/') }}" style="color:crimson">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        @if (Route::has('login'))
        <li class="nav-item">
        @auth
                        <a class="nav-link " aria-current="page" href="{{ url('/home') }}" class="">Home Admin</a>
                    @else
                        <a class="nav-link " aria-current="page" href="{{ route('login') }}" class="">Inicio Sesión</a>

                        @if (Route::has('register'))
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('register') }}" class="">Registrar</a>
                        </li>
                        @endif
                    @endauth
        </li>
        @endif
      </ul>

         
      
    </div>
  </div>
 </div>

</nav>
@include('carrusel.carrusel')

            <main class="py-4">
            @yield('content')
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

