<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">
<div class="container pt-5">

    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    {{__('Дашборд')}}
                </div>
                @yield('sidebar')
                <div class="card-body">
                    <ul class="nav flex-column nav-pills">
                        @foreach($navs as $nav)
                            <li class="nav-item mb-2">
                                <a href="{{$nav['link']}}" class="nav-link @if($nav['active']) active @endif">
                                    {{__($nav['title'])}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-8">
            @yield('content')
        </div>
    </div>


</div>

</body>
</html>
