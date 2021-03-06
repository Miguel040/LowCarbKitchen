@extends('layout.app')

@section('content')


    <div class="flex justify-center">
        <div class="w-6/12 mt-4 p-6 bg-white rounded-lg">
            <form action="#" method="post" enctype="multipart/form-data">
            @csrf 
            
            <div class="mb-5">
                <label for="dataUpload">Lade ein Foto von deinem Rezept hoch</label>
                <input type="file" id="dataUpload" name="dataUpload" class="bg-green-100 border-2 w-full p-4 rounded-lg
                @error('dataUpload') border-red-500 @enderror" value="{{ old('dataUpload')}}">
                @error('dataUpload')
                    <div>
                        <p class="text-red-500">{{$message}}</p>
                    </div>
                @enderror
            </div> 
            <div class="mb-5">
                <label for="recipeTitel">Rezept Titel</label>
                <input type="text" id="recipeTitel" name="recipeTitel" placeholder="Gebe einen kurzen prägnanten Titel ein" class="bg-green-100 border-2 w-full p-4 rounded-lg
                @error('recipeTitel') border-red-500 @enderror" >
                @error('recipeTitel')
                    <div>
                        <p class="text-red-500">{{$message}}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="recipeText"></label>
                <textarea type="text" id="recipeText" name="recipeText" placeholder="Erkläre uns wie es geht." class="bg-green-100 border-2 w-full p-4 rounded-lg h-40
                @error('recipeText') border-red-500 @enderror" ></textarea>
                @error('recipeText')
                    <div>
                        <p class="text-red-500">{{$message}}</p>
                    </div>
                @enderror
            </div>

            <button type="submit" class="text-left inline-block p-3 bg-green-200 rounded-xl shadow-xl">Rezept erstellen</button>
            </form>
        </div>
    </div>

@endsection