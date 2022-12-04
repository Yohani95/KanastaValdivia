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
                            {{ Form::open(['route' => 'homeClientshow.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                              <div class="form-group">
                                {{ Form::text('name', null, ['class' => 'form-control me-2', 'placeholder' => 'Buscar Producto ...']) }}
                                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                              </div>
                                <div class="d-grid gap-2 col-6 mx-auto m-2" >
                                <button class="btn btn-outline-success pull-right" type="submit">Buscar</button>
                                
                                  </div>
                                {{ Form::close() }}
                            <!-- //search -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <nav class="navbar navbar-expand-lg bg-light">
 <div class="container">
 <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" href="{{ url('/') }}" style="color:crimson">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
          @foreach ($categories as $category)
            <li><a class="dropdown-item" href="#">{{$category->name}}</a></li>
            @endforeach 
            <li><hr class="dropdown-divider"></li>
            
          </ul> 
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
          <li class="nav-item m-2">
            <a href="nav-link" style="text-decoration: none;">
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle"
                   href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false"
                >
                    <span class="" style="color: #e03131;">
                        <i class="fa-duotone fas fa-cart-arrow-down fa-bounce" style="color: #e03131;"></i> {{ \Cart::getTotalQuantity()}}
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; ">
                    <ul class="list-group" style="margin: 20px;">
                        @include('HomeClients.cart-drop')
                    </ul>
                </div>
            </li>
        @endif
      </ul>
    </div>
  </div>
 </div>

</nav>