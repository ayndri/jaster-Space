<?php

namespace App\Http\Controllers;

use App\Models\Akses;
use Illuminate\Http\Request;
use App\Models\Host;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ServerCtrl extends Controller
{
    public function index()
    {
        $allhost = Host::withCount('domain')->orderBy('created_at','asc')->get();
        return view('adm.host.all', compact('allhost'));

    }

}
