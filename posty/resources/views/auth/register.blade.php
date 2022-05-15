@extends('layouts.app')
@section('content')
<div class=" mt-32 flex justify-center">
    <div class="w-2/6 bg-white p-6 rounded-lg">
        <form action="{{ route('register')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 @error('name') border-blue-500 @enderror rounded-lg" value="{{ old('name')}}">
            @error('name')
                <div class="text-blue-500 mt-2 test-sm">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Your username" class="bg-gray-100 border-2 w-full p-4 @error('username') border-blue-500 @enderror rounded-lg" value="{{ old('username')}}">
                @error('username')
                <div class="text-blue-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 @error('email') border-blue-500 @enderror rounded-lg" value="{{ old('email')}}">
                @error('email')
                <div class="text-blue-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Choose password" class="bg-gray-100 border-2 w-full p-4 @error('password')border-blue-500 @enderror rounded-lg" value="">
                @error('password')
                <div class="text-blue-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 @error('password')border-blue-500 @enderror rounded-lg" value="">
                @error('password')
                <div class="text-blue-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div >
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>
        </form>
    </div>
    <div class="">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_buratoqa.json" mode="bounce" background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
    </div>
</div>
@endsection
