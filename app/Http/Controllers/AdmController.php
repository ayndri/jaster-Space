<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class AdmController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('adm.index');
                    
    }
    
    public function reset()
    {
        return view('adm.akun.pass');
    }

    public function change(Request $request)
    {
        $request->validate([
            // 'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
            ]);

            User::find(auth()->user()->idUser)
            ->update(['password'=> Hash::make($request->new_password)]);
            Alert::success('Berhasil', 'Password telah berubah');
            // Alert::success('Berhasil', 'Password Anda berhasil diubah');
            return redirect()->back();
    }

    public function notifikasi()
    {
        $showNotif = auth()->user()->notifications()->latest()->paginate(5);
        $allnotif = auth()->user()->notifications()->latest()->get();
        return view('adm.notifikasi',compact('showNotif','allnotif'));
    }
}   
