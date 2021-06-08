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
    public function index(Request $request)
    {
        // $request->session()->put(['charles'=>'master student']);
        // session(['charles'=>'mastering']);
        // $request->session()->forget('charles');
        // return session('charles');
        // $request->session()->flush();
        // return $request->session()->all();
        // return view('home');
        // $request->session()->flash('message', 'Your post has been created');
        return $request->session()->get('message');
    }
}
