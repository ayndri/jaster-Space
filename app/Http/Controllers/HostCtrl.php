<?php

namespace App\Http\Controllers;

use App\Models\Akses;
use Illuminate\Http\Request;
use App\Models\Host;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class HostCtrl extends Controller
{
    public function index()
    {
        $allhost = Host::withCount('domain')->orderBy('created_at','asc')->get();
        return view('adm.host.all', compact('allhost'));

    }


    public function view($id)
    {
        $data = Host::where('idHost', $id);

        if($data) {
            if($data->count() > 0) {
                $response = [
                    'code'    => 200,
                    'status'  => 'Success!',
                    'message' => 'Data found!',
                    'result'  => $data->first()
                ];
            } else {
                $response = [
                    'code'    => 404,
                    'status'  => 'Success!',
                    'message' => 'Data not found!'
                ];
            }
        } else {
            $response = [
                'code'    => 500,
                'status'  => 'Failed!',
                'message' => 'Error!'
            ];
        }

        return response()->json($response);
    }


    public function destroy($id)
    {
        Host::destroy($id);
        return redirect('/host');
    }
    public function add(Request $request)
    {
        $request->validate([
            'domHost' => 'required',
            'userHost' => 'required',
            'passHost' => 'required',
        ]);
        Host::create($request->all());
        Alert::success('Berhasil', 'Hosting berhasil ditambahkan');
        return redirect('/host');
    }

    public function edit(Request $request, $id) {
        $request->validate([
            'domHost' => 'required',
            'userHost' => 'required',
            'passHost' => 'required',
        ]);

        Host::where('idHost', $id)
            ->update([
                'domHost' => $request->domHost,
                'userHost' => $request->userHost,
                'passHost' => $request->passHost,
            ]);

        Alert::success('Berhasil', 'Perubahan Sukses');
        return redirect('/host');

    }

    public function getDomain(Request $request, Host $host) {
        $domainHost = Akses::with('hosting')->where('host_id','=',$host->idHost)->get();
        return view('adm.host.all-domain-data',compact('host','domainHost'));
    }
}
