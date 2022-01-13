<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class AbsenController extends Controller
{
    public function formabsen () {
        return view('absen.absen');
    }

    public function storeabsen(Request $request)
    {
        $request->validate([
            'tglAbsen' => 'required',
            'jmlAbsen' => 'required',
            'perihalAbsen' => 'required',
            'isiAbsen' => 'required',
        ]);

        $absen = new Absen;
        $absen->tglAbsen = $request->tglAbsen;
        $absen->tglMulai = Carbon::now('Asia/jakarta');
        $absen->tglHabis = Carbon::now('Asia/jakarta')->addHours(1);
        $absen->idUser = Auth::user()->idUser;
        $absen->jmlAbsen = $request->jmlAbsen;
        $absen->perihalAbsen = $request->perihalAbsen;
        $absen->isiAbsen = $request->isiAbsen;
        $absen->statusAbsen = 1;
        $absen->save();
        
        return back();

    }

    public function teamabsen () {

        $absen = Absen::orderBy('idAbsen','desc')
                ->where('idUser', Auth::user()->idUser)
                ->get();

        return view('absen.teamabsen', compact('absen'));
    }

    public function ubahabsen($abs)
    {
        Absen::where('idAbsen', $abs)
            ->update([
                'statusAbsen' => 5,
            ]);

            return back();
    }

    public function tolakabsen($abs)
    {
        Absen::where('idAbsen', $abs)
            ->update([
                'statusAbsen' => 3,
            ]);

            return back();
    }

    public function setujuabsen($abs)
    {
        Absen::where('idAbsen', $abs)
            ->update([
                'statusAbsen' => 2,
            ]);

            return back();
    }

    public function adminabsen () {

        $absen = Absen::orderBy('idAbsen','asc')
                ->get();

        return view('absen.adminabsen', compact('absen'));
    }
}
