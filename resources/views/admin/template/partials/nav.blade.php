<nav class="navbar navbar-toggleable-md navbar-light bg-faded">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="https://www.intensivettt.com"><img src="/images/logo-intensivettt.png" alt="logo intensivettt"></a>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
            <li class=" nav-item active"><a class="nav-link" href="#">Panel de control <span class="sr-only">(current)</span></a></li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PERSONAL</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item" href="#">Administradores</a>      
                 <a class="dropdown-item" href="#">Asistentes</a>      
                 <a class="dropdown-item" href="#">Entrenadores</a>      
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATALOGOS</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                <a class="dropdown-item" href="{{route('admin.estados.index')}}">Estados de la República</a>
                {{-- <li role="separator" class="divider"></li> --}}
                <a class="dropdown-item" href="{{route('admin.medidas.index')}}">Medidas</a>
                <a class="dropdown-item" href="{{route('admin.insumos.index')}}">Insumos</a>
                <a class="dropdown-item" href="{{route('admin.recetas.index')}}">Recetas</a>
                {{-- <li role="separator" class="divider"></li> --}}
                <a class="dropdown-item" href="{{route('admin.catvideos.index')}}">Categorias videos</a>
                <a class="dropdown-item" href="{{route('admin.videos.index')}}">Videos</a>
                {{-- <li role="separator" class="divider"></li> --}}
                <a class="dropdown-item" href="{{ route('admin.catsuplementos.index') }}">Marcas de suplementos</a>
                <a class="dropdown-item" href="{{ route('admin.suplementos.index') }}">Suplementos</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Mi cuenta</a></li>
                <li><a href="#">Pagos</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
  </div>
</nav>

