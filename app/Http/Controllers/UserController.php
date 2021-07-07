<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        /*$host = '192.168.0.195';
        $puerto = '27017';
        $conexion = new \MongoDB\Driver\Manager("mongodb://$host:$puerto --username root -p --authenticationDatabase admin");
        $filtrar = array();
        $options = array();
        $query = new \MongoDB\Driver\Query($filtrar, $options);
        $leerPreferencia = new \MongoDB\Driver\ReadPreference(\MongoDB\Driver\ReadPreference::RP_PRIMARY);
        $datos = $conexion->executeQuery("declaraciones.users", $query, $leerPreferencia);*/
        $datos = Users::paginate(15);
        //dd(collect($datos));
        return view('usuarios', compact('datos')); 
    }
}
