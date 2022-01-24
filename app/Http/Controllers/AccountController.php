<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index() {

        $users = User::get();
        $roles = Role::get();

        return view('adm.manage-akun.index',compact('users','roles'));

    }

    public function client() {

        $users = User::with('roles')->get();
        return view('adm.akun.client',compact('users'));

    }

    public function team() {

        $users = User::with('roles')->get();
        return view('adm.akun.team',compact('users'));

    }

    public function create() {

        return view('adm.manage-akun.add');

    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(),[
            'nama' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'idRole' => 'required'
        ],$messages = [
            'email.unique' => 'Email sudah terdaftar sebelumnya',
            'usrn.unique' => 'Username sudah terdaftar sebelumnya',
            'idRole.required' => 'Mohon isi field role user ini'
        ]);
        if (User::where('email', '=',$request->get('email'))->exists()) {
            Alert::error('Gagal','Email sudah terdaftar sebelumnya');
        }elseif(User::where('usrn', '=', $request->get('usrn'))->exists()){
            Alert::error('Gagal','Username sudah terdaftar sebelumnya');
        }
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'usrn' => $request->usrn,
            'jabatUser' => $request->jabatUser,
            'password' => bcrypt('1234'),
            'telpUser' => $request->telpUser,
            'tglUser' => $request->tglUser,
            'addrUser' => $request->addrUser,
            'kotaUser' => $request->kotaUser
        ]);

        $user->assignRole($request->idRole);

        Alert::success('Berhasil','Berhasil tambah user');
        return redirect()->route('account.index');

    }

    public function edit($idUser) {

        $user = User::findOrFail($idUser);
        $roles = Role::get();
        return view('adm.manage-akun.edit',compact('user','roles'));

    }

    public function update(Request $request , $idUser) {

        $request->validate([
            'nama' => 'required',
            'usrn' => 'required',
            'tglUser' => 'required',
            'addrUser' => 'required',
            'email' => 'required',
        ]);
        $user = User::findOrFail($idUser);
       $user->update([
                'nama' => $request->nama,
                'usrn' => $request->usrn,
                'tglUser' => $request->tglUser,
                'addrUser' => $request->addrUser,
                'email' => $request->email,
                'jabatUser' => $request->jabatUser,
                'telpUser' => $request->telpUser,
                'kotaUser' => $request->kotaUser,
            ]);
        $user->assignRole($request->idRole);
        Alert::success('Berhasil','Data berhasil diupdate');
        return redirect()->route('account.index');

    }

    public function delete(User $user) {

        $user->delete();
        Alert::success('Berhasil','Data telah terhapus');
        return redirect()->route('account.index');

    }

}
