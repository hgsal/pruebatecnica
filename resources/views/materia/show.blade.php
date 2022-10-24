<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver datos de Materia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
 

                        <x-link.default href="{{ route('materias.index') }}">Regresar</x-link.default>
                        <br>
                        <label for="title">Nombre:</label>
                        <p class="bg-red-200">{{ $materia->mat_nombre }}</p>
                        <br>
                        
                        <div class="columns-1 text-center gap-8">
                            @if($materia->grados->count()>0)
                                <div class="bg-gray-400 rounded shadow-md p-2">
                                    <h4 class="bg-white">Grados en los que se imparte:</h4>
                                    <ul>
                                        @foreach ($materia->grados as $grado )
                                            <li>{{ $grado->grd_nombre }}</li>
                                        @endforeach
                                    </ul>   
                                </div>
                            @else
                                <div class="bg-gray-400 rounded shadow-md p-2">
                                    <h4>Esta materia no se esta impartiendo en ningun grado.</h4>
                                </div>    
                            @endif

                            

                        </div>
                        <x-link.default href="{{ route('materias.index') }}">Regresar</x-link.default>
            

                </div>
            </div>
        </div>
    </div>
</x-layouts.app>