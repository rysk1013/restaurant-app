<?php

namespace App\Http\Controllers\Admin\Earnings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\carbon;
use App\Services\EarningsService;

class EarningsController extends Controller
{
    public function index(Request $request, EarningsService $earningsService)
    {
        $date = Carbon::today()->format('Y-m');

        if (isset($request->target)) {
            $date = $request->target;
        }

        $earnings = $earningsService->getEarnings($date);

        return view('admin.earnings.index')
            ->with([
                'earnings' => $earnings,
                'target' => $request->target,
            ]);
    }

    public function create(Request $request, EarningsService $earningsService)
    {
        $data = [];
        $count = 1;
        $menus = $earningsService->getMneus();

        if (isset($request['modify'])) {
            $count = $request->count;
            $data = $request->details;
        }

        if (isset($request['add'])) {
            $count = $request['count'] + 1;
            $data = $request->details;
        }

        if (isset($request['remove'])) {
            $count = $request['count'] - 1;
            $data = $request->details;
        }

        return view('admin.earnings.create')
            ->with([
                'menus' => $menus,
                'count' => $count,
                'data' => $data,
            ]);
    }

    public function confirm(Request $request, EarningsService $earningsService)
    {
        list($menus, $total_price, $total_order_num) = $earningsService->generateEarningsDetails($request);

        return view('admin.earnings.confirm')
            ->with([
                'date' => $request->date,
                'count' => $request->count,
                'menus' => $menus,
                'total_price' => $total_price,
                'total_order_num' => $total_order_num,
            ]);
    }
}
