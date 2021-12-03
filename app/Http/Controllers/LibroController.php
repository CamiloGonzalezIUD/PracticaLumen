<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller{

public function index(){

    $datosLibro=Libro::all();
    return response()->json($datosLibro);
    //Se crea función index con una variable $datosLibro que va al modelo Libro, consulta la información en la bd
    // y la devuelve en formato json
}


}