<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    /**
     * Método responsável por trazer a view home.
     *
     * @return string
     */
    public function home()
    {
        return view('site.home');
    }

    public function buscar()
    {
        return view('site.buscar');
    }
}
