<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Owner;

class ClinicController extends Controller
{
    public function search(Request $request) 
    {
        $query = $request->input('q');

        $resultAnimal = Animal::where('name', 'like', '%'.$query.'%')->get();

        $resultOwner = Owner::where('surname', 'like', '%'.$query.'%')->get();

        $results = $resultAnimal->merge($resultOwner);

        return view('search', compact('results'));
    }
}
