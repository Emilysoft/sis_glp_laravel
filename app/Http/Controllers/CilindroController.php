<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cilindro;


class CilindroController extends Controller
{
    public function index()
    {
        return view('Cilindro/HomeCilindro');
    }

    public function create()
    {
        return view('Cilindro/CreateCilindro');
    }




}
