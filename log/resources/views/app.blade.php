<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-xl font-bold">My Application</h1>
            <nav>
                <ul class="flex space-x-4">
                    @auth
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                                    Logout
                                </button>
                            </form>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700">Register</a>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <footer class="bg-white shadow mt-4">
        <div class="container mx-auto text-center p-4">
            <p class="text-gray-600">© {{ date('Y') }} My Application. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
