<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PetType;
use Illuminate\Http\Request;

class PetTypeController extends Controller
{
    public function index()
    {
        $pet_types = PetType::all();

        return view('admin.pettypes.index', compact('pet_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pettypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:pet_types',
            'description' => 'required',
        ]);

        $pet_type = PetType::create($request->all());

        return redirect()->route('admin.pettypes.edit', $pet_type)->with('info', 'La Raza se Agrego con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PetType $pet_type)
    {
        return view('admin.pettypes.show', compact('pet_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PetType $pettype)
    {

        return view('admin.pettypes.edit', compact('pettype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PetType $pettype)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:pet_types,slug,$pettype->id",
            'description' => 'required',
        ]);

        $pettype->update($request->all());

        return redirect()->route('admin.pettypes.index', $pettype)->with('info', 'El registro de la especie se actualizo con exito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetType $pettype)
    {
        $pettype->delete();
        return redirect()->route('admin.pettypes.index')->with('info', 'La Especie se eliminó del registro exitosamente');
    }
}
