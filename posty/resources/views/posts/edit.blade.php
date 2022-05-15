
@extends('layouts.app')
@section('content')
<div class="grid place-content-center">
<div  id="addpost" class=" bg-white p-6 max-w-md rounded-lg ">
    @auth
    <form action="{{ route('posts.update',$post)}}" method="post"  class="mb-4" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <div class="mb-3 pt-0">
            <label for="title" class="sr-only">Title</label>
            <input type="text" name="title" placeholder="Title" value="{{ $post->title}}" class="px-3 py-3 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full"/>
        </div>
                    @error('title')
        <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="body" class="sr-only">Body</label>
        <textarea name="body"  id="body" cols="30" rows="10" class="px-3 py-3 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full @error('body') border-red-500 @enderror" placeholder="Post something">{{$post->body}}</textarea>
        @error('body')
        <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
        </div>
        @enderror
    </div>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Photo</label>
<input class="w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm font-medium text-gray-700 mb-4" value="{{$post->image}}"    name="image" type="file">
        <div name='type' class="mb-4">
            <select  class="w-full bg-white border-0 shadow rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm font-medium text-gray-700"  name="type">
                <option class="block text-sm font-medium text-gray-700" disabled >Select </option>
                <option @if($post->type=="Demande") selected @endif class="block text-sm font-medium text-gray-700" value="Demande">Demande</option>
                <option @if($post->type=="Offre") selected @endif    class="block text-sm font-medium text-gray-700" value="Offre">Offre</option>
            </select>
            @error('type')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror

        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
        {{-- Post --}}
        </button>

    </form>
    @endauth
</div>
</div>
@endsection
