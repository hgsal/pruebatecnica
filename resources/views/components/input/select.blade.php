<select {{ $attributes->class(["block p-2 w-full 
text-gray-900 bg-white-50  border-0  
border-b-2 border-white-300 sm:text-xs 
focus: 
focus:boder-0 border-b-2 border-blue-500 
dark:bg-white-700 
dark:border-white-600 
dark:placeholder-white-400 
dark:text-black 
dark:focus:border-0 border-b-2 
dark:focus:border-0 border-b-2 border-blue-500"])
->merge([ 'id'=>"small-input", 'name' => '']) }} >

    {{ $slot }}
</select>