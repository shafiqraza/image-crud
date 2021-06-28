<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body class="bg-gray-100">
    <nav class="flex justify-between p-6 bg-white mb-5">
        <ul class="flex items-center">
            <li><a href="{{ route('home') }}" class="p-3">Home</a></li>
            <li><a href="{{ route("dashboard") }}" class="p-3">Dashboard</a></li>
            <li><a href="{{ route("posts") }}" class="p-3">Posts</a></li>
        </ul>
        <ul class="flex items-center">
            @auth()
            <li><a href="" class="p-3 capitalize">{{ auth()->user()->name }}</a></li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                @endauth

                @guest
            <li><a href="{{ route("login") }}" class="p-3">Login</a></li>
            <li><a href="{{ route("register") }}" class="p-3">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield("content")

    <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>
