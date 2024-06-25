<?php

namespace App\Http\Controllers;

use App\Models\Sandwich;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function show($id)
    {
        $sandwich = Sandwich::findOrFail($id); // Fetch the sandwich by id

        return view('review', compact('sandwich'));
    }
}
