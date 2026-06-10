<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegOcorrencia;
use App\Models\Ocorrencia;

Route::get('/', function () {
    return view('pages.welcome');
});
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/mapa', function () {
    return view('pages.mapa');
});
Route::get('/ocorrencias', function () {
    return view('pages.ocorrencia');
});
Route::get('/ver_ocorrencias', function () {
    $ocorrencias = Ocorrencia::all();
    return view('pages.verocorrencias', compact('ocorrencias'));
});
Route::post('/registrar_oc', RegOcorrencia::class);