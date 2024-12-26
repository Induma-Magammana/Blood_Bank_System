<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Banking System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            *, ::after, ::before {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb;
            }
        </style>
    @endif
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-300">
    <div class="min-h-screen flex flex-col">
        <header class="bg-red-600 text-white py-6 shadow-lg">
            <div class="container mx-auto flex justify-between items-center px-4">
                <h1 class="text-3xl font-bold">Blood Banking System</h1>

                @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-white text-red-600 rounded-lg shadow hover:bg-gray-100">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-2 bg-white text-red-600 rounded-lg shadow hover:bg-gray-100">
                                Log In
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-4 py-2 bg-white text-red-600 rounded-lg shadow hover:bg-gray-100">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </header>

        <main class="flex-1 container mx-auto px-4 py-12">
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <a href="{{ url('/about') }}" class="flex flex-col items-start p-6 bg-white rounded-lg shadow-md transition transform hover:scale-105 hover:shadow-xl">
                    <h2 class="text-xl font-semibold text-red-600">About Us</h2>
                    <p class="mt-4 text-sm text-gray-600">
                        Learn more about our mission to provide safe and efficient blood donation and management services to communities.
                    </p>
                </a>

                <a href="{{ url('/donate') }}" class="flex flex-col items-start p-6 bg-white rounded-lg shadow-md transition transform hover:scale-105 hover:shadow-xl">
                    <h2 class="text-xl font-semibold text-red-600">Donate Blood</h2>
                    <p class="mt-4 text-sm text-gray-600">
                        Find out how you can become a donor and contribute to saving lives through our blood donation program.
                    </p>
                </a>

                <a href="{{ url('/services') }}" class="flex flex-col items-start p-6 bg-white rounded-lg shadow-md transition transform hover:scale-105 hover:shadow-xl">
                    <h2 class="text-xl font-semibold text-red-600">Our Services</h2>
                    <p class="mt-4 text-sm text-gray-600">
                        Explore the various blood-related services we offer, from blood screening to emergency blood supply.
                    </p>
                </a>

                <a href="{{ url('/contact') }}" class="flex flex-col items-start p-6 bg-white rounded-lg shadow-md transition transform hover:scale-105 hover:shadow-xl">
                    <h2 class="text-xl font-semibold text-red-600">Contact Us</h2>
                    <p class="mt-4 text-sm text-gray-600">
                        Reach out to our team for inquiries, support, or partnership opportunities.
                    </p>
                </a>
            </div>
        </main>

        <footer class="bg-gray-800 text-gray-400 py-6 text-center">
            <p>
                &copy; {{ date('Y') }} Blood Banking System.
            </p>
        </footer>
    </div>
</body>
</html>
