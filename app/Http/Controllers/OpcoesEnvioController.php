<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OpcoesEnvio;

class OpcoesEnvioController extends Controller
{
    public function list()
    {
        $opcoes = OpcoesEnvio::all();

        return response()->json($opcoes);
    }
}
