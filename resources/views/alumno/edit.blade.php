<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar datos de Alumno') }}
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

                    <form action="{{ route('alumnos.update', $alumno)}}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="alm_codigo">Codigo:</label>
                        <x-input.small type="text" name='alm_codigo' value="{{ $alumno->alm_codigo }}"/>
                        <br>
                        <label for="alm_nombre">Nombre:</label>
                        <x-input.small type="text" name='alm_nombre' value="{{ $alumno->alm_nombre }}"/>
                        <br>
                        <label for="alm_edad">Edad:</label>
                        <x-input.small type="number" name='alm_edad' value="{{ $alumno->alm_edad }}"/>
                        <br>
                        <label for="alm_sexo">Sexo:</label>
                        <x-input.select name="alm_sexo" id="alm_sexo">
                            <option value="Femenino" @if('Femenino' == $alumno->alm_sexo) selected @endif>
                                Femenino
                            </option>
                            <option value="Masculino" @if('Masculino' == $alumno->alm_sexo) selected @endif>
                                Masculino
                            </option>
                        </x-input.select>
                        <br>
                        <label for="alm_grado_id">Grado:</label>
                        <x-input.select name="alm_grado_id" id="alm_grado_id">
                            <option value="">Seleccione el grado</option>
                            @foreach($grados as $grado)
                                <option value="{{ $grado->id }}" @if($alumno->grd_grado_id == $grado->id) selected @endif>
                                    {{ $grado->grd_nombre }}
                                </option>
                            @endforeach
                        </x-input.select>
                        <br>
                        <label for="alm_observacion">Observaciones:</label>
                        <br>
                        <x-input.small type="text" name="alm_observacion" value="{{ $alumno->alm_observacion }}"/>
                        <br>

                        <x-button.green type="submit">Guardar</x-button.green>
                        <x-link.red href="{{ route('alumnos.index') }}">Cancelar</x-link.red>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>