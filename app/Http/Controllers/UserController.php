<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if(request()->has('empty')){
            $users = [];
        }else{
            $users = ["Jose Miguel","Roberto Vazques","Carlos Ramirez"];
        }
        return view('user',compact('users'));
    }
    public function show($id){
        return "Ver un solo usuario {$id}";
    }
    public function create(){
        return "Crear un usuario";
    }   
}
