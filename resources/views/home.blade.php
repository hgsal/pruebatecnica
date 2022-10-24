<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pagina de inicio') }}
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
                  
                    <div class="grid grid-cols-1 shadow-lg max-w-[100%] place-items-center border-solid border-2 rounded-md text-center p-5">
                        <div class="place-self-center">
                            <h1>Sistema para prueba tecnica - 2022</h1>
                            <br>
                            <div class="grid grid-cols-5 w-full shadow-lg border-solid border-2 bg-red-200 gap-5 ">
                                <div>
                                    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">
                                        {{ __('Inicio') }}
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route('materias.index') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">
                                        {{ __( 'Materias') }}
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route('grados.index') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">
                                        {{ __('Grados') }}
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route('alumnos.index') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">
                                        {{ __('Alumnos') }}
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">
                                        {{ __('JS') }}
                                    </a>
                                </div>
                            </div>
                            
                           
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-layouts.app>