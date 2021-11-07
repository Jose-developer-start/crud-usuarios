<?php

namespace App\Http\Controllers;

use App\Profession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(){
        $profesiones = Profession::join('users','professions.id','=','users.profession_id')
        ->groupBy('professions.name')
        ->select('professions.name as profession',DB::raw('count(professions.name) as profession_count'))
        ->get();
        $punto = [];
        foreach($profesiones as $profesion){
            $punto[] = ['name' => $profesion['profession'],'y' => $profesion['profession_count']];
        }
        return view('welcome',['data' => json_encode($punto)]);
    }
}
