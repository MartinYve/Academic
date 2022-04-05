<?php

namespace App\Http\Controllers;

use App\Enseignant;
use App\Enseignement;
use App\Jour;
use App\Option;
use App\Periode;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnseignementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enseignement_id = [] ;
        $enseignements = Enseignement::all();
        $id = Periode::select('Enseignement_id')->get()->toArray();
        foreach ($id as $key1 => $values) {
            foreach ($values as $key2 => $value) {
                $enseignement_id [] = $value ;
            }
        };
        // dd($enseignement_id);
        $enseignement_per = Enseignement::whereNotIn('id' , $enseignement_id)->get() ;
        // dd($enseignement_per);
        $jours = Jour::all();
        return view('Enseignements.liste', compact('enseignements' , 'jours' , 'enseignement_per'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enseignantss = Enseignant::all() ;
        if (!empty($enseignantss)) {
            toast("Veillez d'abord crée un ou plusieurs enseignants.",'error');
            return redirect()->route('enseignant.create');
        } else {
            $enseignant_id = [] ;
        $id = Enseignement::select('enseignant_id')->get()->toArray();
        foreach ($id as $key1 => $values) {
            foreach ($values as $key2 => $value) {
                $enseignant_id [] = $value ;
            }
        };
        // dd($enseignement_id);
        $enseignants = Enseignement::whereNotIn('id' , $enseignant_id)->get() ;

        $options = Option::all();
        $jours = Jour::all();
        $periodes = Periode::all();
        return view('Enseignements.add', compact('jours', 'periodes' ,'options','enseignants'));
        }
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $names = $request->name;
        $credits = $request->credit;
        $option_id = $request->option_id;

        foreach ($names as $key1 => $name) {
            foreach ($option_id as $key2 => $id) {
               foreach ($credits as $key3 => $credit) {
                if ($key1 == $key2 && $key1==$key3) {
                    DB::table('enseignements')->insert([
                        'option_id' => $id,
                        'name' => $name,
                        'credit' => $credit
                    ]);
                   }
               }
            }
        }
        toast('Enseignement a été ajouté avec success`.','success');
        return redirect()->route('Enseignements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $enseignement = Enseignement::select('*')->where('id' , $id);
        
        $enseignement_periode = DB::table('periodes')->select('id')->where('Enseignement_id',$id)->first();
        
        if (!empty($enseignement_periode)) {
            $enseignement_period = DB::table('periodes')->where('Enseignement_id',$id);
        // dd($enseignement_period);
            $periode = DB::table('jour_periode')->where('periode_id',$enseignement_periode->id);
            $periode->delete();
            $enseignement_period->delete();
            $enseignement->delete();
        }else {
            $enseignement->delete();
        }
        toast('Enseignement a bien été supprimé !','error');
        return back();
    }
}
