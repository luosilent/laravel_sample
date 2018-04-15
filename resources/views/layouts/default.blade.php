<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'Sample ') - luosilent
        </title>
        <link href="/css/app.css" rel="stylesheet">
        </link>
    </head>
    <body>
        @include('layouts._header')
        <div class="container">
            <div class="col-md-offset-1 col-md-10">
                @yield('content')
        @include('layouts._footer')
            </div>
        </div>
    </body>
</html>