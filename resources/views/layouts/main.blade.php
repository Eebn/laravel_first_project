<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('about.index')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{route('contact.index')}}">Contacts</a>
                        </li>
                        @can('view', auth()->user())
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('admin.post.index')}}">Admin</a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </div>
        </nav>
        {{--                <ul>--}}
        {{--                    <li><a href="{{route('main.index')}}">Main</a></li>--}}
        {{--                    <li><a href="{{route('post.index')}}">Posts</a></li>--}}
        {{--                    <li><a href="{{route('contact.index')}}">Contacts</a></li>--}}
        {{--                    <li><a href="{{route('about.index')}}">About</a></li>--}}
        {{--                </ul>--}}
    </div>
    @yield('content')
</div>
</body>
</html>
