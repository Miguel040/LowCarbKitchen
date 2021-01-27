@extends('layout.app')

@section('content')

    <h2>Regestrieren</h2>

    <div class="flex justify-center">
        <div class="w-6/12 mt-4 p-6 bg-white rounded-lg">
            <form action="#" method="post">
            @csrf 
            
            <div class="mb-5">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Gebe deinen Namen ein" class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                @error('name') border-red-500 @enderror" value="{{ old('name')}}">

                @error('name')
                    <div>
                        <p class="text-red-500">{{$message}}</p>
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Gebe deinen Usernamen ein" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('username') border-red-500 @enderror" value="{{ old('username')}}">
                @error('username')
                    <div>
                        <p class="text-red-500">{{$message}}</p>
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Gebe deine E-Mail Adresse an" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('email') border-red-500 @enderror" value="{{ old('email')}}">
                @error('email')
                    <div>
                        <p class="text-red-500">{{$message}}</p>
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password">Passwort</label>
                <input type="password" id="password" name="password" placeholder="Gebe dein Passwort ein" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('password') border-red-500 @enderror" >
                @error('password')
                    <div>
                        <p class="text-red-500">{{$message}}</p>
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password_confirmation">Passwort Wiederholen</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Bitte wiederhole dein Passwort" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('password_confirmation') border-red-500 @enderror">
                @error('password_confirmation')
                    <div>
                        <p class="text-red-500">{{$message}}</p>
                    </div>
                @enderror
            </div>
            <button type="submit">Regestrieren</button>
            </form>
        </div>
    </div>

@endsection