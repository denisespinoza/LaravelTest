<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function show() {
        return view('alumno.show');
    }

    public function create() {
        return "Crear un nuevo alumno";
    }
}
