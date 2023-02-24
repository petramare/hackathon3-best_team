<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

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
}
