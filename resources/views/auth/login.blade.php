@extends('layout.app')

@section('content')


    <div class="flex justify-center">
        <h2>Login</h2>
        <div class="w-6/12 mt-4 p-6 bg-white rounded-lg">
            <form action="#" method="post">
            @csrf 
            
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

            <button type="submit">Login</button>
            </form>
        </div>
    </div>

@endsection