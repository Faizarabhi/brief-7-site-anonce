<form action="{{route('post.search')}}">
    <div class="form-group">

    <input type="search" value="{{ request()->q ?? ''}}"  class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="q" placeholder="Search...">
    </div>

</form>
