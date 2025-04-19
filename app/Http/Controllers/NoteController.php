<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store(Request $request)
    {
        // Logic to create a new note
        return response()->json(['message' => 'Note created successfully']);
    }
}
