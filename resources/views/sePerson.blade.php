<link rel="stylesheet" type="text/css" href="{{ asset('css/bilder.css') }}" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Se personer') }}
        
        </h2>
    </x-slot>

 
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                 

                    <br />
                    @foreach($peoples as $people)
                    <br />{{ $people->etternavn }} 
                    <br /><small>Id: {{ $people->id }} opprettet: {{ $people->created_at }} av {{ $people->created_at }}</small>
                    
                
                    <br />
                    <br />
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    

</x-app-layout>



                    
                    