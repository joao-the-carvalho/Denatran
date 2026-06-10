<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Ocorrencia;
use Illuminate\Http\Request;

class RegOcorrencia extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'lugar' => 'required|string|max:255',
            'nivel' => 'required|string|max:255',
            'motivo' => 'required|string|max:100',
        ]);

        Ocorrencia::create([
            'lugar' => $validated['lugar'],
            'nivel' => $validated['nivel'],
            'motivo' => $validated['motivo'],
        ]);

        return redirect('/ver_ocorrencias')->with('success', 'Ocorrência registrada com sucesso!');
    }
}