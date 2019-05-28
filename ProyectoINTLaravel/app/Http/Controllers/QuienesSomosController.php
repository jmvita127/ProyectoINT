<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
  public function quienesSomos(){
    return view('quienesSomos');
  }
}
