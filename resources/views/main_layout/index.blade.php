<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporta</title>
    <!-- Tautan ke Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Tautan ke Font Awesome Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.rawgit.com/kimmobrunfeldt/progressbar.js/1.0.1/dist/progressbar.min.js"></script>
    {{-- https://kimmobrunfeldt.github.io/progressbar.js/ --}}
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- https://www.chartjs.org/ --}}

    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
</head>

    @include('main_layout.css')
</head>
<body>
    @yield('body_main_layout')
    @include('main_layout.js')
    
    <!-- Skrip Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
</body>
</html>