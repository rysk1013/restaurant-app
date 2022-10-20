<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuCategory;
use App\Models\MenuSubcategory;
use App\Models\Menu;
use App\Services\MenuService;

class MainController extends Controller
{
    public function top()
    {
        return view('top');
    }

    public function menu(MenuService $menuService)
    {
        $categories = $menuService->getCategories();
        $subcategories = $menuService->getSubcategories();
        $menus = $menuService->getMenusForUser();

        return view('menu')
            ->with([
                'categories' => $categories,
                'subcategories' => $subcategories,
                'menus' => $menus,
            ]);
    }
}
