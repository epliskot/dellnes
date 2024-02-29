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

        <img src="images/{{ Session::get('image') }}">

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

            <div class="row">

    

                <div class="col-md-6">

                    <input type="file" name="image" class="form-control">

                </div>
                <div class="mt-4">
            <x-input-label for="description" :value="__('Skriv gjerne noen emneord (personer på bildet, bryllup, ferie, selskap, fritid, jobb o.l.)')" />
            <x-text-input id="description" class="block mt-1 w-full" type="description" name="description" :value="old('description')" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="uploaded_by" :value="__('uploaded_by')" />
            <x-text-input id="uploaded_by" class="block mt-1 w-full" type="uploaded_by" name="uploaded_by" :value="old('uploaded_by')" />
            <x-input-error :messages="$errors->get('uploaded_by')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="file_path" :value="__('Filepath')" />
            <x-text-input id="file_path" class="block mt-1 w-full" type="file_path" name="file_path" :value="old('file_path')" />
            <x-input-error :messages="$errors->get('file_path')" class="mt-2" />
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
