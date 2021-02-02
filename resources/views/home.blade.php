@extends('layout.app')

@section('content')
<h2 class="mb-4">Rezept</h2>
<div class="flex justify-center">

    <div class="w-6/12 mt-4 p-6 bg-white rounded-lg">
        <div class="relative h-40 w-2/3 bg-red-500">
        Bild
        </div>

        <div class="mt-4 mb-4">
            <h2>Rezept Titel</h2>
            <div>Rezept</div>
        </div>
    </div>
    
</div>

@auth
<a href="{{'newrecipe'}}">Neues Rezept erstellen</a>
@endauth

@endsection