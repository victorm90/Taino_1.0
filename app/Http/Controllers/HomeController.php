<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $titulo = 'Nación Taíno de boriken';
        return view('home.index', compact('titulo'));
    }
}
