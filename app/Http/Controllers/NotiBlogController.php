<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotiBlogController extends Controller
{
    public function index()
    {
        $titulo = 'Dashboard | Taino';
        return view('home.blog');
    }
}
