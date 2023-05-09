<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use App\Models\User;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $user = User::find($id);
       
        return view('profile.profile',compact('user',));
    }

    public function editprofile(User $user )
    {
        $user = User::all();
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('profile.edit',compact('user','roles','userRole'));
    }

    public function update(User $user, Request $request)
    {   
       
            request()->validate([
                'name' => 'required',
                'email' =>'required',
                'avatar'=>'required',
                'updated_at'=> now()
                
        ]);

        $user->update($request->all());
        return view('profile.profile')->with('profile','Profile updated successfully!');
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

