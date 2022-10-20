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
                            <a href="/" class="text-indigo-500 text-lg font-semibold">Home</a>
                            <a href="{{ route('menu') }}" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">Menu</a>
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

                    <div class="bg-white dark:bg-gray-900">
                        <div class="container px-6 py-8 mx-auto">
                            @foreach ($categories as $category_id => $category)
                                <h1 class="mb-4 text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">{{ $category['name'] }}</h1>
                                @foreach ($subcategories as $subcategory_id => $subcategory)
                                    @if ($category_id == $subcategory['menu_category_id'])
                                        <h3 class="text-2xl text-center text-gray-500 dark:text-gray-300">{{ $subcategory['name'] }}</h3>
                                        @foreach ($menus as $menu)
                                            @if ($subcategory_id == $menu['m_subcategory_id'])
                                                <div class="mt-6 space-y-8 xl:mt-12">
                                                    <div class="flex items-center justify-between max-w-2xl mb-6 px-8 py-4 mx-auto border rounded-xl dark:border-gray-700">
                                                        <div class="flex items-center">
                                                            <div class="flex flex-col items-center space-y-1">
                                                                <p class="text-base font-medium text-gray-700 sm:text-2xl dark:text-gray-200">{{ $menu['m_name'] }}</p>
                                                            </div>
                                                        </div>
                                                        <p class="text-base font-medium text-gray-700 sm:text-2xl dark:text-gray-200">{{ $menu['m_price'] }}円</p>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
