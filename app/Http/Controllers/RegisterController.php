<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){

        return view('auth.register');
    }

    public function store(Request $request){

        $this->validate($request, [

            'name' => 'required| max: 20',
            'email'=>'required|email|unique:users', //unique to the users table. If column name/key is different change the key after users after comma eg unique:users, user_email
            'password'=> 'required|confirmed',
            
        ]);

        User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
                // authenticate
                auth()->attempt($request->only('email', 'password'));

            return redirect('dashboard');

    }
}
