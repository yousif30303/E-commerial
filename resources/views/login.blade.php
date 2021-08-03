@extends('welcome')

@section('content')
    <div class="d-flex justify-content-center" style="background-color: rgb(229,231,235)">
        <div class="w-25 border border-white rounded d-flex justify-content-center mb-4 mt-4 bg-white">
        <form action="{{route('login')}}" method="post">
            @csrf
            @if (session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
                </div>
            @endif
            <div class="mb-4 mt-3">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Your Email" class="px-5 py-3 rounded @error('email') border-red-500 @enderror" style="background-color: rgb(229,231,235);border-style: solid;" value="">                
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Your Password" class="px-5 py-3 rounded @error('password') border-red-500 @enderror" style="background-color: rgb(229,231,235);border-style: solid;" value="">
            
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>
            </div>
            
            <div>
                <button type="submit" class="btn btn-primary mb-3 rounded" style="padding: 10px 118px">Login</button>
            </div>
        </form>
        </div>
    </div>
@endsection