<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class AbsenController extends Controller
{
    public function formabsen () {
        return view('adm.absen.absen');
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
        $absen->tglHabis = Carbon::now('Asia/jakarta')->addMinutes(2);
        $absen->idUser = Auth::user()->idUser;
        $absen->jmlAbsen = $request->jmlAbsen;
        $absen->perihalAbsen = $request->perihalAbsen;
        $absen->isiAbsen = $request->isiAbsen;
        $absen->statusAbsen = 1;
        $absen->save();
        
        Alert::success('Oke', 'Izin absen telah terkirim');
        return redirect('/absen/all');

    }

    public function teamabsen () {

        $absen = Absen::orderBy('idAbsen','desc')
                ->where('idUser', Auth::user()->idUser)
                ->where('statusAbsen','!=',5)
                ->get();

        return view('adm.absen.teamabsen', compact('absen'));
    }

    public function ubah($abs)
    {
        Absen::where('idAbsen', $abs)
            ->update([
                'statusAbsen' => 5,
            ]);

            Alert::success('Oke', 'Absen telah kamu batalkan');
            return redirect('/absen/all');
    }

    public function tolak($abs)
    {
        Absen::where('idAbsen', $abs)
            ->update([
                'statusAbsen' => 3,
            ]);

        Alert::success('Nice One', 'Absen telah ditolak');
        return redirect('/absen/list');
    }

    public function setuju($abs)
    {
        Absen::where('idAbsen', $abs)
            ->update([
                'statusAbsen' => 2,
            ]);

        Alert::success('Nice One', 'Absen telah diizinkan');
        return redirect('/absen/list');
    }

    public function adminabsen () {

        $absen = Absen::orderBy('idAbsen','asc')
                ->get();
              
        if (auth()->user()->hasRole('1')) {
            return view('adm.absen.adminabsen', compact('absen'));
        }else{
            abort(404);
        }
   
    }
}
