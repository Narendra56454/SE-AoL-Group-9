<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5|max:255',
        'conf_password' => 'required|same:password',
        'phone_number' => 'required',
        'city' => 'required',
        'country' => 'required'
    ]);

    // Check if email already exists
    $existingUser = User::where('email', $validatedData['email'])->first();
    if ($existingUser) {
        return redirect('/register')->with('error', 'Email already registered.');
    }

    $validatedData['password'] = Hash::make($validatedData['password']);
    $validatedData['profile_img'] = 'default_profile_image2.svg';

    User::create($validatedData);

    return redirect('/login')->with('success', 'Registration Success!');
}

}
