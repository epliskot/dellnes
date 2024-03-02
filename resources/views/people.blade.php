<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @if(Session::has('success'))
        {{Session::get('success')}}
        @endif
    <form method="POST" action="{{ route('validate.people') }}">
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
        <div class="mt-4">
            <x-input-label for="dato_dod" :value="__('Død, dato')" />

            <x-text-input id="dato_dod" class="block mt-1 w-full"
                            type="dato_dod"
                            name="dato_dod"
                         
                            />

            <x-input-error :messages="$errors->get('dato_dod')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="dato_fodt" :value="__('Født, dato')" />

            <x-text-input id="dato_fodt" class="block mt-1 w-full"
                            type="dato_fodt"
                            name="dato_fodt"
                            />

            <x-input-error :messages="$errors->get('dato_fodt')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="fodested" :value="__('Født, sted')" />

            <x-text-input id="fodested" class="block mt-1 w-full"
                            type="fodested"
                            name="fodested"
                            />

            <x-input-error :messages="$errors->get('fodested')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="navn_fodt" :value="__('Navn, født')" />

            <x-text-input id="navn_fodt" class="block mt-1 w-full"
                            type="navn_fodt"
                            name="navn_fodt"
                            />

            <x-input-error :messages="$errors->get('navn_fodt')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="parent1" :value="__('Navn, far')" />

            <x-text-input id="parent1" class="block mt-1 w-full"
                            type="parent1"
                            name="parent1"
                            />

            <x-input-error :messages="$errors->get('parent1')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="parent2" :value="__('Navn, mor')" />

            <x-text-input id="parent2" class="block mt-1 w-full"
                            type="parent2"
                            name="parent2"
                            />

            <x-input-error :messages="$errors->get('parent2')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="sted_dod" :value="__('Sted, død')" />

            <x-text-input id="sted_dod" class="block mt-1 w-full"
                            type="sted_dod"
                            name="sted_dod"
                            />

            <x-input-error :messages="$errors->get('sted_dod')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="barn" :value="__('Navn, barn')" />

            <x-text-input id="barn" class="block mt-1 w-full"
                            type="barn"
                            name="barn"
                            />

            <x-input-error :messages="$errors->get('barn')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="er_gift_med" :value="__('Navn, er gift med')" />

            <x-text-input id="er_gift_med" class="block mt-1 w-full"
                            type="er_gift_med"
                            name="er_gift_med"
                            />

            <x-input-error :messages="$errors->get('er_gift_med')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="var_gift_med" :value="__('Navn, var gift med')" />

            <x-text-input id="var_gift_med" class="block mt-1 w-full"
                            type="var_gift_med"
                            name="var_gift_med"
                            />

            <x-input-error :messages="$errors->get('var_gift_med')" class="mt-2" />
        </div>
        




        <div class="flex items-center justify-end mt-4">
           

            <x-primary-button class="ms-3">
                {{ __('Opprett person') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>