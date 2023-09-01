<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestaoController extends Controller
{
    public function index()
    {
        return view('gestao.index');
    }
}
