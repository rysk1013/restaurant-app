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

                <main>
                    <div class="bg-white py-6 sm:py-8 lg:py-12">
                        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
                            <!-- text - start -->
                            <div class="mb-10 md:mb-16">
                                <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">お問い合わせ</h2>
                            </div>
                            <!-- text - end -->

                            <!-- form - start -->
                            <form action="{{ route('contact.confirm') }}" method="post" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto" novalidate>
                                @csrf
                                <div class="sm:col-span-2">
                                    @error('name')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                    <label for="name" class="inline-block text-gray-800 text-sm sm:text-base mb-2">名前<span class="text-red-500">（必須）</span></label>
                                    <input type="text" name="name" class="w-full text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    @error('kana')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                    <label for="kana" class="inline-block text-gray-800 text-sm sm:text-base mb-2">フリガナ<span class="text-red-500">（必須）</span></label>
                                    <input type="text" name="kana" class="w-full text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2 text-gray-800">
                                    @error('pref')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                    <label for="pref" class="inline-block text-gray-800 text-sm sm:text-base mb-2">都道府県<span class="text-red-500">（必須）</span></label>
                                    <select name="pref" class="block w-full mt-1 rounded-md border shadow-sm focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2">
                                        @foreach ($pref as $key => $val)
                                            <option value="{{ $key }}">{{ $val }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="sm:col-span-2">
                                    @error('city')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                    <label for="city" class="inline-block text-gray-800 text-sm sm:text-base mb-2">市区町村<span class="text-red-500">（必須）</span></label>
                                    <input type="text" name="city" class="w-full text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    @error('address')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                    <label for="address" class="inline-block text-gray-800 text-sm sm:text-base mb-2">番地<span class="text-red-500">（必須）</span></label>
                                    <input type="text" name="address" class="w-full text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="apartment" class="inline-block text-gray-800 text-sm sm:text-base mb-2">マンション名等</label>
                                    <input type="text" name="apartment" class="w-full text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="age" class="block text-gray-800 text-sm sm:text-base mb-2">年齢</label>
                                    <input type="text" name="age" class="w-20 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="tel" class="block text-gray-800 text-sm sm:text-base mb-2">電話番号</label>
                                    <input type="text" name="tel" class="w-2/4 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    @error('email')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                    <label for="email" class="inline-block text-gray-800 text-sm sm:text-base mb-2">メールアドレス<span class="text-red-500">（必須）</span></label>
                                    <input type="email" name="email" class="w-full text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    @error('email_confirmation')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                    <label for="email_confirmation" class="inline-block text-gray-800 text-sm sm:text-base mb-2">メールアドレスの確認<span class="text-red-500">（必須）</span></label>
                                    <input type="text" name="email_confirmation" class="w-full text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div class="sm:col-span-2">
                                    @error('inquiry')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                    <label for="inquiry" class="inline-block text-gray-800 text-sm sm:text-base mb-2">お問い合わせ内容<span class="text-red-500">（必須）</span></label>
                                    <textarea name="inquiry" class="w-full text-gray-800 h-64 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
                                </div>

                                <div class="sm:col-span-2 flex justify-between items-center">
                                    <button name="send" type="submit" class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">内容を確認する</button>
                                </div>

                                <p class="text-gray-400 text-xs">By signing up to our newsletter you agree to our <a href="#" class="hover:text-indigo-500 active:text-indigo-600 underline transition duration-100">Privacy Policy</a>.</p>
                            </form>
                            <!-- form - end -->
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
