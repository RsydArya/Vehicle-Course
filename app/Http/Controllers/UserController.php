<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    public function index(): View
    {
        $user = User::all();
        return view('user.index',compact('user'));
    }

    public function profil(): View
    {
        $user = User::all();
        return view('user.profile',compact('user'));
    }

    public function signup(): View
    {
        $user = User::all();
        return view('user.sign-up',compact('user'));
    }

    public function registration(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'first_name'      =>'required',
            'last_name'      =>'required',
            'email'       =>'required',
            'password'         =>'required|',
        ]);
    
        User::create([
            'first_name'               =>$request->first_name,
            'last_name'              =>$request->last_name,
            'email'      =>$request->email,
            'password'     =>$request->password,
        ]);
    
        //Redirect to index
        return redirect()->route('user.sign-in')->with(['success' => 'Registration Success!']);
    }

    public function login(Request $request)
    {
        // Validasi
        $request->validate([
            'email' => 'required|email',
            'password'=> 'required',
        ]);

        // Mencari pengguna berdasarkan email
       $user = User::where('email', $request->email)->first();  
     if ($user){
        if($user->password == $request->password){
           return redirect()->route('pages.index')->with(['success' => 'Login Succesful']);
        }else{
            return redirect()->route("user.index")->with(['error' => 'Gagal Login - pass salah']);
        }
      }
      return redirect()->route("user.index")->with(['error' => 'Gagal Login - Email salah']);
    }
}