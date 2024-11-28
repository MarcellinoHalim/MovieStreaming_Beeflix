<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col mt-3 mb-2">
                <img src="{{ asset('images/logo.png') }}" alt="" width="100px">
            </div>
        </div>
        <div class="row">
            <div class="col">@yield('content')</div>
        </div>
        <div class="row">
            <div class="col mt-2 mb-3 text-center">&copy;2024 Marcellino Halim</div>
        </div>
    </div>
    
</body>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</html>