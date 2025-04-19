<?php

use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("notes", [NoteController::class, "store"])->name("notes.store");
