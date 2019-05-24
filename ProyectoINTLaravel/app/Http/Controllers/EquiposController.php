<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquiposController extends Controller
{
  public function equipos(){
    return view('equipos');
  }
}
