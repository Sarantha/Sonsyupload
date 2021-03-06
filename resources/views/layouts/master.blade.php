<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-navwhite border-bottom">
    <button class="navbar-toggler sideMenuToggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto navnew">
        <li class="nav-item">
          <a href="#" class="nav-link sideMenuToggler tog" style="margin-left:78px;"><span class="navbar-toggler-icon"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="wrapper d-flex">
    <div class="sidemenu shadow-lg">
      <div class="sidebar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link sideLink px-2 pt-2" style="border-bottom:0.5px solid #62666d;"><img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg" alt="Avatar" class="avatar shadow"><span class="text"><span class="text pl-2">{{ Auth::user()->name }}</span></a>
          </li>
          <!-- <div class="dropdown-divider bg-mattGray"></div> -->
          <li class="nav-item">
          <router-link to="/dashboard" class="nav-link sideLink px-2"><i class="material-icons icon">dashboard</i><span class="text">Dashboard</span></router-link>
          </li>
          
          <li class="nav-item">
            <router-link to="/users" class="nav-link sideLink px-2"><i class="material-icons icon">person</i><span class="text">Users</span></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/test1" class="nav-link sideLink px-2"><i class="material-icons icon">insert_chart</i><span class="text">chart</span></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/test2" class="nav-link sideLink px-2"><i class="material-icons icon">settings</i><span class="text">Settings</span></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/test3" class="nav-link sideLink sideMenuToggler px-2"><i class="material-icons icon">view_list</i><span class="text">Resize</span></router-link>
          </li>
          <li class="nav-item">

            <a class="nav-link sideLink sideMenuToggler px-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="material-icons icon">power_settings_new</i><span class="text">
                                                     <span class="text">{{ __('Logout') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>  
        </li>
        </ul>
      </div>
    </div>
    <div class="content">
        <div class="container-fluid mt-3">
            <router-view></router-view>
        </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>