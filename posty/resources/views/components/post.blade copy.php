<div>
    @props(['post' => $post])
    <div>
        <!-- component -->
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">


                    <div class="p-4 md:w-1/3">
                        <div class="h-full rounded-xl shadow-cla-pink bg-gradient-to-r from-fuchsia-50 to-pink-50 overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1631700611307-37dbcb89ef7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDIwfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60" alt="blog">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY-1</h2>
                                <div class="mb-4">
                                <a href="{{ route('users.posts', $post->user)}}" class="font-bold">{{ $post->user->name}}</a><span class="text-gray-600 text-sm">{{ $post->created_at->DiffForHumans()}}</span>
                <h1 class="title-font text-lg font-medium text-gray-600 mb-3">The Catalyzer</h1>
                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                <p class="mb-2">{{ $post->body}}</p>
                <div class="flex items-center flex-wrap ">
                  <button type="submit" class="bg-gradient-to-r from-fuchsia-300 to-pink-400 hover:scale-105  shadow-cla-blue px-4 py-1 rounded-lg">Learn more</button>
                  <a href="{{ route('users.posts', $post->user)}}" class="block font-medium text-purple-600">Know more</a>

                  @can('delete',$post)
                  <form action="{{ route('posts.destroy', $post)}}" method="post">
                      @csrf
                      @method('DELETE')
                  <button type="submit" class="text-red-500">Delete</button>
                  </form>
                  @endcan

                  <div class="flex items-center">
                  @auth
                  @if(!$post->likedBy(auth()->user()))
                  <form action="{{ route('posts.likes', $post)}}" method="post" class="mr-1">
                      @csrf
                      <button type="submit" class="text-blue-500">Like</button>
                  </form>
                  @else
                  <form action="{{ route('posts.likes', $post)}}" method="post" class="mr-1">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="text-red-500">Unlike</button>
                  </form>
                  @endif

                  @endauth

                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>


    <span>{{ $post->likes->count()}} {{ Str::plural('like',$post->likes->count())}} </span>
    </div>
    </div>
</div>
    </div>
