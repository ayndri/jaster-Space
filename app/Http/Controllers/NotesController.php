<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\User;
use Alert;
use App\Notifications\NotesNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotesController extends Controller
{
    public function create()
    {
        $user  = User::role([1,2,3,5])->get();
        $listNotes = Notes::join('users', 'notes.penerima', 'users.idUser')
        ->where('notes.penerima', '=',auth()->user()->idUser)
        ->get();
        return view('adm.notes.add',compact('user','listNotes'));
    }

    public function store(Request $request)
    {
        $notes = new Notes;
        $notes->pengirim = $request->pengirim;
        $notes->penerima = $request->penerima;
        $notes->isiPesan = $request->isiPesan;
        $notes->save();

        $users = User::select('*')
        ->where('users.idUser','=',$request->penerima)
        ->get();

        Notification::send($users, new NotesNotification($notes));
        Alert::success('Berhasil','Notes added');
        return redirect()->route('notes.add');
    }

    public function getNotes() {
        $notes = Notes::where('');
    }
}
