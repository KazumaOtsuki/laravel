<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>社員管理システム @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            .container-m{
                margin-top: 16px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <nav class="navbar navbar-dark bg-primary"">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">社員管理システム</a>
                </div>
            </nav>
            <div class="container container-m">
                @yield('content')
            </div>
        </div>
    </body>
</html>