<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use App\Models\Brief;
use RealRashid\SweetAlert\Facades\Alert;

class BriefController extends Controller
{
    public function progress(Request $request, $id)
    {
        $brief = DB::table('briefs')
        ->where('idBrief', $id)
        ->first();

        return view('adm.jweb.progress', compact('brief'));
    }

    public function progressadd(Request $request, $id)
    {
        DB::table('briefs')
        ->where('idBrief', $id)
        ->update(['progressBrief' => $request->progressBrief,
        'nilaiBrief' => $request->nilaiBrief,
        'tglProgress' => Carbon::now(), 
        'progressBy' => Auth::user()->nama
    ]);

    
    }

    public function updateprog(Request $request, $id)
    {
        DB::table('briefs')
        ->where('idBrief', $id)
        ->update(['progressBrief' => $request->progressBrief,
        'tglProgress' => Carbon::now(), 
        'progressBy' => Auth::user()->nama
    ]);

    return redirect()->back();

    }

    public function progressdel($id)
    {
        DB::table('orders')
        ->where('idBrief', $id)
        ->update(['statusOrder' => 2
    ]);

    }

    

    public function lastStatus(Request $request, $id)
    {
        DB::table('briefs')
        ->where('idBrief', $id)
        ->update(['lastStatus' => $request->lastStatus,
    'dateStatus' => Carbon::now(), 
    'updatedBy' => Auth::user()->nama]);

    $users = User::whereHas('roles', function ($q) {
        $q->Where('name', 1)
        ->orWhere('name', 2)
        ->orWhere('name', 3)
        ->orWhere('name', 4);
    })->get();

   $status = Brief::select('*')
   ->join('companys', 'companys.idBrief', '=', 'briefs.idBrief')
   ->first();


   Alert::success('Nice One', 'Status telah terupdate');
   return redirect()->back();
    }
}
