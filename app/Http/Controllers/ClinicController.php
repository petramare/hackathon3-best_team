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
        $input = $request->input('q');

        $resultAnimals = Animal::where('name', 'like', '%'.$input.'%')->get();

        $resultOwners = Owner::where('surname', 'like', $input.'%')->get();

        // $results = $resultAnimal->merge($resultOwner);

        // dd($results);

        return view('search', compact('resultAnimals', 'resultOwners'));
    }
}
