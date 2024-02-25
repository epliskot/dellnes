<link rel="stylesheet" type="text/css" href="{{ asset('css/bilder.css') }}" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Se i notater') }}
        
        </h2>
    </x-slot>

 
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                 

                    <br />
                    @foreach($notatss as $notats)
                    <strong>{{ $notats->person }} </strong><br />{{ $notats->notat }} 
                    <br /><small>Opprettet: {{ $notats->created_at }} av {{ $notats->created_by }}</small>
                
                    <br />
                    <br />
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    

</x-app-layout>



                    
                    