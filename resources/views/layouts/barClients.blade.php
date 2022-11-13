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
                            <form class="d-flex" role="search" action="{{route('homeClientshow')}}" method="POST">
                              @csrf
                              <input class="form-control me-2" id="buscar" name="buscar" type="search" placeholder="Buscar Producto ..." aria-label="Search">
                              <a class="btn btn-outline-success" href="{{ route('homeClientshow') }} " type="submit">
                                <i class="fa fa-fw fa-eye"></i> 
                                Buscar
                              </a>
                            </form>
                            <!-- //search -->
                            <!-- cart details -->
                            <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                                    <form action="" method="post" class="last">
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
            Categorias
          </a>
          <ul class="dropdown-menu">
          @foreach ($products as $product)
            <li><a class="dropdown-item" href="#">{{$product->category->name}}</a></li>
            @endforeach
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