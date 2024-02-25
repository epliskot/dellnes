<x-guest-layout>
@if(Session::has('success'))
        {{Session::get('success')}}
        @endif
        
    <form method="post" action="{{ route('validate.notats') }}" novalidate>
        @csrf

        <!-- Name -->
       
            <label>Notats</label>
            <input type="text" class="form-control @error('notats') is-invalid @enderror" name="notats" id="notats">
            
            @error('notats')
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
        
        <input type="submit" name="send" value="Submit">
    </form>
</x-guest-layout>
