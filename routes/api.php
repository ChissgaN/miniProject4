<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('/teacher', TeacherController::class);
Route::post('/teacher', [TeacherController::class, 'store']);
Route::get('/teacher/{id}', [TeacherController::class,'show']);
Route::put('/teacher/{id}', [TeacherController::class, 'update']);
Route::delete('/teacher/{id}', [TeacherController::class, 'destroy']);

Route::apiResource('/student', StudentController::class);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student/{id}', [StudentController::class,'show']);
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::delete('/student/{id}', [StudentController::class, 'destroy']);

Route::apiResource('/subject', SubjectController::class);
Route::post('/subject', [SubjectController::class, 'store']);
Route::get('/subject/{id}', [SubjectController::class,'show']);
Route::put('/subject/{id}', [SubjectController::class, 'update']);
Route::delete('/subject/{id}', [SubjectController::class, 'destroy']);


Route::apiResource('/enroll', EnrollController::class);
Route::get('/enroll/{id}', [EnrollController::class, 'show']);
Route::post('/enroll', [EnrollController::class, 'store']);
Route::put('/enroll/{id}', [EnrollController::class, 'update']);

Route::delete('/enroll/{id}', [EnrollController::class, 'destroy']);



Route::apiResource('/attendance', AttendanceController::class);
Route::get('/attendance/{id}', [AttendanceController::class, 'show']);
Route::post('/attendance', [AttendanceController::class, 'store']);
Route::put('/attendance/{id}', [AttendanceController::class, 'update']);
Route::delete('/attendance/{id}', [AttendanceController::class, 'destroy']);