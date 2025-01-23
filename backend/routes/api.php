<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{student}', [StudentController::class, 'show'])->whereNumber('student');

Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/subjects/{subject}', [SubjectController::class, 'show'])->whereNumber('subject');

Route::get('/grades', [GradeController::class, 'index']);
Route::get('/grades/{grade}', [GradeController::class, 'show'])->whereNumber('grade');
Route::post('/grades', [GradeController::class, 'store']);
Route::put('/grades/{grade}', [GradeController::class, 'update']);
Route::delete('/grades/{grade}', [GradeController::class, 'delete']);