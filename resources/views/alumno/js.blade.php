<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alumnos') }}
        </h2>
    </x-slot>

    @if ($errors->any())
	    <div class="bg-red-200 px-50 text-center">
            <ul>
            @foreach ($errors->all() as $error)
                <li>Errore: {{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="py-12">
        <div  class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="grid grid-cols-1 shadow-lg max-w-[60%] place-items-center border-solid border-2 rounded-md text-center p-5">
                        <div class="place-self-center">
                            <table>
                                <thead>
                                    <th>Nombre</th>
                                    <th>Grado</th>
                                    <th>Materias</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $alumno->alm_nombre }}</td>
                                        <td>{{ $alumno->grd_grados->grd_nombre }}</td>
                                        
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>




