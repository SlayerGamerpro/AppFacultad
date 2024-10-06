<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "bienvenido a la pagina de cursos";
    }

    public function create(){
        return "creando un nuevo curso";
    }

    public function show($curso){
        return "mostrando un curso";
    }
}
