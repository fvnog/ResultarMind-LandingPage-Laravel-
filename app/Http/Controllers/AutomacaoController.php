<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutomacaoController extends Controller
{
    public function index()
    {
        return view('automacao.index');
    }
}
