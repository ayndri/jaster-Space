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
use App\Models\Company;
use App\Models\User;
use App\Models\Brief;
use App\Models\Order;
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

    public function tambahsalah(Request $request)
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

    public function tambah(Request $request)
    {
        
        $cekuser = User::where('email', '=', $request->input('email'))->first();

        if ($cekuser == null) {

            $user = new User;
            $user->email = $request->email;
            $user->nama = $request->nama;
            $user->jabatUser = $request->jabatUser;
            $user->telpUser = $request->telpUser;
            $user->save();

        }

        

      $cekcompany = Company::where('brandComp', '=', $request->input('brandComp'))->first();

      if ($cekcompany == null) {
        
        $comp = new Company;
            $comp->idUser = $user->idUser;
            $comp->brandComp = $request->brandComp;
            $comp->namaComp = $request->namaComp;
            $comp->addrComp = $request->addrComp;
            $comp->save();

      }
      
        
        $akses = new Akses;
        $akses->domainAkses = $request->domainAkses;
        $akses->userAkses = $request->userAkses;
        $akses->passAkses = $request->passAkses;
        $akses->save();

        $ambilcomp = Company::where('brandComp', '=', $request->input('brandComp'))->first();



        $brief = new Brief;
        $brief->idAkses = $akses->idAkses;
        if ($cekcompany == null) {
        $brief->idComp = $comp->idComp;
        }
        else{
            $brief->idComp = $ambilcomp->idComp;
        }
        
        $brief->postBrief = $request->postBrief;
        $brief->logoBrief = $request->logoBrief;
        $brief->colorBrief = $request->colorBrief;
        $brief->targetBrief = $request->targetBrief;
        $brief->reqBrief = $request->reqBrief;
        $brief->save();

        $akses->idBrief = $brief->idBrief;
        $akses->save();

        $ambilUser = User::where('email', '=', $request->input('email'))->first();
        
    

        
        $order = new Order;
        $order->idBrief = $brief->idBrief;
        $order->idAkses = $akses->idAkses;
        if ($cekuser == null) {
        $order->idUser = $user->idUser;
        }
        else {
            $order->idUser = $ambilUser->idUser;
        }

        if ($cekcompany == null) {
           $order->idComp = $comp->idComp;
            }
            else{
            $order->idComp = $ambilcomp->idComp;
            }
        
        $order->dpTrx = $request->dpTrx;
        $order->renew = $request->renew;
        $order->pmOrder = $request->pmOrder;
        $order->fromTrx = $request->fromTrx;
        $order->jenisOrder = "Website";
        $order->save();

        $akses->idOrder = $order->idOrder;
        $akses->save();

        $brief->idOrder = $order->idOrder;
        $brief->save();

        $c = count($request->paketTrx);

        $paketTrx = $request->paketTrx;
        $qtyTrx = $request->qtyTrx;
        $hargaTrx = $request->hargaTrx;

        for ( $i=0; $i< $c; ++$i) {
            $trx = new Trx;
            $trx->idOrder = $order->idOrder;
            $trx->paketTrx = $paketTrx[$i];
            $trx->qtyTrx = $qtyTrx[$i];
            $trx->hargaTrx = $hargaTrx[$i];
            $trx->save();
        }   

     

        
        return back();

    }

}
