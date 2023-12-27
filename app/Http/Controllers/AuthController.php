<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;



class AuthController extends Controller
{
    public function __invoke()
    {
    }

    public function login(){


        validator(request()->all(),[
            'email' => ['required','email'],
            'password' => ['required']
        ])->validate();
        
        /*    
        if(auth()->attempt(request()->only(['email','password']))){
            return redirect('/sucesso');
        }
        else{
            return redirect('/fail');
        }
        */
        $user = User::where('email',request('email'))->first();
        if(Hash::check(request('password'), $user->getAuthPassword())){
            return [
                'token' => $user->createToken(time())->plainTextToken
            ];
        } 
        
        
    }

}
