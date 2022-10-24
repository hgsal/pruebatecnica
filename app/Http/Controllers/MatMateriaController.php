<?php

namespace App\Http\Controllers;

use App\Models\mat_materia;
use App\Http\Requests\Storemat_materiaRequest;
use App\Http\Requests\Updatemat_materiaRequest;
use App\Models\grd_grado;
use Illuminate\Auth\Events\Validated;

class MatMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = mat_materia::paginate(15);
        return view('materia.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storemat_materiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemat_materiaRequest $request)
    {
        mat_materia::create(['mat_nombre' => $request->input('mat_nombre')]);
        return redirect()->route('materias.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mat_materia  $mat_materia
     * @return \Illuminate\Http\Response
     */
    public function show(mat_materia $materia)
    {
        return view('materia.show', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mat_materia  $mat_materia
     * @return \Illuminate\Http\Response
     */
    public function edit(mat_materia $materia)
    {
        $grados = grd_grado::all();
        return view('materia.edit', compact('materia', 'grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemat_materiaRequest  $request
     * @param  \App\Models\mat_materia  $mat_materia
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemat_materiaRequest $request, mat_materia $materia)
    {
        $data = $request->all();
       
        if (isset($data['grados'])) {
            $materia->grados()->sync($data['grados']);
          }
          else {
            $materia->grados()->detach();
          }
        $materia->update($data);
        return redirect()->route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mat_materia  $mat_materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(mat_materia $materia)
    {
        $grados = $materia->grados->count();
        if($grados>0){
            return redirect()->route('materias.index')
            ->withErrors(array('message' => 'No se puede borrar si hay grados asociados'));
        }
        $materia->delete();
        return redirect()->route('materias.index');
    }
}
