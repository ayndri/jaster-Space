<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        ->update(['progressBrief' => $request->progressBrief]);

    }
}
