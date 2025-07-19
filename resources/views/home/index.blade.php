<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
    <link rel="shortcut icon" href="{{ asset('admin/images/CSB.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.css">

    {{-- styles --}}
    @include('home.partials.styles')
</head>

<body>
    <!-- Banner Section header -->
     @include('home.partials.header')

    <!-- Navigation Menu -->
     @include('home.partials.menu')

    <!-- Hero Slider -->
     @include('home.partials.slider')

    <!-- Three Columns Section -->
    @include('home.partials.colum')

    <!-- Featured Content Section -->
    @include('home.partials.contenet')

    <!-- Video Background Section -->
   @include('home.partials.video')

    <!-- Partners Section -->
    @include('home.partials.logos')

    <!-- Footer -->
    @include('home.partials.footer')

    <!-- script -->
    @include('home.partials.scripts')
    
</body>
</html>
