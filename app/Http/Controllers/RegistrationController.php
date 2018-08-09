<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
      return view('registration.create');
    }

    public function store()
    {
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
        'privilege' => 'required'
      ]);

      $user = new User();
      $user->name = request('name');
      $user->email = request('email');
      $user->privilege = request('privilege');
      $user->password = bcrypt(request('password'));

      $user->save();

      auth()->login($user);

      return redirect()->home();
    }
}
