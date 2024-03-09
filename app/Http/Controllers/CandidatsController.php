<?php

namespace App\Http\Controllers;

use App\Models\Candidats;
use Illuminate\Http\Request;

class CandidatsController extends Controller
{
    //
    
    public function all_candidats()
    {
        $candidats = Candidats::with('user')->orderBy('id', 'DESC')->get();
        return response()->json([
            'candidats' => $candidats
        ], 200);
    }
    public function find_condidat($id)
{
    $condidat = Candidats::with('user')->find($id);

    if (!$condidat) {
        return response()->json(['message' => 'Condidat not found.'], 404);
    }

    return response()->json([
        'condidat' => $condidat
    ], 200);
}
}
