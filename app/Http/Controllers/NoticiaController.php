<?php

namespace App\Http\Controllers;

class NoticiaController extends Controller
{
    /**
     * Método responsável por retornar a view index.
     *
     * @return string
     */
    public function index()
    {
        return view('noticias.index');
    }

    /**
     * Método responsável por retornar a view categoria.
     *
     * @return string
     */
    public function categoria()
    {
        return view('noticias.categoria');
    }

    /**
     * Método responsável por retornar a view visualizar.
     *
     * @return string
     */
    public function visualizar()
    {
        return view('noticias.visualizar');
    }
}
