<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\premio;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PremioController extends Controller{
    
    public function listado(){
        $premios = Premio::All()->sortByDesc('anio');

        return view('/dashboard',['listaPremios' => $premios]);
    }
    public function formCrearPremio(){
        return view('crearPremio');

    }
    public function crearPremio(Request $datos){
        
        $p = new premio();

        $p->anio = $datos->anio;
        $p->autor = $datos->autor;
        $p->comic = $datos->titulo;
        $p->portada = "";
        $p->user_id =  Auth::User()->id;


        $p->save();

        return redirect()->route('dashboard');
    }
    public function listaMisPremios(){

        $lp = Auth::User()->premios;
        return view('misPremios',['listaPremios' => $lp]);

        /*
        $premios = Premio::where('user_id',Auth::User()->id)->get();

        return view('/misPremios',['listaPremios' => $premios]);
        */


    }
    public function borrarId($id){
        $p = premio::find($id);

        if($p->user_id == Auth::User()->id){
            $p->delete();
        }

        $lp = Auth::User()->premios;

        return view ('misPremios',['listaPremios' => $lp]);
    }
    public function modificarId($id){
        $p = premio::find($id);

        if($p->user_id == Auth::User()->id){
            return view ('crearPremio',['premio' => $p]);
        }else{
            return view ('misPremios',['listaPremios' => Auth::User()->premios]);
        }
    }
}
