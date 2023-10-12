<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();

        return view('pets.index', compact('pets'));
    }

    public function show(Pet $pet){
        return view('pets.show', compact('pet'));

    }
}
