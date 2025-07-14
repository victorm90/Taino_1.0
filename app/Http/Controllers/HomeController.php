<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $titulo = 'Dashboard | Taino';
        return view('home.index');
    }
}
