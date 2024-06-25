<?php

namespace App\Http\Controllers;

use App\Models\Sandwich;
use Illuminate\Http\Request;

class SandwichController extends Controller
{
    public function index()
    {
        // Fetch all sandwiches from the database
        $sandwiches = Sandwich::all();

        // Pass the sandwiches to the view
        return view('home', compact('sandwiches'));
    }

    public function show($id)
    {
        $sandwich = Sandwich::findOrFail($id); // Fetch the sandwich by id

        return view('gerecht', compact('sandwich'));
    }
}
