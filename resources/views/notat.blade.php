


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lag notat') }}
          
        </h2>
    </x-slot>


<br />
<br />
@if(Session::has('success'))
        {{Session::get('success')}}
        @endif
 <br />
 <br />      
    <form method="post" action="{{ route('validate.notats') }}" novalidate>
        @csrf

        <!-- Name -->
       
            
            
            @error('notat')
            {{ $message }}
            @enderror
        <!-- Email Address -->

        <div class="mt-4">
            <x-input-label for="etternavn" :value="__('Etternavn på person det gjelder')" />
            <x-text-input id="etternavn" class="block mt-1 w-full" type="etternavn" name="etternavn" :value="old('etternavn')" />
            <x-input-error :messages="$errors->get('etternavn')" class="mt-2" />
        </div>
        
        <div class="mt-4">
            <x-input-label for="fornavn" :value="__('Fornavn på person det gjelder')" />
            <x-text-input id="fornavn" class="block mt-1 w-full" type="fornavn" name="fornavn" :value="old('fornavn')" />
            <x-input-error :messages="$errors->get('fornavn')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="tag" :value="__('Skriv gjerne noen emneord (Bryllup, ferie, selskap, fritid, jobb o.l. Har du bilde som tilhører notatet, kan du laste det opp ved å navigere til Meny. Så blir bildet manuelt lagt til notatet. Kan ta en dag eller to.)')" />
            <x-text-input id="tag" class="block mt-1 w-full" type="tag" name="tag" :value="old('tag')" />
            <x-input-error :messages="$errors->get('tag')" class="mt-2" />
        </div>
        <!-- <div class="mt-4">
            <x-input-label for="created_by" :value="__('Createdby')" />
            <x-text-input id="created_by" class="block mt-1 w-full" type="created_by" name="created_by" :value="old('created_by')" />
            <x-input-error :messages="$errors->get('created_by')" class="mt-2" />
        </div> -->
        <div class="mt-4">
            <x-input-label for="bilder" :value="__('Har du et bilde som tilhører dette notatet?')" />
            <select name="bilder" id="bilder">
                <option [ngValue]="f">Nei</option>
                <option [ngValue]="t">Ja</option>
            </select>
            
            <x-input-error :messages="$errors->get('bilder')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="notat" :value="__('Her kan du skrive inn notater/ minner o.l.')" />
            <textarea id="notat" name="notat" rows="4" cols="50">
            
            </textarea>
            <!-- <x-text-input id="notat" class="block mt-1 w-full" type="notat" name="notat" :value="old('notat')" /> -->
            <x-input-error :messages="$errors->get('notat')" class="mt-2" />
        </div>
        
        <div class="mt-4">
          
            <x-text-input type="hidden" name="person" value="Person" />

        </div>
        <div class="mt-4">
          
            <x-text-input type="hidden" name="created_by" value="{{ __(Auth::user()->name) }}" />

        </div>
       
        
        <!-- <input type="submit" name="send" value="[SEND INN]"> -->
        <div class="flex items-center mt-4">
           

            <x-primary-button class="ms-3">
                {{ __('Opprett notat') }}
            </x-primary-button>
        </div>
    </form>

</x-app-layout>

