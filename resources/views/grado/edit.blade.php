<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Grado') }}
        </h2>
    </x-slot>

    @if ($errors->any())
	    <div class="bg-red-200 px-50 text-center">
            <ul>
            @foreach ($errors->all() as $error)
                <li>Error: {{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="py-12">
        <div  class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('grados.update', $grado) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="grd_nombre">Nombre del grado</label>
                        <br>
                        <x-input.small type="text" name='grd_nombre' value="{{ $grado->grd_nombre }}"/>
                        <br>

                        <div class="chekboxes">
                            <span>Materias:</span>
                            @foreach ($materias as $materia)
                              <div>
                                <input type="checkbox" name="materias[]" {{ ($grado->materias->contains($materia)) ? 'checked' : '' }} value="{{$materia->id}}">
                                <label>{{$materia->mat_nombre}}</label>
                              </div>
                            @endforeach
                        </div>
                        
                        <x-button.green type="submit">Guardar</x-button.green>
                        <x-link.red href="{{ route('grados.index') }}">Cancelar</x-link.red>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>