  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-ligth bg-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.home') }}" class="nav-link">Principal</a>
      </li>
     {{--  <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contacto</a>
      </li> --}}
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver todos los mensajes</a>
        </div>
      </li> --}}
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a id="notificacionMensajeSolicitud" class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-bell"></i>
          @if ($cantidad_mensajes ?? '' > 0)
          <span class="badge badge-danger navbar-badge">{{ $cantidad_mensajes ?? '' }}</span>
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">{{ $cantidad_mensajes ?? '' }} Notificaciones</span>
          <div class="dropdown-divider"></div>
          <a href="{{ route('admin.mensaje.index') }}" class="dropdown-item">
            <i class="fas fa-envelope mr-3"></i> {{ $cantidad_mensajes ?? '' }} Nuevos Mensajes
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-3"></i> 0 Solicitud Preinscripción
            <span class="float-right text-muted text-sm">12 hs</span>
          </a>          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <a href="{{route('admin.logout') }}" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-3 mt-1 fa-lg float-right"></i>Salir
          </a>      
        </div>
      </li>
     {{--  <li class="nav-item dropdown">
        <a class="nav-link" data-toogle="dropdown" href="#">
          <i class="fas fa-th-large"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">12 Notifiaciones</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-3"></i> 4 Nuevos Mensajes
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('admin.logout') }}" class="dropdown-item dropdown-footer">
            <i class="fas fa-sign-out-alt mr-3 float-right">Salir</i>
          </a>
      </li> --}}
    </ul>
  </nav>
  <!-- /.navbar -->