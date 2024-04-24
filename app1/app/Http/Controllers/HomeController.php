<?php

namespace App\Http\Controllers;
use Auth;
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
        return view('home');
    }
    
    public function profile()
    {
        $username=Auth::user()->name;
        $emailid=Auth::user()->email;
        $countryname=Auth::user()->country;
        $positionname=Auth::user()->position;
        $phonenumber=Auth::user()->phonenum;
        return view('home',compact('username','emailid','countryname','positionname','phonenumber'));
    }
    public function profile1()
    {
        $username=Auth::user()->name;
        $emailid=Auth::user()->email;
        $countryname=Auth::user()->country;
        $positionname=Auth::user()->position;
        $phonenumber=Auth::user()->phonenum;
        return view('home',compact('username','emailid','countryname','positionname','phonenumber'));
    }
    
    
    public function displayuser()
    {
        $username=Auth::user()->name;
        $emailid=Auth::user()->email;
        $countryname=Auth::user()->country;
        $positionname=Auth::user()->position;
        return view('forgetpassword',compact('username','emailid','countryname','positionname'));
    }
    public function updateuser(Request $request)
    {
        $username=Auth::user()->name;
        $emailid=Auth::user()->email;
        $countryname=Auth::user()->country;
        $positionname=Auth::user()->position;
        return view('forgetpassword',compact('username','emailid','countryname','positionname'));
    }
    
    

}
