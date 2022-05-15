    @extends('layouts.app')
    @section('content')

    <div class="sm:flex items-center ">
    <div class="my-4  ml-48 ">
        <div  id="addpost" class=" bg-white p-6  rounded-lg hidden">
            @auth
            <form action="{{ route('posts')}}" method="post"  class="mb-4" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <div class="mb-3 pt-0">
                    <label for="title" class="sr-only">Title</label>
                    <input type="text" name="title" placeholder="Title" class="px-3 py-3 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full"/>
                </div>
                            @error('title')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="body" class="sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="px-3 py-3 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full @error('body') border-red-500 @enderror" placeholder="Post something"></textarea>
                @error('body')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Photo</label>
        <input class="w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm font-medium text-gray-700 mb-4"    name="image" type="file">
                <div name='type' class="mb-4">
                    <select class="w-full bg-white border-0 shadow rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm font-medium text-gray-700" name="type">
                        <option class="block text-sm font-medium text-gray-700" disabled selected>Select </option>
                        <option class="block text-sm font-medium text-gray-700" value="Demande">Demande</option>
                        <option class="block text-sm font-medium text-gray-700" value="Offre">Offre</option>
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
        <div class="flex  items-center  mr-40">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_g5eeqvjy.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
                <a href="offre"> <button type="button" class="max-w-xs min-w-fit text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"  >Article Offre</button></a>
                <a href="demande">  <button type="button" class="max-w-xs min-w-fit text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Article demande</button></a>
                @auth
            <button onclick="toggleAddPost()" type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" id="add">Add Product</button>
            @endauth
        </div>
    </div>
        @if($posts->count())

        @foreach ($posts as $post)
        <div class="bg-white p-6 mb-6 rounded-lg w-3/4 m-auto">
        <x-post :post="$post"/>
        @endforeach

        {{ $posts->links()}}

        @else
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_0zomy8eb.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
        <div class="text-xl font-lf-bold font-normal mb-2">No results found</div>

        @endif


        <script>
            const addPost = document.querySelector("#addpost")
            function toggleAddPost(){
                addPost.classList.toggle("hidden");
            }
        </script>
            @endsection
