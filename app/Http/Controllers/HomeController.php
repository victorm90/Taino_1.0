<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $titulo = 'Asentamiento Taíno | Patrimonio Cultural';
        return view('home.index', compact('titulo'));
    }
}
