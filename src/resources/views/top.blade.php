<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <main>
            <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
                <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
                    <header class="flex justify-between items-center py-4 md:py-8 mb-8 md:mb-12 xl:mb-16">
                        <!-- logo - start -->
                        <a href="/" class="inline-flex items-center text-black-800 text-2xl md:text-3xl font-bold gap-2.5" aria-label="logo">
                            <svg width="95" height="94" viewBox="0 0 95 94" class="w-6 h-auto text-indigo-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M96 0V47L48 94H0V47L48 0H96Z" />
                            </svg>
                        Flowrift
                        </a>
                        <!-- logo - end -->

                        <!-- nav - start -->
                        <nav class="hidden lg:flex gap-12">
                            <a href="#" class="text-indigo-500 text-lg font-semibold">Home</a>
                            <a href="#" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">Features</a>
                            <a href="#" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">Pricing</a>
                            <a href="#" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">About</a>
                        </nav>
                        <!-- nav - end -->

                        <!-- buttons - start -->
                        <a href="{{ route('contact.index') }}" class="hidden lg:inline-block bg-gray-200 hover:bg-gray-300 focus-visible:ring ring-indigo-300 text-gray-500 active:text-gray-700 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">お問い合わせ</a>

                        <button type="button" class="inline-flex items-center lg:hidden bg-gray-200 hover:bg-gray-300 focus-visible:ring ring-indigo-300 text-gray-500 active:text-gray-700 text-sm md:text-base font-semibold rounded-lg gap-2 px-2.5 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        Menu
                        </button>
                        <!-- buttons - end -->
                    </header>

                    <section class="flex flex-col lg:flex-row justify-between gap-6 sm:gap-10 md:gap-16">
                        <!-- content - start -->
                        <div class="xl:w-5/12 flex flex-col justify-center sm:text-center lg:text-left lg:py-12 xl:py-24">
                            <h1 class="text-center text-black-800 text-4xl sm:text-5xl md:text-6xl font-bold mb-8 md:mb-12">レストランサイト</h1>
                        </div>
                        <!-- content - end -->

                        <!-- image - start -->
                        <div class="xl:w-5/12 h-48 lg:h-auto bg-gray-100 overflow-hidden shadow-lg rounded-lg">
                            <img src="https://images.unsplash.com/photo-1618004912476-29818d81ae2e?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Fakurian Design" class="w-full h-full object-cover object-center" />
                        </div>
                        <!-- image - end -->
                    </section>
                </div>
            </div>
        </main>
    </body>
</html>
