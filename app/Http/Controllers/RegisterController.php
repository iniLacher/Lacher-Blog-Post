<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Session\Middleware\Star;

class RegisterController extends Controller
{
  public function index() 
  {
    return view('auth.register', [
      "title" => "Registration",
      "active" => "login"
    ]);
  }

  public function store(Request $request) 
  {
      $validatedData = $request->validate([
      "name" => "required|max:255",
      "username" => ["required", "min:3", "max:30", "unique:users"],
      "email" => "required|email:dns|unique:users",
      "password" => "required|min:5|max:255",
    ]);
    // $validatedData['password'] = bcrypt($validatedData['password']);
    $validatedData['password'] = Hash::make($validatedData['password']);

    User::create($validatedData);
    // session()->flash('success', 'Registration Succesfully!!, Please Login');

    return redirect('/login')->with('success', 'Registration Succesfully!! Please Login');
  }
}
