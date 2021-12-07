<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;
use App\Models\User;

class CustomController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('techno.store');
        }

        return redirect('register')->withSuccess('error');


    }

    public function register(){
        return view('auth.register');
    }

    public function customRegister(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect()->route('login');

    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard(){

        if (Auth::check()){
            return view('dashboard');
        }
        return redirect("login")->withSuccess('You are not allowed to access');

    }

    public function logOut(){

        Session::flush();
        Auth::logout();

        return redirect()->route('techno.store');
    }
}
