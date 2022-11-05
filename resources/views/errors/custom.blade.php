<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Error 503 | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/pages/error/style-503.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

</head>
<body class="error503 text-center">
    
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mr-auto mt-5 text-md-left text-center">
                <a href="index.html" class="ml-md-5">
                    <img alt="image-503" src="{{ asset('public/assets/img/90x90.jpg')}}" class="theme-logo">
                </a>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid error-content">
        <div class="">
            <h1 class="error-number">404</h1>
            <p class="mini-text">Ooops!</p>
            <p class="error-text">Unknown error occured.</p>
            <a href="{{route('dashboard')}}" class="btn btn-secondary mt-5">Go Back</a>
        </div>
    </div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('public/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('public/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>