<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExamRequest;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function all_exams()
    {
        $exams = Exam::with(['condidiat.user', 'moniteur.user', 'types'])->orderBy('date', 'DESC')->paginate(2);
    
        return response()->json([
            'exams' => $exams
        ], 200);
    }
    public function find_exam($id)
{
    $exam = Exam::with(['condidiat.user', 'moniteur.user', 'types'])->find($id);

    if (!$exam) {
        return response()->json(['message' => 'Exam not found.'], 404);
    }

    return response()->json([
        'exam' => $exam
    ], 200);
}


    public function create_exam(ExamRequest $request)
    {
        

        $exam = Exam::create($request->all());

        return response()->json([
            'exam' => $exam,
            'message' => 'Exam created successfully.',
        ], 201);
    }

    public function update_exam(Request $request, $id)
    {
        $request->validate([
            'reference' => 'required',
            'date' => 'required',
            'condidat_id' => 'required',
            'moniteur_id' => 'required',
            'type_id' => 'required',
        ]);

        $exam = Exam::find($id);

        if (!$exam) {
            return response()->json(['message' => 'Exam not found.'], 404);
        }

        $exam->update($request->all());

        return response()->json([
            'exam' => $exam,
            'message' => 'Exam updated successfully.',
        ], 200);
    }

    public function delete_exam($id)
    {
        $exam = Exam::find($id);

        if (!$exam) {
            return response()->json(['message' => 'Exam not found.'], 404);
        }

        $exam->delete();

        return response()->json(['message' => 'Exam deleted successfully.'], 200);
    }
    public function findVExamsByMoniteurId($moniteurId)
    {
        $exams = Exam::where('moniteur_id', $moniteurId)
            ->with(['condidiat.user', 'moniteur.user', 'types'])
            ->orderBy('id', 'DESC')
            ->get();

        return response()->json([

            'exams' => $exams
        ], 200);
    }
    
    public function findVExamscandidatId($candidatId)
    {
        $exams = Exam::where('condidat_id', $candidatId)
            ->with(['condidiat.user', 'moniteur.user', 'types'])
            ->orderBy('id', 'DESC')
            ->get();

        return response()->json([

            'exams' => $exams
        ], 200);
    }
    public function CountExamsCode($moniteurId)
    {
        $exams = Exam::where('moniteur_id', $moniteurId)
            ->with(['condidiat.user', 'moniteur.user', 'types'])
            ->whereHas('types', function ($query) {
                $query->where('type', 'code');
            })
            ->orderBy('id', 'DESC')
            ->get();
        $nombre = $exams->count();
        return response()->json([
            'nombre code' => $nombre
        ], 200);
    }
    
    public function CountExamsConduit($moniteurId)
    {
        $exams = Exam::where('moniteur_id', $moniteurId)
            ->with(['condidiat.user', 'moniteur.user', 'types'])
            ->whereHas('types', function ($query) {
                $query->where('type', 'conduit');
            })
            ->orderBy('id', 'DESC')
            ->get();
        $nombre = $exams->count();
        return response()->json([
            'nombre conduit' => $nombre
        ], 200);
    }
    
}
    
