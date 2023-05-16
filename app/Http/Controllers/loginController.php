<?php

namespace App\Http\Controllers;

use App\Models\User;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required','exists:users,name'],
            'password' => ['required']
        ]);

        $user = User::query()->where('name',$request->get('username'))->orWhere('email',$request->get('email'))->first();

        if (Hash::check($request->get('password'),$user->password)){
            auth()->login($user);
            return redirect()->route('manage.index');
        }

        return redirect()->back()->withErrors(['message'=>'Password is incorrect']);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('index');
    }
}
