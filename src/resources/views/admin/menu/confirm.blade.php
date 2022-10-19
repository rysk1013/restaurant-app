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
                            <!-- text - start -->
                            <div class="mb-10 md:mb-16">
                                <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">新規登録（確認）</h2>
                            </div>
                            <!-- text - end -->

                            <!-- form - start -->
                            <form action="{{ route('menu.store') }}" method="post" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto" novalidate>
                                @csrf
                                <div class="sm:col-span-2">
                                    <label for="menu_name" class="inline-block text-gray-800 text-sm sm:text-base mb-2">メニュー名</label>
                                    <input disabled type="text" value="{{ $posts['menu_name'] }}" class="w-full bg-gray-400 text-gray-50 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                    <input type="hidden" name="menu_name" value="{{ $posts['menu_name'] }}" class="w-full bg-gray-400 text-gray-50 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="subcategory" class="inline-block text-gray-800 text-sm sm:text-base mb-2">小カテゴリ</label>
                                    <input disabled type="text" value="{{ $subcategories[$posts['subcategory']]->name }}" class="w-full bg-gray-400 text-gray-50 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                    <input type="hidden" name="subcategory" value="{{ $posts['subcategory'] }}" class="w-full bg-gray-400 text-gray-50 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="turn" class="inline-block text-gray-800 text-sm sm:text-base mb-2">表示順</label>
                                    <input disabled type="text" value="{{ $posts['turn'] }}" class="w-full bg-gray-400 text-gray-50 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                    <input type="hidden" name="turn" value="{{ $posts['turn'] }}" class="w-full bg-gray-400 text-gray-50 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="price" class="inline-block text-gray-800 text-sm sm:text-base mb-2">値段</label>
                                    <input disabled type="text" value="{{ $posts['price'] }}" class="w-full bg-gray-400 text-gray-50 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                    <input type="hidden" name="price" value="{{ $posts['price'] }}" class="w-full bg-gray-400 text-gray-50 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="description" class="inline-block text-gray-800 text-sm sm:text-base mb-2">説明</label>
                                    <textarea disabled name="description" class="w-full h-64 bg-gray-400 text-gray-50 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2">{{ $posts['description'] }}</textarea>
                                    <input type="hidden" name="description" value="{{ $posts['description'] }}" class="w-full bg-gray-400 text-gray-50 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2 flex justify-between items-center">
                                    <button name="modify" type="submit" class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">修正する</button>
                                    <button name="send" type="submit" class="inline-block bg-green-500 hover:bg-green-600 active:bg-green-700 focus-visible:ring bg-green-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">送信する</button>
                                </div>
                            </form>
                            <!-- form - end -->
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
