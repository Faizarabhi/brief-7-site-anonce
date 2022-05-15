@props(['post' => $post])

<!-- component -->

<div class=" grid  place-content-center ">
    <div class="flex justify-end">
        <div class="flex justify-end">
    @can('delete', $post)
    <form action="{{ route('posts.destroy', $post) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-500 mr-4"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
    </form>


        <a  href="{{route('posts.edit',$post)}}" type="submit" class="text-blue-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                </path>
            </svg>

        </a>
    @endcan
</div>
</div>
    <section class="max-w-lg text-gray-600 body-font">
        <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a> <span class="text-gray-600 text-sm ">{{ $post->created_at->diffForHumans() }}</span>
        <div class="h-full rounded-xl shadow-cla-pink bg-gradient-to-r from-fuchsia-50 to-pink-50 overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100"
            src="{{asset('/images/'.$post->image)}}" alt="blog">
            <div class="p-6">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $post->type}}</h2>
                <div class="title-font text-lg font-medium text-gray-600 mb-3">
                    <h1 class="font-semibold ">{{ $post->title }}</h1>
</div>
          <p class="leading-relaxed mb-3">{{ $post->body }}</p>
          <div class="flex items-center flex-wrap ">
            <a href="{{ route('users.posts', $post->user) }}" class="bg-gradient-to-r from-fuchsia-300 to-pink-400 hover:scale-105  shadow-cla-blue px-4 py-1 rounded-lg">Learn more</a>

          </div>


<div class="flex items-center">
    @auth
        @if (!$post->likedBy(auth()->user()))
            <form action="{{ route('posts.like', $post) }}" method="post" class="mr-1">
                @csrf
                {{-- <button type="submit" class="text-black-500"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"></path></svg></button> --}}
                <button type="submit" class="text-black-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z">
                        </path>
                    </svg>
                </button>

                {{-- <button type="submit" class="text-blue-500">Like</button> --}}
            </form>
        @else
            <form action="{{ route('posts.unlike', $post) }}" method="post" class="mr-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-blue-500">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"></path>
                    </svg>
                </button>

                {{-- <button type="submit" class="text-blue-500">Unlike</button> --}}
            </form>
        @endif
    @endauth

    <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
        </div>
      </div>
    </div>
</div>

</section>
</div>
