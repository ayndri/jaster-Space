<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trx;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Models\Jweb;
use App\Models\Akses;
use Illuminate\Support\Carbon;

class JwebCtrl extends Controller
{
    public function add(Request $request)
    {
        return view('adm.jweb.add');
    }

    public function all(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://myjaster.com/api/order');
        $response = $request->getBody();
        $hasil = json_decode($response, true);

        return view('adm.jweb.all', compact('hasil'));
    }

    public function semua()
    {
        $webs = DB::table('jwebs')
        ->join('aksess', 'aksess.idWeb', '=', 'jwebs.idWeb')
        ->join('trxs', 'trxs.idWeb', '=', 'aksess.idWeb')
        ->where('jwebs.statWeb', '=', 1)
        ->get();
        return view('adm.jweb.semua', compact('webs'));
    }

    public function view($id)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->request('GET', 'http://myjaster.com/api/single', [
            'query' => [
                'id' => $id
            ],
        ]);

        $response = $request->getBody();
        $coba = json_decode($response, true);

        $webs = DB::table('jwebs')
        ->join('aksess', 'aksess.idWeb', '=', 'jwebs.idWeb')
        ->join('trxs', 'trxs.idWeb', '=', 'aksess.idWeb')
        ->where('jwebs.idWeb', '=', $id)
        ->first();

        return view('adm.jweb.view', compact('coba', 'webs'));
    }

    public function edit($id)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->request('GET', 'http://myjaster.com/api/single', [
            'query' => [
                'id' => $id
            ],
        ]);

        $response = $request->getBody();
        $coba = json_decode($response, true);

        $webs = DB::table('jwebs')
        ->join('aksess', 'aksess.idWeb', '=', 'jwebs.idWeb')
        ->join('trxs', 'trxs.idWeb', '=', 'aksess.idWeb')
        ->where('jwebs.idWeb', '=', $id)
        ->first();

        return view('adm.jweb.edit', compact('coba', 'webs'));
    }

    public function update(Request $request, Jweb $coba)
    {
        $request->validate([
            
            ]);
    
            $ser = [];
            $qty = array();
            $har = array();
    
            $serTrx = $request->serTrx;
            $qtyTrx = $request->qtyTrx;
            $harTrx = $request->harTrx;
                
            foreach ($request->serTrx as $key => $titleser) {
                $ser[] = $titleser;
            }
            foreach ($request->qtyTrx as $key => $titleqty) {
                $qty[] = $titleqty;
            }
            foreach ($request->harTrx as $key => $titlehar) {
                $har[] = $titlehar;
            }
    
            if ($request->hasFile('logoWeb')) {
                $file = $request->file('logoWeb');
                $nama_file = Carbon::now()->format('mYd')."_".$file->getClientOriginalName();
                $tujuan_upload = "img/logo";
                $file->move($tujuan_upload, $nama_file);
                }else{
                    $nama_file = "placeholder.png";
            }
    
            $jweb = new Jweb;
            $jweb->brandWeb = $request->brandWeb;
            $jweb->statWeb = 1;
            $jweb->namaWeb = $request->namaWeb;
            $jweb->mailWeb = $request->mailWeb;
            $jweb->picWeb = $request->picWeb;
            $jweb->jabatWeb = $request->jabatWeb;
            $jweb->waWeb = $request->waWeb;
            $jweb->addrWeb = $request->addrWeb;
            $jweb->postWeb = $request->postWeb;
            
            $jweb->colorWeb = $request->colorWeb;
            $jweb->targetWeb = $request->targetWeb;
            $jweb->reqWeb = $request->reqWeb;
            $jweb->save();
    
            $akses = new Akses;
            $akses->idWeb = $jweb->idWeb;
            $akses->domAks = $request->domAks;
            $akses->userAks = $request->userAks;
            $akses->passAks = $request->passAks;
            $akses->save();
    
            $trx = new Trx;
            $trx->idWeb = $jweb->idWeb;
            $trx->dpTrx = $request->dpTrx;
            $trx->reTrx = $request->reTrx;
            $trx->payTrx = $request->payTrx;
            $trx->fromTrx = $request->fromTrx;
            $trx->serTrx = $ser;
            $trx->qtyTrx = array_map('intval', $qty);
            $trx->harTrx = array_map('intval', $har);
            $trx->save();

        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://myjaster.com/api/order');
        $response = $request->getBody();
        $hasil = json_decode($response, true);

        return view('adm.jweb.all', compact('hasil'));
    } 

    public function tambah(Request $request)
    {
        $request->validate([
            
        ]);

        $ser = [];
        $qty = array();
        $har = array();

        $serTrx = $request->serTrx;
        $qtyTrx = $request->qtyTrx;
        $harTrx = $request->harTrx;
            
        foreach ($request->serTrx as $key => $titleser) {
            $ser[] = $titleser;
        }
        foreach ($request->qtyTrx as $key => $titleqty) {
            $qty[] = $titleqty;
        }
        foreach ($request->harTrx as $key => $titlehar) {
            $har[] = $titlehar;
        }

        if ($request->hasFile('logoWeb')) {
            $file = $request->file('logoWeb');
            $nama_file = Carbon::now()->format('mYd')."_".$file->getClientOriginalName();
            $tujuan_upload = "img/logo";
            $file->move($tujuan_upload, $nama_file);
            }else{
                $nama_file = "placeholder.png";
        }

        $jweb = new Jweb;
        $jweb->brandWeb = $request->brandWeb;
        $jweb->statWeb = 1;
        $jweb->namaWeb = $request->namaWeb;
        $jweb->mailWeb = $request->mailWeb;
        $jweb->picWeb = $request->picWeb;
        $jweb->jabatWeb = $request->jabatWeb;
        $jweb->waWeb = $request->waWeb;
        $jweb->addrWeb = $request->addrWeb;
        $jweb->postWeb = $request->postWeb;
        $jweb->logoWeb = $nama_file;
        $jweb->colorWeb = $request->colorWeb;
        $jweb->targetWeb = $request->targetWeb;
        $jweb->reqWeb = $request->reqWeb;
        $jweb->save();

        $akses = new Akses;
        $akses->idWeb = $jweb->idWeb;
        $akses->domAks = $request->domAks;
        $akses->userAks = $request->userAks;
        $akses->passAks = $request->passAks;
        $akses->save();

        $trx = new Trx;
        $trx->idWeb = $jweb->idWeb;
        $trx->dpTrx = $request->dpTrx;
        $trx->reTrx = $request->reTrx;
        $trx->payTrx = $request->payTrx;
        $trx->fromTrx = $request->fromTrx;
        $trx->serTrx = $ser;
        $trx->qtyTrx = array_map('intval', $qty);
        $trx->harTrx = array_map('intval', $har);
        $trx->save();

        return back()->with('success', 'Record Created Successfully.');
    }

}
