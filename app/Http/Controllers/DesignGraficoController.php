<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignGraficoController extends Controller
{
    public function index()
    {
        return view('designgrafico.index');
    }
}
