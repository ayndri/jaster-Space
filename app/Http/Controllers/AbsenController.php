<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\addAbsen;
use App\Notifications\setujuAbsen;
use Illuminate\Support\Facades\DB;
use App\Notifications\tolakAbsen;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Notifications\cancelAbsen;
use Illuminate\Support\Facades\Notification;
use Exception;
use Response;

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

        $users = User::whereHas('roles', function ($q) {
                 $q->Where('name', 1);
             })->get();

            $absennot = Absen::select('*')
            ->join('users', 'users.idUser', '=', 'absens.idUser')
            ->where('users.idUser','=',auth()->user()->idUser)
            ->first();

            Notification::send($users, new addAbsen($absennot));
        //dd($absennot);


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

            $users = User::select('*')
            ->join('absens', 'users.idUser', '=', 'absens.idUser')
            ->where('absens.idAbsen', $abs)
            ->first();

            $absen = Absen::select('*')
               ->join('users', 'users.idUser', '=', 'absens.idUser')
               ->first();

            $admins = User::whereHas('roles', function ($q) {
                $q->Where('name', 1);
            })->get();

           //dd($absennot);

           Notification::send($users, new cancelAbsen($absen));
           Notification::send($admins, new cancelAbsen($absen));

            Alert::success('Oke', 'Absen telah kamu batalkan');
            return redirect('/absen/all');
    }

    public function tolak($abs)
    {
        Absen::where('idAbsen', $abs)
            ->update([
                'statusAbsen' => 3,
            ]);

            $users = User::select('*')
            ->join('absens', 'users.idUser', '=', 'absens.idUser')
            ->where('absens.idAbsen', $abs)
            ->first();

            $absen = Absen::select('*')
               ->join('users', 'users.idUser', '=', 'absens.idUser')
               ->first();

           //dd($absennot);

           Notification::send($users, new tolakAbsen($absen));

        Alert::success('Nice One', 'Absen telah ditolak');
        return redirect('/absen/list');
    }

    public function setuju($abs)
    {
        Absen::where('idAbsen', $abs)
            ->update([
                'statusAbsen' => 2,
            ]);

        $users = User::select('*')
        ->join('absens', 'users.idUser', '=', 'absens.idUser')
        ->where('absens.idAbsen', $abs)
        ->first();

        $absen = Absen::select('*')
           ->join('users', 'users.idUser', '=', 'absens.idUser')
           ->first();

       //dd($absennot);

       Notification::send($users, new setujuAbsen($absen));

        Alert::success('Nice One', 'Absen telah diizinkan');
        return redirect('/absen/list');
    }

    public function adminabsen () {

<<<<<<< HEAD
        $absen = DB::table('absens')
        ->join('users', 'users.idUser', '=', 'absens.idUser')
        ->orderBy('absens.created_at', 'desc')
        ->get();

       
=======
        $absen = Absen::orderBy('idAbsen','asc')
                ->get();

>>>>>>> 0c24bd860ec90abf1f7bd8013eb7f13326a44af9
        if (auth()->user()->hasRole('1')) {
            return view('adm.absen.adminabsen', compact('absen'));
        }else{
            abort(404);
        }

    }
}
