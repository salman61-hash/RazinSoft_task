<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'bio' => 'required|string',
            'profile_image' => 'required|image|mimes:jpg,png|max:2048',
            'hobbies' => 'required|string',
            'date_of_birth' => 'required|date',
        ]);

        // Upload image
        $imagePath = $request->file('profile_image')->store('profiles', 'public');

        // Save to DB
        Profile::create([
            'user_id' => Auth::id(),
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'bio' => $request->bio,
            'profile_image' => $imagePath,
            'hobbies' => $request->hobbies,
            'date_of_birth' => $request->date_of_birth,
        ]);

        return redirect()->route('profile.create')->with('success', 'Profile created successfully!');
    }


    public function myProfile()
{
    $profile = Profile::where('user_id', Auth::id())->first();
    return view('profile.my', compact('profile'));
}

public function allProfiles()
{
    $profiles = Profile::with('user')->latest()->get();
    return view('profile.list', compact('profiles'));
}


public function view($id)
{
    $profile = Profile::findOrFail($id);
    return view('profile.view', compact('profile'));
}
}

