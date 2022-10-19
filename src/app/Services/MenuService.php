<?php

namespace App\Services;

use App\Models\Menu;
use App\Models\MenuSubcategory;

class MenuService
{
    /**
     * get subcategories
     *
     * @return object
     */
    public function getSubcategories(): object
    {
        $collection = collect(MenuSubcategory::orderBy('turn', 'DESC')->get());
        $subcategories = $collection->mapWithKeys(function ($item) {
            return [
                $item['id'] => [
                    "menu_category_id" => $item['menu_category_id'],
                    'name'  => $item['name'],
                ]
            ];
        });

        return $subcategories;
    }

    /**
     * get menus
     *
     * @return object
     */
    public function getMenusForAdmin(): object
    {
        return Menu::select('menus.id as m_id', 'menus.name as m_name', 'menus.created_at as m_created', 'menus.updated_at as m_updated', 'menus.turn as m_turn', 'menu_subcategories.name as s_name', 'menu_categories.name as c_name')
        ->join('menu_subcategories','menus.menu_subcategory_id','=','menu_subcategories.id')
        ->join('menu_categories', 'menu_subcategories.menu_category_id', '=', 'menu_categories.id')
        ->get();
    }

    /**
     * rendering menu list
     *
     * @param string $sort
     * @param string $order
     * @return object
     */
    public function renderMenuList(string $sort, string $order): object
    {
        return Menu::select('menus.id as m_id', 'menus.name as m_name', 'menus.created_at as m_created', 'menus.updated_at as m_updated', 'menus.turn as m_turn', 'menu_subcategories.name as s_name', 'menu_categories.name as c_name')
        ->join('menu_subcategories','menus.menu_subcategory_id','=','menu_subcategories.id')
        ->join('menu_categories', 'menu_subcategories.menu_category_id', '=', 'menu_categories.id')
        ->orderBy($sort, $order)
        ->get();
    }

    public function saveMenu($posts)
    {
        $menu = new Menu();
        $menu->name = $posts->menu_name;
        $menu->menu_subcategory_id = $posts->subcategory;
        $menu->turn = $posts->turn;
        $menu->price = $posts->price;
        $menu->description = $posts->description;
        $menu->create_user = 1;
        $menu->save();
    }
}
