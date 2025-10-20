<?php

use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\TaskController;

// Projetos
Route::get('/projects', [ProjectController::class, 'index']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/projects/{id}/tasks', [ProjectController::class, 'tasks']);
Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

// Tarefas
Route::post('/tasks', [TaskController::class, 'store']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
