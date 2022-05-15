@extends('layouts.app')
@section('content')

<div class="flex justify-center">
    <div class="w-8/12">
        <div class="p-6">
            <h1 class="text-2xl font-medium mb-1"> {{ $user->name}}</h1>
        <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count())}} and received {{ $user->receivedLikes->count()}} likes</p>
        </div>

        @if($posts->count())
    @foreach ($posts as $post)
        <div class="bg-white p-6 m-8 rounded-lg">
        <x-post :post="$post"/>
    @endforeach

    {{ $posts->links()}}

    @else
    <p>{{ $user->name}} does not have any posts</p>
    @endif
    </div>
</div></div>
@endsection
