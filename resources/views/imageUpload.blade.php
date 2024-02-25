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

     

                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">[Send inn]</button>

                </div>

     

            </div>

        </form>

    

      </div>

    </div>

</div>

</x-app-layout>
