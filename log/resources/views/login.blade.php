<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Login</h1>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block">Email:</label>
                <input type="email" name="email" required class="border rounded w-full py-2 px-3">
            </div>
            <div class="mb-4">
                <label for="password" class="block">Password:</label>
                <input type="password" name="password" required class="border rounded w-full py-2 px-3">
            </div>
            <div class="mb-4">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Login</button>
        </form>

        <div class="mt-4">
            <a href="{{ url('register') }}" class="text-blue-500">Don't have an account? Register here</a>
        </div>
    </div>
</body>
</html>
