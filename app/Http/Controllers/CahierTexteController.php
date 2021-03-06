<?php

namespace App\Http\Controllers;

use App\Cahiertext;
use App\Enseignant;
use App\Enseignement;
use App\Option;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CahierTexteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user() ;
        $enseignements = [] ;
        $enseignants = [] ;
        $optionuser = $user->option ;
        $enseignement = $optionuser->enseignements ;
        foreach ($enseignement as $key => $value) {
            $enseignements [] = $value ;
            $verify = Enseignant::where('id' , $value->enseignant_id)->first() ;
            $enseignants [] = $verify;
        }
        // dd($enseignants);
        // $enseignements = Enseignement::all() ;
        $options = Option::all() ;
        return view('cahiertexte.index', compact('enseignants', 'enseignements' , 'options')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user() ;
        $options = [] ;
        $enseignant =  Enseignant::select('*')->where('email' , $user->email)->first() ;
        foreach ($enseignant->enseignements as $key => $value) {
            $enseignements [] = $value;
        }
        $id = Auth::user()->id;
        return view('cahiertexte.ChoiseOption' , compact('enseignements' , 'id')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        Cahiertext::create($request->all());
        $heur = Enseignant::select('heur')->where('name' , $request->enseignant)->first();
        
        Enseignant::where('name' , $request->enseignant)->update([
            'heur' => $heur->heur + 2 
        ]);
        toast('les informations ont ??t?? ajout?? !!!' , 'success');
        $options = Option::all() ;
        $enseignantsV = count(Enseignant::where('statut' , 'Vacataire')->get()) ;
        $enseignantsT = count(Enseignant::where('statut' , 'Titulaire')->get()) ;
        $etudiants = count(User::all()) ;
      
        return view('home' , compact('options','enseignantsV' , 'enseignantsT' , 'etudiants')) ;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('lol') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
