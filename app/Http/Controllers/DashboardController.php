<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $titulo = 'Dashboard | Taino';
        return view('dashboard.layouts.main', compact('titulo'));
    }
}
