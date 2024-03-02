<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('person') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="etternavn" :value="__('Etternavn')" />
            <x-text-input id="etternavn" class="block mt-1 w-full" type="etternavn" name="etternavn" :value="old('etternavn')" required autofocus autocomplete="etternavn" />
            <x-input-error :messages="$errors->get('etternavn')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="fornavn" :value="__('Fornavn')" />

            <x-text-input id="fornavn" class="block mt-1 w-full"
                            type="fornavn"
                            name="fornavn"
                            />

            <x-input-error :messages="$errors->get('fornavn')" class="mt-2" />
        </div>

       

        <div class="flex items-center justify-end mt-4">
           

            <x-primary-button class="ms-3">
                {{ __('Opprett person') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>