<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except' => 'destroy']);
    }
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
//        dd(request(['email','password']));
       if(! auth()->attempt(request(['email', 'password'])))
       {
         return back()->withErrors([
             'message'=>'plaese check login detail'
         ]);
       }
      
       return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
