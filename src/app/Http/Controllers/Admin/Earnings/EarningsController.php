<?php

namespace App\Http\Controllers\Admin\Earnings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EarningsController extends Controller
{
    public function index()
    {
        return view('admin.earnings.index');
    }
}
