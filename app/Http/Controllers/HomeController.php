<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $userinfo['name'] = $user->name;
        $userinfo['email'] = $user->email;
        $userrol = $user->userRol()->get();
        $userinfo['rolname'] = $userrol[0]->rolname;

        return view('home', compact('userinfo'));
    }
}
