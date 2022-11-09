<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="Welcome To EPROD">
        <meta name="viewport" content="Welcome To EPROD">
        <!-- Favocon -->
        <link rel="shortcut icon" href="{{URL::asset('assets/images/fav.png')}}" type="image/x-icon">
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Style -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.map')}}">
        <link rel="stylesheet" href="{{URL::asset('auth/style.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- AOS Amination -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <title>1ook Crypto Academy-Home</title>
    </head>
    <body>        
        <!-- Header -->
            @includeIf('layouts.frontend-header')
        <!-- Header Ends -->
        
        <!-- Page-Content -->
            @yield('page-content')
        <!-- Page-Content Ends -->

        <!-- Footer -->
            @includeIf('layouts.frontend-footer')
        <!-- Footer Ends -->  
        <script>
            AOS.init();
        </script>
        <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/main.js')}}"></script>
    </body>
</html>