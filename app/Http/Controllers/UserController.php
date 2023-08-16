<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
      
        $inputs = $request->except('_token');
        $inputs['password'] = Hash::make($inputs['password']);
        if ($request->hasFile('image')) {
            $inputs['image'] = Storage::disk('public')->put('files', $request->file('image'));
        }
        User::query()->create($inputs);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        }
    }
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
    public function edit(User $user)
    {
        return view('site.user.edit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $inputs = $request->except('_token', '_method');
        if ($request->get('password') != 'same') {
            $inputs['password'] = Hash::make($inputs['password']);
        }
        if ($request->hasFile('image')) {
            $inputs['image'] = Storage::disk('public')->put('files', $request->file('image'));
        }
        $user->update($inputs);
        return redirect()->route('home');
    }
}
