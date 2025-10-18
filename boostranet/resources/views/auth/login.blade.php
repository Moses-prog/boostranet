<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Boostranet</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white/50 dark:bg-gray-800/50 backdrop-blur-sm rounded-lg shadow-lg p-8 w-full max-w-md">
            <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-gray-200 mb-6">Login</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300 mb-2" for="email">Email</label>
                    <input class="w-full px-3 py-2 bg-white/50 dark:bg-gray-700/50 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:border-blue-500" type="email" id="email" name="email" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 dark:text-gray-300 mb-2" for="password">Password</label>
                    <input class="w-full px-3 py-2 bg-white/50 dark:bg-gray-700/50 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:border-blue-500" type="password" id="password" name="password" required>
                </div>
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center text-gray-700 dark:text-gray-300">
                        <input type="checkbox" name="remember" class="mr-2"> Remember me
                    </label>
                    <a href="#" class="text-blue-500 hover:underline">Forgot password?</a>
                </div>
                <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg" type="submit">Login</button>
            </form>
            <p class="text-center text-gray-700 dark:text-gray-300 mt-6">
                Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register</a>
            </p>
        </div>
    </div>
</body>
</html>