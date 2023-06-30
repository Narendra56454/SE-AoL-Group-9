<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function editProfile()
    {
        return view('editProfile');
    }

    public function edit(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Update the user's data
        $user->name = $request->input('name');
        $user->phone_number = $request->input('phone_number');
        $user->city = $request->input('city');
        $user->country = $request->input('country');

        // Save the changes to the database
        $user->save();

        // Redirect to the profile page or any other appropriate page
        return redirect('/profile');
    }
}
