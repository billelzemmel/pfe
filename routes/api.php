<?php

use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\AutoecoleController;
use App\Http\Controllers\CandidatsController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\MoniteurController;
use App\Http\Controllers\TypesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SadminController;
use App\Http\Controllers\SeancesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/autoecoles', [AutoecoleController::class,'all_auto_ecoles']);
Route::get('/autoecoles/{id}', [AutoecoleController::class, 'find_ecole']);
Route::get('/seances', [SeancesController::class,'all_seances']);
Route::post('/seances', [SeancesController::class,'create_seance']);
Route::delete('/seances/{id}', [SeancesController::class,'delete_seance']);
Route::get('/administrateurs', [AdministrateurController::class,'all_administrateurs']);
Route::get('/administrateurs/{autoecoleId}', [AdministrateurController::class, 'adminsByAutoEcole']);
Route::get('/administrateurs/{id}', [AdministrateurController::class, 'find_admin']);

Route::post('/administrateurs/login', [AdministrateurController::class, 'login']);
Route::post('/sadmin/signup', [SadminController::class, 'signup']);
Route::post('/sadmin/login', [SadminController::class, 'login']);
Route::post('/autoecoles', [AutoecoleController::class, 'create_auto_ecole']);
Route::put('/autoecoles/{id}', [AutoecoleController::class, 'update_auto_ecole']);
Route::delete('/autoecoles/{id}', [AutoecoleController::class, 'delete_auto_ecole']);
Route::post('/administrateurs', [AdministrateurController::class, 'create_administrateur']);
Route::put('/administrateurs/{id}', [AdministrateurController::class, 'update_administrateur']);
Route::delete('/administrateurs/{id}', [AdministrateurController::class, 'delete_administrateur']);
Route::post('/users/login', [UserController::class, 'login']);
Route::get('/users', [UserController::class, 'all_users']);
Route::post('/users', [UserController::class, 'create_user']);
Route::put('/users/{id}', [UserController::class, 'update_user']);
Route::delete('/users/{id}', [UserController::class, 'delete_user']);
Route::get('/users/{id}', [UserController::class, 'get_user']);

Route::get('/moniteurs', [MoniteurController::class, 'all_moniteurs']);
Route::get('/moniteurs/{id}', [MoniteurController::class, 'find_moniteur']);
Route::get('/candidatsByMon/{id}', [CandidatsController::class, 'findCandidatByMoniteurId']);
Route::get('/candidats', [CandidatsController::class, 'all_candidats']);
Route::get('/condidats/{id}', [CandidatsController::class, 'find_condidat']);
Route::put('/affectMoniteur/{id}', [CandidatsController::class, 'affectMoniteur']);
Route::post('/types', [TypesController::class, 'create_type']);
Route::get('/exams', [ExamController::class, 'all_exams']);
Route::get('/exams/{id}', [ExamController::class, 'find_exam']);
Route::post('/exams', [ExamController::class, 'create_exam']);
Route::put('/exams/{id}', [ExamController::class, 'update_exam']);
Route::delete('/exams/{id}', [ExamController::class, 'delete_exam']);
Route::get('/vehicules', [VehiculeController::class, 'all_vehicules']);
Route::get('/vehicules/{id}', [VehiculeController::class, 'find_vehicule']);
Route::post('/vehicules', [VehiculeController::class, 'create_vehicule']);
Route::put('/vehicules/{id}', [VehiculeController::class, 'update_vehicule']);
Route::delete('/vehicules/{id}', [VehiculeController::class, 'delete_vehicule']);
Route::get('/types', [TypesController::class, 'all_types']);
Route::get('/examsbyMon/{id}', [ExamController::class, 'findVExamsByMoniteurId']);
Route::get('/examsbyCon/{id}', [ExamController::class, 'findVExamscandidatId']);

Route::get('/seancesBymon/{id}', [SeancesController::class, 'seancesBymon']);
Route::get('/seancesBycon/{id}', [SeancesController::class, 'seancesBycon']);

Route::get('/vehiculesbymoni/{id}', [VehiculeController::class, 'findVehiclesByMoniteurId']);
