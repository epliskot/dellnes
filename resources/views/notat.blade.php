


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lag notat') }}
          
        </h2>
    </x-slot>



@if(Session::has('success'))
        {{Session::get('success')}}
        @endif
       
    <form method="post" action="{{ route('validate.notats') }}" novalidate>
        @csrf

        <!-- Name -->
       
            
            
            @error('notat')
            {{ $message }}
            @enderror
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="person" :value="__('Navn på person det gjelder')" />
            <x-text-input id="person" class="block mt-1 w-full" type="person" name="person" :value="old('person')" />
            <x-input-error :messages="$errors->get('person')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="tag" :value="__('Skriv gjerne noen emneord (bryllup, ferie, selskap, fritid, jobb o.l.)')" />
            <x-text-input id="tag" class="block mt-1 w-full" type="tag" name="tag" :value="old('tag')" />
            <x-input-error :messages="$errors->get('tag')" class="mt-2" />
        </div>
        <!-- <div class="mt-4">
            <x-input-label for="created_by" :value="__('Createdby')" />
            <x-text-input id="created_by" class="block mt-1 w-full" type="created_by" name="created_by" :value="old('created_by')" />
            <x-input-error :messages="$errors->get('created_by')" class="mt-2" />
        </div> -->
        <div class="mt-4">
            <x-input-label for="notat" :value="__('Her kan du skrive inn notater/ minner o.l.')" />
            <textarea id="notat" name="notat" rows="4" cols="50">
            
            </textarea>
            <!-- <x-text-input id="notat" class="block mt-1 w-full" type="notat" name="notat" :value="old('notat')" /> -->
            <x-input-error :messages="$errors->get('notat')" class="mt-2" />
        </div>
        <div class="mt-4">
          
            <x-text-input type="hidden" name="created_by" value="{{ __(Auth::user()->name) }}" />

        </div>
       
        
        <input type="submit" name="send" value="[SEND INN]">
    </form>

</x-app-layout>

