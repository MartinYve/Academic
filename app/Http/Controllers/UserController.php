<?php

namespace App\Http\Controllers;

use App\Niveau;
use App\Option;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = Option::all();
        $roles = Role::get()->pluck('name', 'name');
        return view('users.add', compact('roles' , 'options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'last_name' => ['required', 'string', 'max:255'],
            'matricule' => ['required', 'string', 'max:255'],
            'option' => ['required'],
            'phone_number' => ['required', 'numeric'],
            'avatar' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $user = User::create($request->all());
        // dd('pass');
        
        $roles = $request->input('roles') ? $request->input('roles') : [];   
        $id_role = Role::select('id')->where('name', $roles)->get()->first()->toArray();   
        $id = DB::table('role_user')->latest('id')->first();
        foreach ($id_role as $key => $value) {
            DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [$id->id + 1,$user->id, $value]);
        }
        
        // $user->assignRole($roles);
        toast('User has been successfully added.','success');
        return redirect()->route('users.index');
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
        $user = User::select('*')->where('id' , $id);
        $user_role = DB::table('role_user')->where('user_id',$id);
        
        $user_role->delete();
        $user->delete();
        toast('User has been successfully removed !','error');
        return back();
    }
}
