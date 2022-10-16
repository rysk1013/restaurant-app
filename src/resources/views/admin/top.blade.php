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

                    <p class="text-gray-800 text-xl">こんにちは、ログインユーザさん</p>

                    <!-- buttons - start -->
                    <form action="{{ route('admin.logout') }}" method="post" novalidate>
                        @csrf
                        <button class="hidden lg:inline-block bg-gray-200 hover:bg-gray-300 focus-visible:ring ring-indigo-300 text-gray-500 active:text-gray-700 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">ログアウト</button>
                    </form>

                    <button type="button" class="inline-flex items-center lg:hidden bg-gray-200 hover:bg-gray-300 focus-visible:ring ring-indigo-300 text-gray-500 active:text-gray-700 text-sm md:text-base font-semibold rounded-lg gap-2 px-2.5 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    Menu
                    </button>
                    <!-- buttons - end -->
                </header>

                <main>
                    <div class="bg-white py-6 sm:py-8 lg:py-12">
                        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
                            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-8">
                                <!-- feature - start -->
                                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                                    <a href="#" class="text-center text-lg md:text-xl font-semibold mb-2">〇〇管理</a>
                                </div>
                                <!-- feature - end -->

                                <!-- feature - start -->
                                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                                    <a href="#" class="text-center text-lg md:text-xl font-semibold mb-2">〇〇管理</a>
                                </div>
                                <!-- feature - end -->

                                <!-- feature - start -->
                                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                                    <a href="#" class="text-center text-lg md:text-xl font-semibold mb-2">〇〇管理</a>
                                </div>
                                <!-- feature - end -->

                                <!-- feature - start -->
                                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                                    <a href="#" class="text-center text-lg md:text-xl font-semibold mb-2">〇〇管理</a>
                                </div>
                                <!-- feature - end -->

                                <!-- feature - start -->
                                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                                    <a href="#" class="text-center text-lg md:text-xl font-semibold mb-2">〇〇管理</a>
                                </div>
                                <!-- feature - end -->

                                <!-- feature - start -->
                                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                                    <a href="#" class="text-center text-lg md:text-xl font-semibold mb-2">〇〇管理</a>
                                </div>
                                <!-- feature - end -->
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
