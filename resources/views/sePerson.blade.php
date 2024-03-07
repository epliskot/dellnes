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
                    <small>Id: {{ $people->id }}</small>
                    <br />{{ $people->etternavn }}, {{ $people->fornavn }} ({{ $people->dato_fodt }} - {{ $people->dato_dod }})
                    <br /><small>Far: {{ $people->parent1 }} Mor: {{ $people->parent2 }}</small>
                    <br /><small>Født: {{ $people->fodested }} </small>
                    @if (!is_null($people->sted_dod))
                      <small> | Gikk bort: {{ $people->sted_dod }}</small>
                    
                    @endif    
                    
                    @if (!is_null($people->barn))
                    <br /><small>Barn: {{ $people->barn }}</small>
                    @endif                   
                    <br />
                    <br />
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    

</x-app-layout>



                    
                    