<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacancyCRUDController;
use App\Models\Vacancy;

Route::get('vacancies', [VacancyCRUDController::class, 'index']);
Route::get('add-vacancy', [VacancyCRUDController::class, 'create']);
Route::post('save-vacancy', [VacancyCRUDController::class, 'store']);
Route::get('edit/{id}', [VacancyCRUDController::class, 'edit']);
Route::post('update', [VacancyCRUDController::class, 'update']);
Route::get('delete/{id}', [VacancyCRUDController::class, 'destroy']);
