<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\PetType;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $pets = $user->pets;
        return view('pets.index', compact('pets'));
    }

    public function show(Pet $pet){
        return view('pets.show', compact('pet'));
    }

    public function create(){
        $user = auth()->user();
        $cities = City::all();
        $petTypes = PetType::all();

        return view('pets.create', compact('user', 'petTypes', 'cities'));
    }

    public function edit(Pet $pet)
    {
        $user = auth()->user();
        $cities = City::all();
        $petTypes = PetType::all();
        return view('pets.edit', compact('pet', 'user', 'petTypes', 'cities'));
    }
    
    public function update(Request $request, Pet $pet){
        if ($request->file('file') == null) {
            $fileIsNotNull = false;
        } else {$fileIsNotNull = true;};
        $request->validate([
            'file'=>'file|nullable',
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'features' => 'required',
            'city' => 'required',
            'pet_type_id' => "required",
            'user_id' => "required",
        ]);
        
        $pet->update($request->except('file'));
        if ($fileIsNotNull) {
            $url = $request->file('file')->store('pet', 'public');
            if ($pet->image) {
                $image = $pet->image()->update([
                    'url' => $url
                ]);
            } else {
                $image = $pet->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('pets.index', $pet)->with('info', 'Registro de mascota actualizado correctamente');
    }

    public function store(Request $request){

        $request->validate([
            'file'=>'file|required',
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'features' => 'required',
            'city' => 'required',
            'pet_type_id' => 'required',
            'user_id' => 'required'
        ]);
        $url = $request->file('file')->store('pet', 'public');
        $pet = Pet::create($request->except('file'));
        $pet->image()->create([
            'url' => $url
        ]);


        return redirect()->route('pets.index', $pet)->with('info', 'Mascota agregada con exito');
    }

    public function destroy(Pet $pet){
        $pet->image()->delete();
        $pet->delete();
        return redirect()->route('pets.index')->with('info', 'La mascota se elimino del registro');
    }
}
