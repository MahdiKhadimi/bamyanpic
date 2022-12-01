@props([
    'title'=>''
])
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="In this app users upload images for free ">
    <meta name="author" content="Mahdi Khadimi Software Engineer">
    <title>{{ $title }} | Bamyanpic</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <x-icon src="logo.svg" class="d-inline-block align-text-top color-light" style="width: 25px" />
                {{ ucfirst(config('app.name', 'Laravel')) }}
            </a>  
          <div class="container">
                    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <l class="nav-item"><a href="{{ route('images.index') }}" class="nav-link active">Images</a></l>
                        <l class="nav-item"><a href="" class="nav-link">Favorite</a></l>

                    </ul>
                    
                  
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ms-2">
                                    <a class="btn btn-outline-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item ms-2">
                                    <a class="btn btn-info" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

            {{--  <div class="d-flex">
                <a href="{{ route('images.create') }}" class="btn btn-success">Create Image</a>
                {{--  <a href='#' class="btn btn-outline-secondary me-2">Register</a>
                <a href='#' class="btn btn-danger">Login</a>  --}}
            </div>  
        </div>
    </nav>
    <section>
    {{ $slot }}
     
    </section>

    <footer class="bg-light text-muted py-3 mt-5 border-top col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="container-fluid">
            <p class="float-end mb-1">
                <a href="#" class="text-decoration-none">Back to top</a>
            </p>
            <p>Bamyanpic provides beautiful, high quality & royalty free photos shared by creators everywhere.</p>
            <p>&copy; 2021 Bamyanpic</p>
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/npm.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>  
</html>