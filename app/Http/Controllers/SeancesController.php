<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seances;

class SeancesController extends Controller
{
    //
    public function all_seances()
    {
        $events=array();
        $seances = Seances::with(['moniteur', 'moniteur.user', 'condidiat' ,'condidiat.user'])->get();
        foreach($seances as $seance){
            $events[]=[
            'seance_id' => $seance->id , 
            'title' => $seance->title , 
            'start' => $seance->start_date , 
            'end_date' => $seance->end_date , 
            'moniteur_id'=>$seance->moniteur_id ,
            'moniteur_name'=>$seance->moniteur->user->nom,
            'candidat'=>$seance->condidat_id ,      
            'candidat_name'=>$seance->condidiat->user->nom

            ];
        }
        return response()->json([
            'seances' => $events
        ], 200);
    }
    public function seancesBymon($moniteurId)
    {
        $events=array();
        $seances = Seances::where('moniteur_id', $moniteurId)
        ->with(['moniteur', 'moniteur.user'])
        ->orderBy('id', 'DESC')
        ->get();

        foreach($seances as $seance){
            $events[]=[
                'seance_id' => $seance->id , 
                'title' => $seance->title , 
                'start' => $seance->start_date , 
                'end_date' => $seance->end_date , 
                'moniteur_id'=>$seance->moniteur_id ,
                'moniteur_name'=>$seance->moniteur->user->nom,
                'candidat'=>$seance->condidat_id ,      
                'candidat_name'=>$seance->condidiat->user->nom
                
            ];
        }
        return response()->json([
            'seances' => $events
        ], 200);
    }
    public function create_seance(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'moniteur_id' => '',
            'condidat_id' => '',
        ]);

        $seance = Seances::create($request->all());

        return response()->json([
            'seance' => $seance,
            'message' => 'Exam created successfully.',
        ], 201);
    }

    public function delete_seance( $id)
    {
         $seance = Seances::find($id);

        if (!$seance) {
            return response()->json(['message' => 'seance not found.'], 404);
        }

        $seance->delete();

        return response()->json(['message' => 'seance deleted successfully.'], 200);
    }



    }








