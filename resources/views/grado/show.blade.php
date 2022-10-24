<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver datos de Grado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
 

                        <x-link.default href="{{ route('grados.index') }}">Regresar</x-link.default>
                        <br>
                        <label for="title">Nombre:</label>
                        <p class="bg-red-200">{{ $grado->grd_nombre }}</p>
                        <br>
                        <div class="columns-2 text-center gap-8">

                            @if ($grado->materias->count()>0)
                                <div class="bg-gray-400 rounded shadow-md p-2">
                                    <h4 class="bg-white">Materias:</h4>
                                    <ul>
                                        @foreach ($grado->materias as $materia )
                                            <li>{{ $materia->mat_nombre }}</li>
                                        @endforeach
                                    </ul>   
                                </div>
                            @else
                                <div class="bg-gray-400 rounded shadow-md p-2">
                                    <h4 >No hay materias asignadas a este grado</h4>
                                </div>
                            @endif
                            
                            @if($grado->alumnos->count()>0)
                                <div class="rounded shadow-md p-2">
                                    <h4 class="bg-gray-400">Alumnos:</h4>
                                    <ul>
                                        @foreach ($grado->alumnos as $alumno )
                                            <li>{{ $alumno->alm_nombre }}</li>                                    
                                        @endforeach
                                    </ul>
                                </div>
                            @else
                                <div class="rounded shadow-md p-2">
                                    <h4>No hay alumnos inscritos en este grado</h4>
                                </div>
                            @endif

                        </div>
                        <x-link.default href="{{ route('grados.index') }}">Regresar</x-link.default>
            

                </div>
            </div>
        </div>
    </div>
</x-layouts.app>