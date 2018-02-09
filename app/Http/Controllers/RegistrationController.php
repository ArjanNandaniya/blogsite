<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
        //$user = User::create(request(['name', 'email', 'password']));
        // $user = User::create([ 
        //     'name' => request('name'),
        //     'email' => request('email'),
        //     'password' => bcrypt(request('password'))
        //     ]);

        // auth()->login($user);

        // Mail::to($user)->send(new Welcome($user));
        // Mail::to($user)->send(new WelcomeAgain($user));
        $form->persist();

        session()->flash('message','Thanks');

        return redirect()->home();
    }
}