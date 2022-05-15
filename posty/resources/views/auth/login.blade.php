@extends('layouts.app')
@section('content')
<div class="flex justify-center mt-40">
    <div class="w-2/6 bg-white p-6  rounded-lg">
        @if (session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
        {{session('status')}}</div>
        @endif
        <form action="{{ route('login')}}" method="post">
            @csrf

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 @error('email') border-red-500 @enderror rounded-lg" value="{{ old('email')}}">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Choose password" class="bg-gray-100 border-2 w-full p-4 @error('password')border-red-500 @enderror rounded-lg" value="">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4  ">
                <div class="flex items-center ">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remeber me</label>
                </div>
            </div>

            <div >
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
            </div>
        </form>
    </div>
    <div class="">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_qkw0iiyo.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
</div></div>
@endsection
