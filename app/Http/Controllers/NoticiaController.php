<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index()
    {
        return view('noticias.index');
    }

    public function categoria()
    {
        return view('noticias.categoria');
    }

    public function visualizar()
    {
        return view('noticias.visualizar');
    }
}
