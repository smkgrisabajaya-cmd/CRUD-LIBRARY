<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\ModelReg;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function postRegister(Request $request){
        $Validated=$request->validate([
            'name'=>'required|min:4',
            'email'=>'required|email|unique:AuthCredentials,email',
            'password'=>'required|min:6',
        ]);

        ModelReg::create([
            'name'=>$Validated['name'],
            'email'=>$Validated['email'],
            'password'=>Hash::make($Validated['password'])
        ]);

        return redirect('/login');
    }
}
