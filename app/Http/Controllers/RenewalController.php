<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RenewalController extends Controller
{
    public function index() {
        $renewals = Order::get();
        return view('adm.renewal.index',compact('renewals'));
    }
}
