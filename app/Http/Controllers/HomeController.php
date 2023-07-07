<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $user;

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        // dd(auth()->user());
        return view(backpack_view('home.home'));
    }
}
