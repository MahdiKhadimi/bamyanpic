<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <script src={{ asset('assets/js/jquery.min.js') }}></script>
    <script src={{ asset('assets/js/bootstrap.min.js') }}></script>
    <title>Document</title>
</head>
<body>
   
    <x-alert type="info" class="mt-14"  dismissible='true' >
        <h4 class="heading">
            Success!
        </h4>
        <p class="mt-0">
            The data has been sent successfully {{ $component->icon() }}
        </p>
    </x-alert>

   <x-form action="/images" method="GET">
       <input type="text" name="name">
       <input type="submit" value="Save">
   </x-form>

        
</body>
</html>