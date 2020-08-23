<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light navbar-warning">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item mr-2">
      <div class="user-panel d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="{{ Auth::user()->name }}">
        </div>
        <div class="info">
          <span class="d-block">{{ Auth::user()->name }}</span>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link text-danger"
        data-widget="control-sidebar"
        data-slide="true"
        role="button"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        href="{{ route('logout') }}"
      >
        Sair
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
  </ul>
</nav>
<!-- /.navbar -->