<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-dark-warning">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">TalkBee</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
         @permission('show-report')     
        <li class="nav-item">
          <a href="/reports" class="nav-link {{Request::is('reports*') ? 'active' : '' }}">
            <!-- <i class="nav-icon fas fa-th"></i> -->
            <i data-feather="file-text"></i>
            <p>
              Relatórios
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
          @endpermission
        </li>
        <li class="nav-item">
          <a href="/chat" class="nav-link {{Request::is('chat*') ? 'active' : '' }}">
            <!-- <i class="nav-icon fas fa-th"></i> -->
            <i data-feather="message-square"></i>
            <p>
            
              Conversas
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        @permission('show-user')
        <li class="nav-item">
          <a href="/users" class="nav-link {{Request::is('users*') ? 'active' : '' }}">
            <!-- <i class="nav-icon fas fa-th"></i> -->
            <i data-feather="users"></i>
            <p>
              Usuários
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        @endpermission

        @permission('show-channel')
        <li class="nav-item">
          <a href="/channels" class="nav-link {{Request::is('channels*') ? 'active' : '' }}">
            <!-- <i class="nav-icon fas fa-th"></i> -->
            <i data-feather="hexagon"></i>
            <p>
              Canais
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        @endpermission
        @permission('show-departament')
        <li class="nav-item">
          <a href="/departaments" class="nav-link {{Request::is('departaments*') ? 'active' : '' }}">
            <!-- <i class="nav-icon fas fa-th"></i> -->
            <i data-feather="flag"></i>
            <p>
              Departamentos
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        @endpermission

        @permission('add-perfil')
        <li class="nav-header">PAINEL DE CONTROLE</li>
        <li class="nav-item">
          <a href="/roles" class="nav-link {{Request::is('roles*') ? 'active' : '' }}">
            <!-- <i class="nav-icon fas fa-th"></i> -->
            <i data-feather="award"></i>
            <p>
              Perfis de Usuário
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        @endpermission
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>