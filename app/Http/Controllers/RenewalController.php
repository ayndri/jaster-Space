<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RenewalController extends Controller
{
    public function index() {
        $renewals = Order::with('users')->get();
        // dd(now()->subDays(14)->format('d'));
        return view('adm.server.renewal',compact('renewals'));
    }
}
