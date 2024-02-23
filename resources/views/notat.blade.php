<x-guest-layout>
@if(Session::has('success'))
        {{Session::get('success')}}
        @endif
        
    <form method="post" action="{{ route('validate.notat') }}" novalidate>
        @csrf

        <!-- Name -->
       
            <label>Notat</label>
            <input type="text" class="form-control @error('notat') is-invalid @enderror" name="notat" id="notat">
            @error('notat')
            {{ $message }}
            @enderror
        <!-- Email Address -->
        
        <input type="submit" name="send" value="Submit">
    </form>
</x-guest-layout>
