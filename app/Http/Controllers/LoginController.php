<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // login berdasarkan role
        if(Auth::guard('opt')->attempt($credentials)){
            // dd(Auth::guard('opt')->user()->role);
            $request->session()->regenerate();
            return redirect()->intended('operator/dashboard_opt');

        }
        else if(Auth::guard('mhs')->attempt($credentials)){
            // dd(Auth::guard('mhs')->user());
            $request->session()->regenerate();
            return redirect()->intended('mahasiswa/dashboard_mhs');
        }
        else if(Auth::guard('dsn')->attempt($credentials)){
            // dd(Auth::guard('dsn')->user());
            $request->session()->regenerate();
            return redirect()->intended('dosenwali/dashboard_dsn');
        }
        else if(Auth::guard('dpt')->attempt($credentials)){
            // dd(Auth::guard('dpt')->user());
            $request->session()->regenerate();
            return redirect()->intended('departemen/dashboard_dpt');
        }
        else{
            return back()->with('loginError', 'Login Failed');
        }
    }
    public function getLogout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    }

}
