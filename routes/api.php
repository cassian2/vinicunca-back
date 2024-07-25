<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;

Route::get('/students',[clienteController::class,'index'] );
Route::get('students/{id}', function () {
    return 'students by id';
});
Route::post('/students', function () {
    return'Creando studiantes';
});
Route::put('/students/{id}', function () {
    return'Actulizando studiantes';
});
Route::delete('/students/{id}', function () {
    return'Eliminando estudiantes';
});
