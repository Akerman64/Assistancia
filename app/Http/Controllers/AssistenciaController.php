<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\demande;
use Illuminate\Http\Request;

class AssistenciaController extends Controller
{
    public function home(){
        return view('assistencia.home');
    }

    public function dem(){
        $data = demande::all()->sortBy('nom_admin');

        $count = demande::where('status', 'Traitée')->count();
        $count1 = demande::where('status', 'Rejetée')->count();
        $count2 = demande::where('status', 'En attente')->count();
        $count3 = demande::where('status', 'En cours de traitement')->count();



        return view('assistencia.dem', compact('data', 'count', 'count1', 'count2', 'count3'));
    }
}
