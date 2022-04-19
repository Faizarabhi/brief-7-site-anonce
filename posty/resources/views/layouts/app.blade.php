<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
  <nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex item-center">
        <li><a href="/" class="p-3">Home</a></li>
        <li><a href="{{ route('dashboard')}}" class="p-3">Dashoboard</a></li>
        <li><a href="{{ route('posts')}}" class="p-3">Post</a></li>
    </ul>
    <ul class="flex item-center">
        @auth
        <li><a href="" class="p-3">{{ auth()->user()->name}}</a></a></li>
        <form action="{{ route('logout')}}" method="post" class="inline p-3">
            @csrf
            <button type="submit" class="p-3">Logout</button>
        </form>
        @endauth
        @guest
        <li><a href="{{ route('register')}}" class="p-3">Register</a></li>
        <li><a href="{{ route('login')}}" class="p-3">Login</a></li>
        @endguest
    </ul>
  </nav>
  @yield('content')
</body>
</html>
