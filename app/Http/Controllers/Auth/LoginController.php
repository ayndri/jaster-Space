<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'usrn';
    }
    
    public function logout() {
        Auth::logout(); // logout user
        return redirect(\URL::previous());
    }


    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'usrn' => 'required',
            'password' => 'required',
           
        ]);
        $cekuser = User::where('usrn', '=', $input['usrn'])->first();
        if (auth()->attempt(array('usrn' => $input['usrn'], 'password' => $input['password']))) {
            if (auth()->user()) {
                $cekuser->update([
                    'lastLogin' => Carbon::now()->toDateTimeString()
                ]);
                return redirect()->route('/');
            }
        } elseif(!$cekuser) {
            return redirect()->route('login')->with('error', 'Username tidak ada');
        } else{
            return redirect()->route('login')->with('error-pass', 'Password Salah');
        }
    }

    
    
}
