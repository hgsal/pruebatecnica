<?php

namespace App\Http\Controllers;

use App\Models\grd_grado;
use App\Models\alm_alumno;
use Illuminate\Http\Request;
use App\Http\Requests\Storealm_alumnoRequest;
use App\Http\Requests\Updatealm_alumnoRequest;


class AlmAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = alm_alumno::paginate(15);
        return view('alumno.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grados = grd_grado::all();
        return view('alumno.create',compact('grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storealm_alumnoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storealm_alumnoRequest $request)
    {
   
        $data = $request->all();
        alm_alumno::create($data);
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alm_alumno  $alm_alumno
     * @return \Illuminate\Http\Response
     */
    public function show(alm_alumno $alm_alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alm_alumno  $alm_alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(alm_alumno $alumno)
    {
        $grados = grd_grado::all();
        return view('alumno.edit', compact('alumno', 'grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatealm_alumnoRequest  $request
     * @param  \App\Models\alm_alumno  $alm_alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Updatealm_alumnoRequest $request, alm_alumno $alm_alumno)
    {
        $data = $request->all();
        alm_alumno::create($data);
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alm_alumno  $alm_alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(alm_alumno $alumno)
    {
        
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
