

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
  
      <div class="d-flex align-items-center justify-content-between">
        <a href="/index" class="logo d-flex align-items-center">
          <img src="{{asset('assets/img/bus.png')}}" alt="bus">
         <!-- <i class=" ri-bus-2-fill"></i>-->
          <span class="d-none d-lg-block">DETEPTD
          </span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->
  
    </header><!-- End Header -->
  
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
  
      <ul class="sidebar-nav" id="sidebar-nav">
  
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Opciones</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="application/create">
                <i class="bi bi-circle"></i><span>Crear solicitud</span>
              </a>
            </li>
            <li>
              <a href="application/">
                <i class="bi bi-circle"></i><span>Status de solicitud</span>
              </a>
            </li>
          </ul>    
        </li><!-- End Components Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="application/create">
            <i class="bi bi-card-list"></i>
            <span>Crear solicitud</span>
          </a>
        </li><!-- End Crear solicitud Page Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="application/">
            <i class="bi bi-person"></i>
            <span>Estatus de Trámite</span>
          </a>
        </li><!-- End estatus de tramite Page Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="/soporte">
            <i class="bi bi-envelope"></i>
            <span>contactanos</span>
          </a>
        </li><!-- End contactanos Page Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="/register">
            <i class="bi bi-card-list"></i>
            <span>Registrate</span>
          </a>
        </li><!-- End Register Page Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="/login">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Inicia sesión</span>
          </a>
        </li><!-- End Login Page Nav -->
  
        <li class="nav-item">
          <form  method="POST" action="{{route('logout')}}">
            @csrf
            <a class="nav-link collapsed" href="{{route('logout')}}" onclick="event.preventDefault();
            this.closest('form').submit();">
            <i class="bi bi-box-arrow-right"></i>
            <span>Cerrar sesión</span></a>
          </form>
        </li><!-- End Error 404 Page Nav -->
  
      </ul>
  
    </aside><!-- End Sidebar-->
