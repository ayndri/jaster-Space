<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;
use App\Models\Topup;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class AdsController extends Controller
{
    public function index()
    {
        $gads = Iklan::orderBy('akunAds','asc')->orderBy('namaAds','asc')
                ->where('statAds', 'on')
                ->get()->groupBy(function ($item) {
                return $item->akunAds;
        });
        return view('adm.ads.all', compact('gads'));
        
    } 
    public function add()
    {
        return view('adm.ads.new');
    }  
    public function store(Request $request)
    {
        $request->validate([
            'namaAds' => 'required',
            'akunAds' => 'required',
            'saldoAds' => 'required',
            'mulaiAds' => 'required',
            'selesaiAds' => 'required',
        ]);
        
        $newads = new Iklan([
        'namaAds' => $request->namaAds,
        'akunAds' => $request->akunAds,
        'saldoAds' => $request->saldoAds,
        'mulaiAds' => $request->mulaiAds,
        'selesaiAds' => $request->selesaiAds,
        'noteAds' => $request->noteAds,
        ]);
        $newads->save();

        DB::table('topups')->insert([
            'idAds' => $newads->idAds,
            'saldoTop' => $request->saldoAds,
            'tglTop' => $request->mulaiAds,
        ]);
        
        Alert::success('Berhasil', 'Campaign berhasil ditambahkan');
        return redirect('/ads/active');
    } 
    public function edit(Request $request, Iklan $act)
    {  
        $act = DB::table('iklans')
        ->where('idAds',$act->idAds)
        ->first();
        return view('adm.ads.edit', compact('act'));
    
        
    }
    public function update(Request $request, Iklan $act)
    {
        $request->validate([
            'namaAds' => 'required',
            'akunAds' => 'required', 
            'saldoAds' => 'required', 
            'mulaiAds' => 'required', 
            'selesaiAds' => 'required', 
        ]);
       
        Iklan::where('idAds', $act->idAds)
            ->update([
                'namaAds' => $request->namaAds,
                'akunAds' => $request->akunAds,
                'saldoAds' => $request->saldoAds,
                'mulaiAds' => $request->mulaiAds,
                'selesaiAds' => $request->selesaiAds,
                'noteAds' => $request->noteAds,
            ]);

        Alert::success('Berhasil', 'Perubahan Sukses');
        return redirect('/ads/active');
    } 
    
    public function offkan(Request $request, Iklan $act)
    {
        Iklan::where('idAds', $act->idAds)->update(['statAds' => "off"]);
        Alert::success('Deleted', 'Campaign has been deleted');
        return redirect('/ads/active');
    }


     
    public function alltop()
    {
        $antri = DB::table('topups')
        ->leftJoin('iklans','iklans.idAds','topups.idAds')
        ->where('doneTop', 'no')
        ->orderBy('tglTop','asc')
        ->get();
        return view('adm.ads.alltop', compact('antri'));
        
    }
    
    public function recap()
    {

        $akun = Iklan::orderBy('akunAds','asc')->orderBy('namaAds','asc')
                ->where('statAds', 'on')
                ->get()->groupBy(function ($item) {
                return $item->akunAds;
        });
        return view('adm.ads.recap', compact('akun'));
        
    }
    public function uprecap(Request $request, Iklan $gads)
    {
        $amount = Iklan::raw('saldoAds - nowAds');
        Iklan::where('idAds', $gads->idAds)
            ->update([
                'nowAds' => $request->nowAds,
                'sisaAds' => $amount,
            ]);
        $sisaAds = Iklan::select('sisaAds')->where('idAds', $gads->idAds)->first();
        // return json_encode($sisaAds);
        return response()->json($sisaAds);
    }
    public function addtop()
    {
        $gads = DB::table('iklans')
        ->orderBy('namaAds', 'asc')
        ->get();
        return view('adm.ads.addtop', compact('gads'));
    }   
    public function storetop(Request $request)
    {
        $request->validate([
            'idAds' => 'required',
            'saldoTop' => 'required',
            'tglTop' => 'required',
        ]);
        Topup::create($request->all());
        Alert::success('Berhasil', 'Top-Up berhasil ditambahkan');
        return redirect('/ads/topup');
    }
    public function pay(Request $request, Topup $ant)
    {
        
        Topup::where('idTop', $ant->idTop)->update(['doneTop' => "ya"]);

        Alert::success('Nice One', 'TopUp Has ben Pay');
        return redirect('/ads/topup');
    }    
     
    public function allads()
    {
        $semuaads = DB::table('iklans')
        ->leftJoin('topups','topups.idAds','iklans.idAds')
        ->orderBy('tglTop','desc')
        ->get();
        return view('adm.ads.allads', compact('semuaads'));
        
    }
    public function change(Request $request, Topup $ant)
    {
        $topups = DB::table('topups')
        ->leftJoin('iklans','iklans.idAds','topups.idAds')
        ->where('idTop',$ant->idTop)
        ->first();
        return view('adm.ads.change', compact('topups'));
    
        
    }
    public function uptop(Request $request, Topup $topups)
    {
        $request->validate([
            'saldoTop' => 'required', 
            'tglTop' => 'required',
        ]);
       
        Topup::where('idTop', $topups->idTop)
            ->update([
                'saldoTop' => $request->saldoTop,
                'tglTop' => $request->tglTop,
            ]);

        Alert::success('Berhasil', 'Perubahan Sukses');
        return redirect('/ads/topup');
    } 
}
