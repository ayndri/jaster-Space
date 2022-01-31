<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;

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
        $jweb = DB::table('orders')
        ->join('briefs', 'briefs.idBrief', '=', 'orders.idBrief')
        ->join('companys', 'companys.idBrief', '=', 'briefs.idBrief')
        ->where('orders.statusOrder',1)
        ->orderBy('orders.nomerOrder', 'desc')
        ->get();

        $notes = DB::table('users')
        ->join('notes','notes.pengirim','=','users.idUser')
        ->select('users.nama as namaPengirim','users.idUser','notes.*')
        ->where('notes.penerima' , '=',auth()->user()->idUser)
        ->latest()
        ->get();
        // dd($notes);

        return view('adm.index', compact('jweb','notes'));

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

    public function markRead($id)
    {
        DB::table('notifications')
           ->where('id', $id)
           ->update(
            ['notifications.read_at' => Carbon::now()]
            );

        return back();
    }
}
