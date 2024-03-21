<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class VehiculeController extends Controller
{
    public function all_vehicules()
    {
        $vehicules = Vehicule::with(['moniteur', 'moniteur.user'])->orderBy('id', 'DESC')->get();

        return response()->json([
            'vehicules' => $vehicules
        ], 200);
    }
    public function find_vehicule($id)
{
    $vehicule = Vehicule::with('moniteur.user')->find($id);

    if (!$vehicule) {
        return response()->json(['message' => 'Vehicule not found.'], 404);
    }

    return response()->json([
        'vehicule' => $vehicule
    ], 200);
}

    public function create_vehicule(Request $request)
    {
        $request->validate([
            'matricule' => 'required|unique:vehicules',
            'nom' => 'required',
            'moniteur_id' => '',
            'disponible' => 'boolean',
            'type' => 'required|in:track,car,motor',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
    
            $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            
            $vehicule = Vehicule::create(array_merge(
                $request->except('image'),
                ['image' => $uploadedFileUrl]
            ));
        return response()->json([
            'vehicule' => $vehicule,
            'message' => 'Vehicule created successfully.',
        ], 201);
    }

    public function update_vehicule(Request $request, $id)
    {
        $request->validate([
            'matricule' => 'required|unique:vehicules,matricule,' . $id,
            'nom' => 'required',
            'image' => 'required',
            'moniteur_id' => 'required',
            'disponible' => 'required|boolean',
        ]);

        $vehicule = Vehicule::find($id);

        if (!$vehicule) {
            return response()->json(['message' => 'Vehicule not found.'], 404);
        }

        $vehicule->update($request->all());

        return response()->json([
            'vehicule' => $vehicule,
            'message' => 'Vehicule updated successfully.',
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
    public function delete_vehicule($id)
    {
        $vehicule = Vehicule::find($id);

        if (!$vehicule) {
            return response()->json(['message' => 'Vehicule not found.'], 404);
        }

        $vehicule->delete();

        return response()->json(['message' => 'Vehicule deleted successfully.'], 200);
    }
}
