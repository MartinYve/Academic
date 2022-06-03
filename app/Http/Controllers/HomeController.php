<?php

namespace App\Http\Controllers;

use App\Enseignant;
use App\Option;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $options = Option::all() ;
        $enseignantsV = count(Enseignant::where('statut' , 'Vacataire')->get()) ;
        $enseignantsT = count(Enseignant::where('statut' , 'Titulaire')->get()) ;
        $etudiants = count(User::all()) ;
      
        return view('home' , compact('options','enseignantsV' , 'enseignantsT' , 'etudiants')) ;
    }
}
