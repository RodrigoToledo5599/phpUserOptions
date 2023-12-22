<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;



class UserController extends Controller
{
    public function registerAccount(Request $request)
    {
        $user = new User();
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();
        return redirect('/');
    }


    public function authenticate(Request $request)
    {
        validator(request()->all(),[
            'email' => ['required','email'],
            'password' => ['required']
        ])->validate();
            
        if(auth()->attempt(request()->only(['email','password']))){
            return redirect('/sucesso');
        }
        else{
            return redirect('/fail');
        }
    }

}
