<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function saludo($nombre) {
        return "Hola mundo " . $nombre;
	}
}
