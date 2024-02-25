<link rel="stylesheet" type="text/css" href="{{ asset('css/tables.css') }}" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Slektstre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Sigurd og Erna") }}
                    
                   <table>
                    <th>Ulf</th><th></th>
                    <tr><td>Bilder:</td><td>Link</td></tr>
</table>
                    <!-- <img src="{{ asset('test/images.jpeg') }}" /> -->
                    
                    
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <!--  {{ __("Ulf og Jane") }} -->
                    
                   
                    <table class="fixed">
                        
                        <tr>
      <td>Jane</td>
      <td>Ulf</td>
      
    </tr>
    <tr>
      <td>Mariann</td>
      <td>Jon</td>
    </tr>
  </table>
                        
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Mariann og Andreas") }}
                    
                   <table class="fixed">
                    <tr><td>Ane</td></tr>
                    <tr><td>Bilder</td></tr>
</table>
                    <!-- <img src="{{ asset('test/images.jpeg') }}" /> -->
                    
                    
                </div>
            </div>
        </div>
    </div>
    @foreach($persons as $person)
   {{ $person->id }} {{ $person->name }}
@endforeach
</x-app-layout>