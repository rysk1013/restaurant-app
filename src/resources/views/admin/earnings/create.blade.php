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
                    <form action="#" method="post" novalidate>
                        <table class="mb-5 min-w-full border-collapse block md:table">
                            <thead class="block md:table-header-group">
                                <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                    <th class="w-3/5 bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">
                                        <div class="w-full flex justify-between">
                                            <span class="inline-block text-white font-bold">メニュー</span>
                                        </div>
                                    </th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">
                                        <div class="w-full flex justify-between">
                                            <span class="inline-block text-white font-bold">個数</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="block md:table-row-group">
                                @for ($i = 0; $i < $count; $i++)
                                    <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">
                                            <select name="" class="block w-full mt-1 rounded-md border shadow-sm focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2">
                                                @foreach ($menus as $key => $val)
                                                    <option value="{{ $key }}">{{ $val['menu_name'] }}({{ $val['menu_subcategory_name'] }})</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">
                                            <input type="text" name="order_num" class="w-full text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <div class="m-auto">
                            <button name="add" class="px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">１行追加</button>
                            <button name="remove" class="px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-red-500 hover:bg-red-600 active:bg-red-700 focus:ring-red-300" type="submit">１行削除</button>
                        </div>
                        <div class="sm:col-span-2 flex justify-between items-center">
                            <button name="send" type="submit" class="ml-auto inline-block bg-green-500 hover:bg-green-600 active:bg-green-700 focus-visible:ring bg-green-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">内容を確認する</button>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </body>
</html>
