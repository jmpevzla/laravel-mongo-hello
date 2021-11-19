<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use MongoDB\Client as MongoDB;

class PostresController extends Controller
{
    private function getMongo() {
        // Defino el servidor local y el puerto
	    $host = env('MONGO_HOST', 'localhost');
		$puerto = env('MONGO_PORT', 27017);
        $user = env('MONGO_USERNAME');
        $pwd = env('MONGO_PASSWORD');

        //$options = ["typeMap" => ['root' => 'array', 'document' => 'array']];
        $options = [];

        // Realizamos la conexión a la Base de Datos MongoDB
		$conexion = new MongoDB("mongodb://${user}:${pwd}@$host:$puerto", [], $options);

        // Obtenemos la coleccion a consultar
        return $conexion->selectCollection(env('MONGO_DATABASE'), 'postres');
    }

    public function index()
    {
        // Obtenemos el operador de colleccion de mongodb
        $coleccion = $this->getMongo();

        // Obtenemos los resultados
        $datos = $coleccion->find();
        //$datos = $coleccion->find()->toArray();

        return view('postres', compact('datos'));
    }
}
