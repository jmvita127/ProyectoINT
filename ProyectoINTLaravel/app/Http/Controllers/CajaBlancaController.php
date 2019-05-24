<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CajaBlancaController extends Controller
{
    public function cajaBlanca(){
      return view('cajaBlanca');
    }
}
