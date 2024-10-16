<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibController;

Route::get('/bib', [BibController::class, 'index']);

// Get a single BIB record by ID
Route::get('/bib/{bib_number}', [BibController::class, 'show']);

// Create a new BIB record
Route::post('/bib', [BibController::class, 'store']);

// Update a BIB record by ID
Route::put('/bib/{id}', [BibController::class, 'update']);

// Delete a BIB record by ID
Route::delete('/bib/{id}', [BibController::class, 'destroy']);