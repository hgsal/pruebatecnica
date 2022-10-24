<?php

namespace App\Http\Controllers;

use App\Models\grd_grado;
use App\Http\Requests\Storegrd_gradoRequest;
use App\Http\Requests\Updategrd_gradoRequest;
use App\Models\mat_materia;

class GrdGradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grd_grados = grd_grado::paginate(15);
        return view('grado.index', compact('grd_grados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('grado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storegrd_gradoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storegrd_gradoRequest $request)
    {

        grd_grado::create(['grd_nombre' => $request->input('grd_nombre')]);
        return redirect()->route('grados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\grd_grado  $grd_grado
     * @return \Illuminate\Http\Response
     */
    public function show(grd_grado $grado)
    {
        return view('grado.show', compact('grado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\grd_grado  $grd_grado
     * @return \Illuminate\Http\Response
     */
    public function edit(grd_grado $grado)
    {
        $materias = mat_materia::all();
        return view('grado.edit', compact('grado','materias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updategrd_gradoRequest  $request
     * @param  \App\Models\grd_grado  $grd_grado
     * @return \Illuminate\Http\Response
     */
    public function update(Updategrd_gradoRequest $request, grd_grado $grado)
    {
        $data = $request->all();
       
        if (isset($data['materias'])) {
            $grado->materias()->sync($data['materias']);
          }
          else {
            $grado->materias()->detach();
          }
        $grado->update($data);
        return redirect()->route('grados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grd_grado  $grd_grado
     * @return \Illuminate\Http\Response
     */
    public function destroy(grd_grado $grado)
    {
        $materias = $grado->materias()->count();
        $alumnos = $grado->alumnos()->count();
        if($materias>0){
            return redirect()->route('grados.index')
            ->withErrors(array('message' => 'No se puede borrar si tiene materias asociadas'));
        }
        if($alumnos>0){
            return redirect()->route('grados.index')
            ->withErrors(array('message' => 'No se puede borrar si tiene alumnos inscritos'));
        }
        $grado->delete();
        return redirect()->route('grados.index');
    }
}
