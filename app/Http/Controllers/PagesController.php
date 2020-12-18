<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{

    public function home() {
        return view('home');
    }

    public function tesis(){
        $proyectos = App\Proyecto::all();
        return view('tesis', compact('proyectos'));
    }

    public function residencias(){
        $proyectos = App\Proyecto::all();
        return view('residencias', compact('proyectos'));
    }
    
    public function serviciosocial(){
        $proyectos = App\Proyecto::all();
        return view('serviciosocial', compact('proyectos'));
    }

    public function investigacion(){
        $proyectos = App\Proyecto::all();
        return view('investigacion', compact('proyectos'));
    }
    
}
