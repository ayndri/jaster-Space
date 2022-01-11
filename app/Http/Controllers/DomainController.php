<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index()
    {
        $domain = Domain::with('hosting')->get();
        return view('adm.domain.index',compact('domain'));
    }

    public function searchAjax(Request $request)
    {
        if($request->ajax())
        {
        $output="";
        $domains = Domain::where('namaDomain','like',"%".$request->search."%")->get();

            if($domains) {
            foreach ($domains as $domain) {
                    if($domain->hosting != NULL){
                        $output.='<tr>'.
                        '<td>'.$domain->id.'</td>'.
                        '<td>'.$domain->namaDomain.'</td>'.
                        '<td>'.$domain->hosting->domHost.'</td>'.
                        '<td><a href="https://'.$domain->hosting->domHost.'/cpanel" class="btn-sm btn-primary d-inline-block" target="_blank">Open cPanel</a> '.
                        '<a href="#" id="hosting" class="btn-sm btn-primary" target="_blank">Akun</a></td>'.
                        '</tr>';
                    }else{
                        $output.='';
                    }

            }
            return Response($output);
            }
        }
    }

    public function getHosting(Request $request)
    {

    }
}
