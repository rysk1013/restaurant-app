<?php

namespace App\Services;

use App\Models\Menu;
use App\Models\Earnings;

class EarningsService
{
    public function getEarnings($date)
    {
        return Earnings::select('earnings.id', 'earnings.date')
                        ->selectRaw('SUM(earnings_details.order_price) as order_price')
                        ->selectRaw('SUM(earnings_details.order_num) as order_num')
                        ->join('earnings_details', 'earnings.id', '=', 'earnings_details.earnings_id')
                        ->where('earnings.date', 'like', '%' . $date . '%')
                        ->groupBy('earnings.id', 'earnings.date')
                        ->get();
    }

    public function getMneus()
    {
        $collection =
            collect(
                Menu::select('menus.id as m_id', 'menus.name as m_name', 'menu_subcategories.name as s_name')
                ->join('menu_subcategories','menus.menu_subcategory_id','=','menu_subcategories.id')
                ->orderBy('menu_subcategories.id', 'ASC')
                ->get()
            );

        $menus = $collection->mapWithKeys(function ($item) {
            return [
                $item['m_id'] => [
                    'menu_subcategory_name' => $item['s_name'],
                    'menu_name' => $item['m_name'],
                ],
            ];
        });

        return $menus;
    }
}
