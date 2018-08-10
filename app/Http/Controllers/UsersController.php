<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $users = User::all();

      return view('users.index', compact('users'));
    }

    public function delete(User $user)
    {
      if (Auth::check()) {
        $user->delete();
      }

      return back();
    }

    public function edit(User $user)
    {
      return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required',
        'privilege' => 'required'
      ]);

      $user->update($request->all());

      $users = User::all();

      return view('users.index', compact('users'));
    }

    public function resetPassword(User $user, Request $request)
    {
      $this->validate(request(), [
        'new-password' => 'required'
      ]);

      $password = bcrypt($request->input('new-password'));

      $user->update(['password' => $password]);

      return back();
    }
}
