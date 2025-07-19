<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotiBlogController extends Controller
{
    public function index()
    {
        $titulo = 'Nación Taíno de boriken';
        return view('home.blog');
    }
}
