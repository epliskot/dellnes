<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Last opp bilde') }}
          
        </h2>
    </x-slot>

<div class="container">

     

    <div class="panel panel-primary">



      <div class="panel-body">

     

        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>

        <!-- <img src="images/{{ Session::get('image') }}"> -->

        @endif

    

        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> Finner feil ved opplasting, send gjerne bilde til: jonandre@dellnes.no så skal jeg legge det ut.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

    

        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <br />
            <br />
            <div class="row">

    

                <div class="col-md-6">

                    <input type="file" name="image" class="form-control">

                </div>
                <div class="mt-4">
            <x-input-label for="description" :value="__('Skriv gjerne noen emneord (personer på bildet, årstall, bryllup, ferie, selskap, fritid, jobb o.l.)')" />
            <!-- <x-text-input id="description" class="block mt-1 w-full" type="description" name="description" :value="old('description')" /> -->
            <x-text-input id="description" class="block mt-1 w-full" type="description" name="description" :value="old('description')" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
       
    
       

        <div class="mt-4">
          
            <x-text-input type="hidden" name="file_path" value="Filepathen er" />

        </div>
        <div class="mt-4">
          
            <x-text-input type="hidden" name="name" value="{{ __(Auth::user()->name) }}" />

        </div>

                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">[Send inn]</button>

                </div>

     

            </div>

        </form>

    

      </div>

    </div>

</div>

</x-app-layout>
