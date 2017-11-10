<nav class="navbar navbar-toggleable-md navbar-light bg-faded">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
  </button>

  <a class="navbar-brand" href="https://www.intensivettt.com"><img src="/images/logo-intensivettt.png" alt="logo intensivettt"></a>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
            <li class=" nav-item active"><a class="nav-link" href="#">Panel de control <span class="sr-only">(current)</span></a></li>
            <li class="nav-item">
              <a href="" class="nav-link">CLIENTES</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">ENTRENADORES</a>
            </li>
            <li>
              <a href="{{route('empleados.index')}}" class="nav-link">PERSONAL</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATALOGOS</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                <a class="dropdown-item" href="{{route('estados.index')}}">Estados de la República</a>
                {{-- <li role="separator" class="divider"></li> --}}
                <a class="dropdown-item" href="{{route('medidas.index')}}">Medidas</a>
                <a class="dropdown-item" href="{{route('insumos.index')}}">Insumos</a>
                <a class="dropdown-item" href="{{route('recetas.index')}}">Recetas</a>
                {{-- <li role="separator" class="divider"></li> --}}
                <a class="dropdown-item" href="{{route('catvideos.index')}}">Categorias videos</a>
                <a class="dropdown-item" href="{{route('videos.index')}}">Videos</a>
                {{-- <li role="separator" class="divider"></li> --}}
                <a class="dropdown-item" href="{{ route('catsuplementos.index') }}">Marcas de suplementos</a>
                <a class="dropdown-item" href="{{ route('suplementos.index') }}">Suplementos</a>
                <a class="dropdown-item" href="{{ route('frases.index') }}">Frases</a>
              </div>
            </li>
      </ul>
        <ul class="navbar-nav ml-auto">      
          <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MI CUENTA </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Mi perfil</a>
                <a class="dropdown-item" href="#">Cerrar Sesión</a>
              </div>
          </li>
        </ul>
  </div>
</nav>

