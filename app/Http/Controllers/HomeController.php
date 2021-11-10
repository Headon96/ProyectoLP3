<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\publicacion;


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
        return view('home');
    }

    public function perfil()
    {
        return view('perfil');
    }

    public function mensajes()
    {
        return view('mensajes');
    }

    public function publicaciones()
    {     
        $publicacion = publicacion::get();
        $user = User::get();
        return view("publicaciones", ["publicacion"=>$publicacion, "user"=>$user]);
    }
    public function c_publicaciones(Request $data)
    {
        $data->validate(
            [
                
            ]
        );       

        $publicacion = new publicacion();
        $publicacion->fecha = $data["fecha"];
        $publicacion->hora = $data["hora"];
        $publicacion->titulo_p = $data["titulo_p"];
        $publicacion->descripcion_p = $data["descripcion_p"];          
        $publicacion->f_id_user = auth::user()->id; 
        $publicacion->save();
        return redirect()->route('publicaciones')->with('status', 'Publicacion creada!');
    }


    public function editar()
    {
       return view('editar');
    }
    
    public function editarPerfil(Request $tabla)
    {
        
        $perfil = User::find(Auth::id());
        $perfil->name = $tabla['name'];
        $perfil->profesion = $tabla['profesion'];
        $perfil->save();      

        return redirect()->route('perfil')->with('status', 'Actualizado!');
    }
    
  
}