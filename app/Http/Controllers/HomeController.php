<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
       $this->middleware('EnsahAuth', ['only' => ['login','register']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.home');
    }

    public function showEnsah(){
        return view('home.under_construction');
        return view('home.ensah');
    }

    public function showActualite(){
        return view('home.actu');
    }

    public function showGallery(){
        return view('home.under_construction');
        return view('home.gallery');
    }

    public function showFormation(){
        return view('home.under_construction');
        return view('home.formation');
    }

    public function showEnseigant(){
        return view('home.under_construction');
        return view('home.corpsEnseigant');
    }

    public function register(){
        return view('auth.register');

    }
    public function login(){
        return view('auth.login');

    }
}
