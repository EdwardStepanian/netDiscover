<?php

namespace App\Http\Controllers;

use App\User;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = new User;
        if(empty($user->tarif)){
            return redirect('/tarif');
        }else{
            return view('home');
        }
    }
    public function showTarif(){
        return view('tarif');
    }
}
