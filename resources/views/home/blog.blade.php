<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Cultural - Asentamiento Taíno</title>
     <link rel="shortcut icon" href="{{ asset('admin/images/CSB.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- styles --}}
    @include('home.partials.stylesblog')
    
</head>

<body>
    <!-- Banner Section header -->
     @include('home.partials.header')

    <!-- Navigation Menu -->
     @include('home.partials.menu')

    <!-- Nuevo Slider de Posts Destacados -->
    @include('home.partials.sliderblog')

    <!-- Sección de Etiquetas y Filtro -->
    @include('home.partials.filtroblog')

    <!-- Sección de Columnas con Últimas Entradas -->
    @include('home.partials.entradasblog')

    <!-- Sección de Timeline Histórica -->
   @include('home.partials.lineahistorica') 

    <!-- script -->
    @include('home.partials.scriptblog')

    <!-- Video Background Section -->
   @include('home.partials.video')

   <!-- Footer -->
    @include('home.partials.footer')
</body>
</html>