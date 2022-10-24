<button  {{ $attributes->class(["font-medium text-red-600 dark:text-red-500 hover:underline px-2"])->merge(['type'=>"button"]) }}>
    {{ $slot }}
</button>