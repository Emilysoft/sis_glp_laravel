<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cilindro;


class CilindroController extends Controller
{


    public function index()
    {  
        $cilindros = Cilindro::orderBy('id')
        -> get();
        return view('Cilindro/HomeCilindro', compact('cilindros'));
    }


    public function create()
    {
        return view('Cilindro/CreateCilindro');
    }


    public function store(Request $request)
    {
        $cilindro = new cilindro();
        $cilindro->formato = $request->formato;
        $cilindro->save();
        return redirect('/cilindros');
    }

    public function show($id)
    {
        $cilindro = Cilindro::find($id);
        return view('Cilindro.ShowCilindro', compact('cilindro')); // <--- El nombre de "Cilindro." es el nombre de la carpeta que continee la vista. 
    }
  
    






}
