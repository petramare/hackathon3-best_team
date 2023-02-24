<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function showAnimal($id)
    {
        $animal = Animal::findOrFail($id);

        return view('animal.animal-profile', compact('animal'));
    }
}
