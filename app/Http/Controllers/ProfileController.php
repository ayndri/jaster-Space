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

        if ($request->hasFile('fotoUser')) {
            $file = $request->file('fotoUser');
            $nama_file = random_int(1000, 9999) . "_" . $file->getClientOriginalName();
            $tujuan_upload = "public/assets/fotoUser";
            $file->move($tujuan_upload, $nama_file);
            $user->fotoUser = $nama_file;
          } else {
            $nama_file = NULL;
          }

        Alert::success('Berhasil','Profile telah diupdate');
        $user->save($request->all());
        return redirect()->route('profile.edit',auth()->user()->idUser);
    }
}
