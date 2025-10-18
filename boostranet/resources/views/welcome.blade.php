<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boostranet</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
        <div class="container mx-auto px-4">
            <header class="flex justify-between items-center py-6">
                <h1 class="text-3xl font-bold">Boostranet</h1>
                <nav>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-lg">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-lg mr-4">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-lg">Register</a>
                            @endif
                        @endauth
                    @endif
                </nav>
            </header>

            <main>
                <div class="py-20 text-center">
                    <h2 class="text-5xl font-bold mb-4">Supercharge Your Business</h2>
                    <p class="text-lg mb-8">The ultimate intranet solution for your company to boost productivity and collaboration.</p>
                    <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg">Get Started for Free</a>
                </div>

                <div class="py-16">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                            <h3 class="text-2xl font-bold mb-4">Internal Communication</h3>
                            <p>A central hub for company news, announcements, and discussions. Keep everyone on the same page.</p>
                        </div>
                        <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                            <h3 class="text-2xl font-bold mb-4">Employee Directory</h3>
                            <p>Easily find and connect with colleagues. See reporting lines and team structures at a glance.</p>
                        </div>
                        <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                            <h3 class="text-2xl font-bold mb-4">Knowledge Base</h3>
                            <p>A searchable repository for all your company's documents, policies, and procedures.</p>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="py-6 text-center">
                <p>&copy; {{ date('Y') }} Boostranet. All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>