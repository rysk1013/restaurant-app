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
                    <table class="min-w-full border-collapse block md:table">
                        <thead class="block md:table-header-group">
                            <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">
                                    <div class="w-full flex justify-between">
                                        <a href="{{ route('menu.renderList', ['sort' => 'menus.id', 'order' => 'ASC']) }}" class="inline-block text-white font-bold">▲</a>
                                        <span class="inline-block text-white font-bold">ID</span>
                                        <a href="{{ route('menu.renderList', ['sort' => 'menus.id', 'order' => 'DESC']) }}" class="inline-block text-white font-bold">▼</a>
                                    </div>
                                </th>
                                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">
                                    <div class="w-full flex justify-between">
                                        <a href="{{ route('menu.renderList', ['sort' => 'menus.name', 'order' => 'ASC']) }}" class="inline-block text-white font-bold">▲</a>
                                        <span class="inline-block text-white font-bold">メニュー名</span>
                                        <a href="{{ route('menu.renderList', ['sort' => 'menus.name', 'order' => 'DESC']) }}" class="inline-block text-white font-bold">▼</a>
                                    </div>
                                </th>
                                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">
                                    <div class="w-full flex justify-between">
                                        <a href="{{ route('menu.renderList', ['sort' => 'menu_categories.name', 'order' => 'ASC']) }}" class="inline-block text-white font-bold">▲</a>
                                        <span class="inline-block text-white font-bold">大カテゴリ</span>
                                        <a href="{{ route('menu.renderList', ['sort' => 'menu_categories.name', 'order' => 'DESC']) }}" class="inline-block text-white font-bold">▼</a>
                                    </div>
                                </th>
                                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">
                                    <div class="w-full flex justify-between">
                                        <a href="{{ route('menu.renderList', ['sort' => 'menu_subcategories.name', 'order' => 'ASC']) }}" class="inline-block text-white font-bold">▲</a>
                                        <span class="inline-block text-white font-bold">小カテゴリ</span>
                                        <a href="{{ route('menu.renderList', ['sort' => 'menu_subcategories.name', 'order' => 'DESC']) }}" class="inline-block text-white font-bold">▼</a>
                                    </div>
                                </th>
                                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">表示順</th>
                                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">登録日時</th>
                                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">
                                    <div class="w-full flex justify-between">
                                        <a href="{{ route('menu.renderList', ['sort' => 'menus.updated_at', 'order' => 'ASC']) }}" class="inline-block text-white font-bold">▲</a>
                                        <span class="inline-block text-white font-bold">更新日時</span>
                                        <a href="{{ route('menu.renderList', ['sort' => 'menus.updated_at', 'order' => 'DESC']) }}" class="inline-block text-white font-bold">▼</a>
                                    </div>
                                </th>
                                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">
                                    <a href="{{ route('menu.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">新規登録</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="block md:table-row-group">
                            @if (!empty($menus))
                                @foreach ($menus as $menu)
                                    <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">{{ $menu->m_id }}</td>
                                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">{{ $menu->m_name }}</td>
                                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">{{ $menu->c_name }}</td>
                                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">{{ $menu->s_name }}</td>
                                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">{{ $menu->m_turn }}</td>
                                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">{{ $menu->m_created }}</td>
                                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">{{ $menu->m_updated }}</td>
                                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">
                                            <a href="{{ route('menu.edit', ['id' => $menu->m_id]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">編集</a>
                                            <form action="{{ route('menu.destroy', ['id' => $menu->m_id]) }}" method="post" novalidate class="inline-block">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded" onclick="return  confirm('本当に削除しますか？')">削除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                {{-- メニューがないときの表示 --}}
                                <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                                    <td colspan="8" class="p-2 md:border md:border-grey-500 text-center block md:table-cell">メニューがありません。</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
    </body>
</html>
