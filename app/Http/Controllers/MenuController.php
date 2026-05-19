<?php

namespace App\Http\Controllers;

class MenuController extends Controller
{
    public function menu()
    {
        return view('oper.menu');
    }

    public function showSumar()
    {
        return view('oper.sumar');
    }

    public function showRestar()
    {
        return view('oper.restar');
    }

    public function showMultiplicar()
    {
        return view('oper.multiplicar');
    }

    public function showDividir()
    {
        return view('oper.dividir');
    }
}
