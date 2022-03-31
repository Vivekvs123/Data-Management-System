<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        return view('home');
    }
    public function dashboard()
    {
        $inactive = User::where('status','0')->count();
        $adminu = User::where('role_id','2')->count();
        $salesu = User::where('role_id','3')->count();
        return view('admin.pages.dashboard',compact('inactive','adminu','salesu'));
    }
}
