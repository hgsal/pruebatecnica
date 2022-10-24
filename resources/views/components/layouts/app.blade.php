<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.head></x-partials.head>
    </head>
    <body class="antialiased">
        <x-layouts.navigation/>
        <!-- Page Heading -->
        @if(isset($navigation))
            {{-- <x-partials.nav></x-partials.nav> --}}
        @endif

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->

        <main>
            {{ $slot }}
        </main>
         
    </body>
    <footer>
        <x-partials.footer></x-partials.footer>
    </footer>
</html>