@extends('layout.app')

@section('content')

@auth
    <a href="{{'newrecipe'}}" class="text-left inline-block p-3 bg-green-200 rounded-xl shadow-xl">Neues Rezept erstellen</a>
    @endauth
    @if($recipes->count())
  
    <div class="mx-auto w-6/12">
    <h2 class="mb-4 mx-auto  mt-4  text-center">Rezepte</h2>

    </div>
    <div class=" mx-auto w-6/12">   
@foreach($recipes as $recipe )
    <div class="container  mt-4 p-6 bg-white rounded-lg mx-auto ">
   
        <p class="text-xs"> Rezept erstellt von: {{$recipe->user->username}}</p>

        <img src=" {{ asset('/storage/'. $recipe->dataUpload)}}" height="50" width="50" class="relative h-auto w-2/3 rounded-lg">
      
        
        <div class="mt-4 mb-4">
            <h2 class="text-xl mb-4">{{ $recipe -> recipeTitel }}</h2>
            <p class="underline">Zubereitung</p>
            <div> {!! nl2br(e($recipe -> recipeText))  !!}</div>
        </div>
        <form action="{{route('recipes.destroy', '$recipe')}}" method="post">
            @csrf
            @method('DELETE')
            <button>Dieses Rezept löschen</button>
        </form>
    </div>
    @endforeach
    {{$recipes->links()}}
    @else 
    <p>hat nicht geklapp</p>
    @endif

  
</div>


@endsection