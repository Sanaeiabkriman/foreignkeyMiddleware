<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ValRequest;
use Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donnees = User::all();
        return view('users', compact('donnees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( ValRequest $request)
    {
        $new = new User;
        $img=$request->file('images')->store('/public/images');
        $new->name = $request->name;
        $new->role_id = $request->role;
        $new->email =$request->email;
        $new->password =bcrypt($request->password);
        $new->images = $img;
        $new->save();
        return redirect ('/admin/users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $mod=User::find($id);
        $role=Role::all();
        return view ('edit',compact('mod','role'));
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
        $mod=User::find($id);
        $mod->name =$request->name;
        $mod->email=$request->email;
        $mod->role_id=$request->role;
        $mod->save();
        return redirect ('/admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donnees=User::find($id);
        $donnees->delete();
        return redirect ('/admin/users');
    }
  
}
