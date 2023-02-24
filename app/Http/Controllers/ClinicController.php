<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use App\Models\Animal;

class ClinicController extends Controller
{
    public function list()
    {
        $owners = Owner::query()
            ->orderBy('first_name')
            ->limit(20)
            ->get();

        return view('homepage', compact('owners'));
    }
    
    public function search(Request $request) 
    {
        $query = $request->input('q');

        $resultAnimal = Animal::where('name', 'like', '%'.$query.'%')->get();

        $resultOwner = Owner::where('surname', 'like', '%'.$query.'%')->get();

        $results = $resultAnimal->merge($resultOwner);

        return view('search', compact('results'));
    }
}
