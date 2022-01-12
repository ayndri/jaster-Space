<?php

namespace App\Http\Controllers;

use App\Models\Akses;
use App\Models\Host;
use Illuminate\Http\Request;
use Alert;

class DomainController extends Controller
{
    public function index() {
        $domain = Akses::with('hosting')->get();
        $hosts = Host::get();
        return view('adm.domain.index',compact('domain','hosts'));

    }

    public function store(Request $request) {
        $request->validate([
            'domainAkses' => 'required'
        ]);
        Akses::create([
            'domainAkses' => $request->domainAkses,
            'host_id' => $request->host_id,
            'idOrder' => $request->idOrder,
            'updated_at' => $request->tgl
        ]);
        // dd($domains);
        // $domains->save();
        return redirect()->route('domain.index');
    }

    public function view($id) {
        $data = Akses::where('idAkses', $id);

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

    public function edit(Request $request, $id) {
        $request->validate([
            'domainAkses' => 'required',
        ]);

        Akses::where('idAkses', $id)
            ->update([
                'domainAkses' => $request->domainAkses,
                'host_id' => $request->host_id,
                'idOrder' => $request->idOrder,
            ]);

        Alert::success('Berhasil', 'Perubahan Sukses');
        return redirect()->route('domain.index');
    }

    public function destroy($id) {
        Akses::destroy($id);
        Alert::success('Deleted', 'item deleted');
        return redirect()->route('domain.index');
    }

    public function searchAjax(Request $request) {
        if($request->ajax())
        {
        $output="";
        $domains = Akses::where('domainAkses','like',"%".$request->search."%")->get();

            if($domains) {
            foreach ($domains as $domain) {
                    if($domain->hosting != NULL){
                        $output.='<tr>'.
                        '<td>'.$domain->id.'</td>'.
                        '<td>'.$domain->domainAkses.'</td>'.
                        '<td>'.$domain->hosting->domHost.'</td>'.
                        '<td><a href="https://'.$domain->hosting->domHost.'/cpanel" class="btn-sm btn-primary d-inline-block" target="_blank">Open cPanel</a> '.
                        '<button type="button" onclick="getAcc('.$domain->idAkses.')" class="btn-sm btn-primary">Akun</button></td>'.
                        '</tr>';
                    }else{
                        $output.='';
                    }

            }
            return Response($output);
            }
        }
    }

    public function getHosting($id) {
        $data = Akses::where('idAkses', $id);

        if($data) {
            if($data->count() > 0) {
                $response = [
                    'code'    => 200,
                    'status'  => 'Success!',
                    'message' => 'Data found!',
                    'result'  => $data->with('hosting')->first()
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

        // dd($response);
        return response()->json($response);
    }
}
