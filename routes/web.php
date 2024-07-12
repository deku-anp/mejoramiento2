<?php


namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Collaborator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//CLIENTE
Route::get('cliente/listar',[ClientController::class,'listar'])->name('client.listar');
Route::get('cliente/create',[ClientController::class,'create'])->name('client.create');
Route::post('cliente/store',[ClientController::class,'store'])->name('client.store');
Route::get('cliente/{client}',[ClientController::class,'show'])->name('client.show');
Route::put('cliente/{client}',[ClientController::class,'update'])->name('client.update');
Route::delete('cliente/{client}',[ClientController::class,'destroy'])->name('client.destroy');
Route::get('cliente/{client}/editar',[ClientController::class,'edit'])->name('client.edit');


//COLABORADOR
Route::get('colaborador/listar',[CollaboratorController::class,'listar'])->name('collaborator.listar');
Route::get('colaborador/create',[CollaboratorController::class,'create'])->name('collaborator.create');
Route::post('colaborador/store',[CollaboratorController::class,'store'])->name('collaborator.store');
Route::get('colaborador/{collaborator}',[CollaboratorController::class,'show'])->name('collaborator.show');
Route::put('colaborador/{collaborator}',[CollaboratorController::class,'update'])->name('collaborator.update');
Route::delete('colaborador/{collaborator}',[CollaboratorController::class,'destroy'])->name('collaborator.destroy');
Route::get('colaborador/{collaborator}/editar',[CollaboratorController::class,'edit'])->name('collaborator.edit');




