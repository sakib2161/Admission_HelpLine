<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Customer;
//use App\User;
use DB;
use App\Customer;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return view('admin.home.dashboard');
    }
    
   

}
