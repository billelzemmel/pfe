<?php

namespace App\Http\Controllers;
use App\Models\Vehicule;

use App\Models\Moniteur;
use Illuminate\Http\Request;

class MoniteurController extends Controller
{
    //
   public function all_moniteurs()
{
    $moniteurs = Moniteur::with('user')->orderBy('id', 'DESC')->get();

    $moniteursWithVehicles = [];

    foreach ($moniteurs as $moniteur) {
        $vehicles = $this->findVehiclesByMoniteurId($moniteur->id)->original['vehicles'];
        
        $moniteurWithVehicles = $moniteur->toArray();
        $moniteurWithVehicles['vehicles'] = $vehicles;

        $moniteursWithVehicles[] = $moniteurWithVehicles;
    }

    return response()->json([
        'moniteurs' => $moniteursWithVehicles
    ], 200);
}

public function findVehiclesByMoniteurId($moniteurId)
{
    $vehicles = Vehicule::where('moniteur_id', $moniteurId)
        ->with(['moniteur', 'moniteur.user'])
        ->orderBy('id', 'DESC')
        ->get();

    return response()->json([

        'vehicles' => $vehicles
    ], 200);
}


    public function find_moniteur($id)
{
    $moniteur = Moniteur::with('user')->find($id);

    if (!$moniteur) {
        return response()->json(['message' => 'Moniteur not found.'], 404);
    }

    return response()->json([
        'moniteur' => $moniteur
    ], 200);
}
}
