<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute fixed-top">
  <div class="container">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="{{ route('home') }}"><img class = 'imglogo' src = 'img/n_opelogo.jpg' title="{{ $title }}"/></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="https://www.youtube.com/channel/UC6eK4uuUTeFMWcBYJhZxhpA" class="nav-link text-black2">
            <i class="material-icons">dashboard</i> {{ __('Nuestra Ope') }}
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">
          <a href="{{ route('quienes-somos') }}" class="nav-link text-black2">
            <i class="material-icons">person_add</i> {{ __('Sobre Nosotros') }}
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
          <a href="{{ route('nuestros-amigos') }}" class="nav-link text-black2">
            <i class="material-icons">face</i> {{ __('Nuestros amigos') }}
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('mas-info') }}" class="nav-link text-black2">
            <i class="material-icons">control_point</i> {{ __('Más información') }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
