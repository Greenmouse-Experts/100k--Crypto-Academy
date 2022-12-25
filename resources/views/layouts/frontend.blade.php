<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="Welcome To {{config('app.name')}}">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <!-- Favocon -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/greenmouse-tech/image/upload/v1671715599/EProd%20Images/20221125_224354_1_bku9wb_1_voaw4e.jpg" type="image/x-icon">
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
    <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>{{config('app.name')}}</title>
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


    <script>
        $(document).ready(function() {
            $("#subscribeModal").modal('show');
        });
    </script>
    <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>

    <script>
            $(function(){
        $("body").on('hidden.bs.modal', function (e) {
            var $iframes = $(e.target).find("iframe");
            $iframes.each(function(index, iframe){
            $(iframe).attr("src", $(iframe).attr("src"));
            });
        });
        });
    </script>
</body>

</html>