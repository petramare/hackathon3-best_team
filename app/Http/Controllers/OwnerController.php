<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function showOwner($id)
    {
        $owner = Owner::findOrFail($id);

        return view('owner.owner-profile', compact('owner'));
    }
}
