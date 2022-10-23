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
        $count = 1;

        if (isset($request->add)) {
            $count++;
        }

        if (isset($request->remove)) {
            $count--;
        }

        $menus = $earningsService->getMneus();

        return view('admin.earnings.create')
            ->with([
                'menus' => $menus,
                'count' => $count,
            ]);
    }
}
