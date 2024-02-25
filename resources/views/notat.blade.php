<x-guest-layout>
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
            <x-input-label for="person" :value="__('Person')" />
            <x-text-input id="person" class="block mt-1 w-full" type="person" name="person" :value="old('person')" />
            <x-input-error :messages="$errors->get('person')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="tag" :value="__('Tag')" />
            <x-text-input id="tag" class="block mt-1 w-full" type="tag" name="tag" :value="old('tag')" />
            <x-input-error :messages="$errors->get('tag')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="created_by" :value="__('Createdby')" />
            <x-text-input id="created_by" class="block mt-1 w-full" type="created_by" name="created_by" :value="old('created_by')" />
            <x-input-error :messages="$errors->get('created_by')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="notat" :value="__('Notat')" />
            <x-text-input id="notat" class="block mt-1 w-full" type="notat" name="notat" :value="old('notat')" />
            <x-input-error :messages="$errors->get('notat')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="created_by" :value="__('Createdby')" />
            <x-text-input type="hidden" name="created_by" value="{{ __(Auth::user()->name) }}" />
            
        </div>
       
        
        <input type="submit" name="send" value="Submit">
    </form>
</x-guest-layout>
