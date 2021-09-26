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
        $data = request()->all();
        $data['password'] = bcrypt(request()->password);
        User::create($data);
        return redirect()->route('usuario.index');
    }     
}
