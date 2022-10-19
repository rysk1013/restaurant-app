<?php

namespace App\Services;

use App\Models\Menu;
use App\Models\MenuSubcategory;

class MenuService
{
    public function getSubcategories()
    {
        return MenuSubcategory::get();
    }

    public function getMenusForAdmin()
    {
        return Menu::select('menus.id as m_id', 'menus.name as m_name', 'menus.created_at as m_created', 'menus.updated_at as m_updated', 'menus.turn as m_turn', 'menu_subcategories.name as s_name', 'menu_categories.name as c_name')
        ->join('menu_subcategories','menus.menu_subcategory_id','=','menu_subcategories.id')
        ->join('menu_categories', 'menu_subcategories.menu_category_id', '=', 'menu_categories.id')
        ->get();
    }

    public function renderMenuList($sort, $order)
    {
        return Menu::select('menus.id as m_id', 'menus.name as m_name', 'menus.created_at as m_created', 'menus.updated_at as m_updated', 'menus.turn as m_turn', 'menu_subcategories.name as s_name', 'menu_categories.name as c_name')
        ->join('menu_subcategories','menus.menu_subcategory_id','=','menu_subcategories.id')
        ->join('menu_categories', 'menu_subcategories.menu_category_id', '=', 'menu_categories.id')
        ->orderBy($sort, $order)
        ->get();
    }
}
