<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\PetType;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::all();

        return view('admin.pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pet $pet)
    {
        $pet_types = PetType::all();
        $user = User::pluck('name','id');

        return view('admin.pets.create', [
            'pet_types'=>$pet_types,
            'user'=>$user,
            'pet'=>$pet
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'file'=>'file',
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'features' => 'required',
            'city' => 'required',
            'pet_type_id' => 'required',
            'user_id' => 'required'
        ]);
        $url = $request->file('file')->store('public/pet');
        $pet = Pet::create($request->except('file'));
        $pet->image()->create([
            'url' => $url,
            'imageable_id' => $pet->id,
            'imageable_type' => 'App\Models\Pet'
        ]);


        return redirect()->route('admin.pets.index', $pet)->with('info', 'Mascota agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        return view('admin.pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {

        $pet_type = PetType::pluck('name','id');
        $user = User::pluck('name','id');

        return view('admin.pets.index',[

            'pet_type'=>$pet_type,
            'user'=>$user,
        ], compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'name' => "required:pets,name,$pet->id",
            'breed' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'features' => 'required',
            'city' => 'required',
            'pet_type_id' => "required:pets,pet_type_id,$pet->id",
            'user_id' => "required:pets,user_id,$pet->id",
        ]);

        $pet->update($request->all());

        return redirect()->route('admin.pets.index', $pet)->with('info', 'El Punto se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet->images()->delete();
        $pet->delete();
        return redirect()->route('admin.pets.index', $pet)->with('info', 'La mascota se elimino del registro');
    }

    public function pet_type(PetType $pet_type){
        $pet = Pet::where('pet_type_id', $pet_type ->id);
    }

    public function user(User $user){
        $pet = Pet::where('user_id', $user ->id);
    }
}
