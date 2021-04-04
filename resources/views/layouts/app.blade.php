<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{asset('/template')}}/css/app.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="shortcut icon" href="{{asset('/template')}}/img/icons/icon-48x48.png" />
	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

	<link href="{{asset('/template')}}/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('/template')}}/img/icons/icon-48x48.png" />

	<link href="{{asset('/template')}}/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    @yield('csslink')
</head>
<body>
<div class="wrapper">
<nav id="sidebar" class="sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="index.html">
			<span class="align-middle">Blogwee</span>
		</a>

		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Pages
			</li>
            @auth
                        @if (auth()->user()->isAdmin())
            <li class="sidebar-item {{ Request::is('users/index') ? 'active' : '' }}" >
				<a class="sidebar-link" href="/users/index">
					<i class="align-middle" data-feather="users"></i> <span class="align-middle">Users</span>
				</a>
			</li>
            @endif

			<li class="sidebar-item {{ Request::is('home') ? 'active' : '' }}" href="{{route('tags.index')}}"">
				<a class="sidebar-link" href="/home">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
				</a>
			</li>
			<li class="sidebar-item {{ Request::is('tags*') ? 'active' : '' }}" href="{{route('tags.index')}}">
				<a class="sidebar-link" href="/tags">
					<i class="align-middle" data-feather="tag"></i> <span class="align-middle">Tag</span>
				</a>
			</li>
            <li class="sidebar-item {{ Request::is('categories*') ? 'active' : '' }}" href="{{route('tags.index')}}">
				<a class="sidebar-link" href="{{route('categories.index')}}">
					<i class="align-middle" data-feather="hash"></i> <span class="align-middle">Castegories</span>
				</a>
			</li>
            <li class="sidebar-item {{ Request::is('posts*') ? 'active' : '' }}" href="{{route('tags.index')}}">
				<a class="sidebar-link" href="{{route('posts.index')}}">
					<i class="align-middle" data-feather="layers"></i> <span class="align-middle">Post</span>
				</a>
			</li>
			<li class="sidebar-item {{ Request::is('users/*/show') ? 'active' : '' }}" >
				<a class="sidebar-link" href="{{route('user.tampil',auth()->user()->id)}}">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
				</a>
			</li>
			<li class="sidebar-header">
				Tools & Components
			</li>
			<li class="sidebar-item {{ Request::is('users/*/profile') ? 'active' : '' }}" >
				<a class="sidebar-link" href="{{route('user.edit',auth()->user()->id)}}">
					<i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
				</a>
			</li>
            <li class="sidebar-item {{ Request::is('trashed*') ? 'active' : '' }}" >
				<a class="sidebar-link" href="{{route('posts.trashed')}}">
					<i class="align-middle" data-feather="trash"></i> <span class="align-middle">Trashed</span>
				</a>
			</li>
            @endauth
		</ul>
		<div class="sidebar-cta">
			<div class="sidebar-cta-content">
				<strong class="d-inline-block mb-2">Kelompok 4</strong>
				<div class="mb-3 text-sm">
					Are you looking for more components? Check out our premium version.
				</div>
				<div class="d-grid">
					<a href="gitlab.com" target="_blank" class="btn btn-primary">Find us on gitlab</a>
				</div>
			</div>
		</div>
	</div>
</nav>
<div class="main">
	<nav class="navbar navbar-expand navbar-light navbar-bg">
		<a class="sidebar-toggle d-flex">
			<i class="hamburger align-self-center"></i>
		</a>
		<a class="nav-link" href="/">Homepage
		</a>
	

		<div class="navbar-collapse collapse">
			<ul class="navbar-nav navbar-align">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                    <i class="align-middle" data-feather="settings"></i>
                                </a>
                                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                     <span class="text-dark">  {{ Auth::user()->name }} <span class="caret"></span></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                   
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
			</ul>
           
                          
                        @endguest
		</div>
	</nav>
 
<div class="container-fluid p-0">
<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
                        @yield('title')
						</div>

						<div class="col-auto ms-auto text-end mt-n1">
							@copyright kelompok4
						</div>
					</div>
					<div class="row">
        @yield('content')
        </div>
        </div>
				</div>
			</footer>
		</div>
	</div>
	@include('sweetalert::alert')
    @yield('script');
    <script src="{{asset('/vendor/sweetalert/sweetalert.all.js')}}"></script>
	<script src="{{asset('/template')}}/js/app.js"></script>
</div></body>
</html>
