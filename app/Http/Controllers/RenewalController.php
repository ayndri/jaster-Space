<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RenewalController extends Controller
{
    public function index() {
        // where('created_at','<',today()->subDay(361))->
        $order = Order::get();
        foreach ($order as $orders) {
            if ($orders->created_at->subDay(11)) {
                echo "".$orders->nomerOrder.'<br>';
                 echo "".$orders->created_at.'<br>';
            }

        }
    }
}
