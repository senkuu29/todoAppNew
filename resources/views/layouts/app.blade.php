<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- title --}}
    <title>{{ $title }} - {{ config('app.name') }}</title>

    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/font/bootstrap-icons.min.css') }}"> 
</head>
<body>
    
    @include('partials.navbar') <!-- Navbar -->

    @include('partials.content') <!-- Content Section -->

      <!-- Bootstrap JS -->
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>