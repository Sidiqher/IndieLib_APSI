<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'Login'
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'nim-nip'=>['required', 'min:3', 'max:255', 'unique:users'],
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:5|max:255|',
            'no-hp'=>'required|min:10|max:255|'
        ]);

        $validatedData["password"] = Hash::make($validatedData["password"]);
        
        User::create($validatedData);

        $request->session()->flash('success', 'Registrasion success!!');
        return redirect('/signin');
    }
}
