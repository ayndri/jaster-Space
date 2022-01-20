<?php

namespace App\Http\Controllers;

use App\Mail\EmailMail;
use App\Models\Email;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index() {
        $emails = Email::latest()->get();
        return view('adm.email.index',compact('emails'));
    }

    public function create() {
        return view('adm.email.add');
    }

    public function store(Request $request) {

            $emails = new Email;
            $emails->noOrder = $request->noOrder;
            $emails->email = $request->email;
            $emails->gd = $request->gd;

            $emails->save();

            Mail::to($request->email)->send(new EmailMail($emails));
            return redirect()->route('email');

    }
}
