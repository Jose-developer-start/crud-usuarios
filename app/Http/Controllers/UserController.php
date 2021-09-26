<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',compact('users'));
    }
    public function show($id){
        $user = User::findOrFail($id);
        return view('users.show',compact('user'));
    }
    public function create(){
        return view('users.create');
    }
    public function store(){
        //$data = request()->all();
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'profession_id' => 'required'
        ],[
            'name.required' => "El campo nombre es requirido",
            'email.required' => "El campo email es requirido",
            'password.required' => "El campo password es requirido",
            'profession_id.required' => "El campo profesión es requirido"
        ]);


        $data['password'] = bcrypt(request()->password);
        User::create($data);
        return redirect()->route('usuario.index');
    }     
}
