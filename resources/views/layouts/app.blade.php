<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do App</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        nav { background-color: #333; color: white; padding: 10px; }
        nav a { color: white; margin-right: 10px; text-decoration: none; }
        nav span { margin-right: 10px; }
        main { padding: 20px; }
        .container { max-width: 600px; margin: auto; }
        form input, form textarea, form button {
            display: block; width: 100%; margin-bottom: 10px; padding: 8px;
        }
        ul { list-style-type: none; padding: 0; }
        li { border-bottom: 1px solid #ddd; padding: 10px 0; }
        li form { display: inline; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('todos.index') }}">Home</a>
        @auth
            <span>Hai, {{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" style="background:none; border:none; color:white; cursor:pointer;">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
