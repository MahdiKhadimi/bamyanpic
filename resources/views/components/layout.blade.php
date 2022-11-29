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
    <title>{{ $title }}} Bamyanpic</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <x-icon src="logo.svg" class="d-inline-block align-text-top color-light" style="width: 25px" />
                Bamyanpic
            </a>
            <div class="d-flex">
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