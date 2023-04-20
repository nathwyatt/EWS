<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use App\Models\User;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('profile');
    }

    public function update(User $user, Request $request)
    {   
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'avatar'=>$request->avator,
            'updated_at' => now()
        ]);

        return view('profile')->with('profile','Profile updated successfully!');
    }
    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image',
        ]);
  
        $avatarName = time().'.'.$request->avatar->getClientOriginalName();
        $request->avatar->move(public_path('avatars'), $avatarName);
  
        $user = User::user();
        $user->avatar = $avatarName;
        $user->save();
  
        return back()->with('success', 'Avatar updated successfully.');
    }
}

