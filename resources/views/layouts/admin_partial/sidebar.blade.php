<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ route('dashboard')}}">NeoGuest Starbhak</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item {{ Route::currentRouteNamed( 'dashboard' ) ?  'active' : '' }}">
          <a href="{{ route('dashboard')}}" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Data</li>
        <li class="nav-item dropdown {{ Route::currentRouteNamed( 'data.walimurid' ) || Route::currentRouteNamed( 'data.perusahaan' )  ?  'active' : '' }}">
          <a href="" class="nav-link has-dropdown {{ Route::currentRouteNamed( 'data.walimurid' ) || Route::currentRouteNamed( 'data.perusahaan' )  ?  'active' : '' }}"  data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Kunjungan</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Route::currentRouteNamed( 'data.walimurid' ) ?  'active' : '' }}"><a class="nav-link " href="{{ route('data.walimurid')}}">Data Wali Murid</a></li>
            <li class="{{ Route::currentRouteNamed( 'data.perusahaan' ) ?  'active' : '' }}"><a class="nav-link " href="{{ route('data.perusahaan')}}">Data Perusahaan</a></li>
          </ul>
        </li>
        <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
        <li class="nav-item dropdown {{ Route::currentRouteNamed( 'export.walimurid' ) || Route::currentRouteNamed( 'export.perusahaan' )  ?  'active' : '' }}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Export Data Kunjungan</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link"  href="bootstrap-alert.html">Data Wali Murid</a></li>
            <li><a class="nav-link" href="bootstrap-badge.html">Data Perusahaan</a></li>
          </ul>
        </li>
       

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-dark btn-lg btn-block btn-icon-split" style="background-color: #35434C;">
          <i class="fas fa-rocket"></i> Documentation
        </a>
      </div>
  </aside>
</div>

