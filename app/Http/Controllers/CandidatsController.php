<?php

namespace App\Http\Controllers;

use App\Models\Candidats;
use Illuminate\Http\Request;

class CandidatsController extends Controller
{
    //
    
    public function all_candidats()
    {
        $candidats = Candidats::with(['user', 'moniteur.user'])->orderBy('id', 'DESC')->get();
        
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
public function affectMoniteur(Request $request, $id)
{
    $request->validate([
        'moniteur_id' => 'required|exists:moniteurs,id',
    ]);

    $candidat = Candidats::find($id);

    if (!$candidat) {
        return response()->json(['message' => 'Candidate not found.'], 404);
    }

    $candidat->moniteur_id = $request->input('moniteur_id');
    $candidat->save();

    return response()->json(['message' => 'Moniteur assigned successfully.'], 200);
}
public function findCandidatByMoniteurId($moniteur_id)
    {
        $candidats = Candidats::where('moniteur_id', $moniteur_id)
                        ->with(['user', 'moniteur.user'])
                        ->orderBy('id', 'DESC')
                        ->get();
        
        return response()->json([
            'candidats' => $candidats
        ], 200);
    }


    public function CountMoniteurId($moniteur_id)
    {
        $candidats = Candidats::where('moniteur_id', $moniteur_id)
                        ->with(['user', 'moniteur.user'])
                        ->orderBy('id', 'DESC')
                        ->get();
                        $nombre = $candidats->count();

        return response()->json([
            'nombre Condidats' => $nombre
        ], 200);
    }
}
