<?php

namespace App\Services;

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
}
