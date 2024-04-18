<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
// use App\Http\Requests\Auth\Register\AddRequest;
use App\Models\User;
use App\Traits\Auth\HasAuth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    // use HasAuth;

    public function loginView(){

        return view('auth.login');
    }

    public function login(LoginRequest $request){
        if ($this->authenticated($request->credentials())) {
            Alert::success('Success', 'successfully logged in...!');
            return redirect(route('banner.index'));
        }
        Alert::error('Failed', 'credentials does not match...!');
        return back();
    }

    protected function authenticated(array $credentials){
        if (Auth::attempt($credentials)) {
            return true;
        }
    }

    function logout(Request $request) {
        Auth::logout();
        return redirect()->route('auth.login');
    }

    // public function signUp() : View
    // {
    //     return view('auth.register');
    // }


    // public function registered(AddRequest $request)
    // {
    //     // dd($request->all());
    //     if (User::create($request->sanitizedRegister())) {
    //         $this->authenticate(['email' => $request->email,'password' => $request->password]);
    //         Alert::success('Success', 'successfully registered...!');
    //         return redirect(route('category.list'));
    //     }
    // }
}
