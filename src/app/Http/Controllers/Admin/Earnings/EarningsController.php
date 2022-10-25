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
        $date = Carbon::today()->format('Y-m-d');
        $data = [];
        $count = 1;
        $menus = $earningsService->getMneus();

        if (isset($request['modify'])) {
            $date = $request->date;
            $data = $request->details;
            $count = $request->count;
        }

        if (isset($request['add'])) {
            $date = $request->date;
            $data = $request->details;
            $count = $request['count'] + 1;
        }

        if (isset($request['remove'])) {
            $date = $request->date;
            $data = $request->details;
            $count = $request['count'] - 1;
        }

        return view('admin.earnings.create')
            ->with([
                'menus' => $menus,
                'date' => $date,
                'data' => $data,
                'count' => $count,
            ]);
    }

    public function confirm(Request $request, EarningsService $earningsService)
    {
        list($menus, $total_price, $total_order_num) = $earningsService->generateEarningsDetails($request);

        return view('admin.earnings.confirm')
            ->with([
                'date' => $request->date,
                'date' => $request->date,
                'count' => $request->count,
                'menus' => $menus,
                'total_price' => $total_price,
                'total_order_num' => $total_order_num,
            ]);
    }
}
