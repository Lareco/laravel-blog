<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function __construct()
    {
      // Redirect to '/' if loged in
      $this->middleware('guest');
    }

    public function create()
    {
    	return view('registration.create');
    }

		public function store(RegistrationRequest $request)
		{
			// Validate the fann

			// Create and save the User
			$user = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password'))
      ]);

			// Sing them in
			auth()->login($user);

      \Mail::to($user)->send(new Welcome($user));

			// Redirect to the home page
			return redirect()->home();
		}
}
