@extends('welcome')

@section('content')
<div class="d-flex justify-content-center" style="background-color: rgb(229,231,235)">
    <div class="w-25 border border-white rounded d-flex justify-content-center mb-4 mt-4 bg-white">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-4 mt-3">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Your Name" class="px-5 py-3 rounded @error('name') border-red-500 @enderror" style="background-color: rgb(229,231,235);border-style: solid;" value="">                
                
                @error('name')
                <div class="">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Your Email" class="px-5 py-3 rounded @error('email') border-red-500 @enderror" style="background-color: rgb(229,231,235);border-style: solid;" value="">                
                
                @error('email')
                <div class="">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Your Password" class="px-5 py-3 rounded @error('password') border-red-500 @enderror" style="background-color: rgb(229,231,235);border-style: solid;" value="">
            
                @error('password')
                <div class="">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password Again</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Your Password" class="px-5 py-3 rounded @error('password') border-red-500 @enderror" style="background-color: rgb(229,231,235);border-style: solid;" value="">
            </div>

            <div>
                <button type="submit" class="btn btn-primary mb-3 rounded" style="padding: 13px 108px">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection