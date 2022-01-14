<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function edit(User $user) {
        return view('adm.profile.edit',compact('user'));
    }

    public function update(Request $request, User $user) {

        if($request->file('fotoUser')){
            if($user->fotoUser && file_exists(storage_path('app/public/' . $user->fotoUser))){
            \Storage::delete('public/'.$user->fotoUser);

        }
            $nama_file = time() . "_" . $request->file('fotoUser')->getClientOriginalName();
            $file = $request->file('fotoUser')->store('fotoUser/'.$nama_file, 'public');
            $user->fotoUser = $file;
        }
        Alert::success('Berhasil','Profile telah diupdate');
        $user->save($request->all());
        return redirect()->route('profile.edit',auth()->user()->nama);
    }
}
