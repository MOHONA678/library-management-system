<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\AdminLoginRequest;

class AdminController extends Controller
{
    //
    public function index(){
        return view('dashboard2');
    }

    public function create(){
        return view('auth.login2');
    }

    public function store(AdminLoginRequest $request)
    {
       

        $credentials = $request->validated();

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard')); 
           
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
         $request->session()->forget('admin_id');

        Auth::guard('admin')->logout();

        // $request->session()->invalidate();

        $request->session()->regenerateToken();
        
       
        return redirect('/admin');
    }
}