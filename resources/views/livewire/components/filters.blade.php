<div>
    <form class="flex justify-between my-4">
        <div class="flex items-center">
            <label class="mr-2" for="Author">Author</label>
            <select
                class="mr-2 cursor-pointer appearance-none w-48 bg-gray-200 text-gray-700 py-2 px-2 pr-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-none dark:bg-gray-800 dark:text-white"
                name="author"
                id="Author">
                <option value>Select</option>
                @foreach($authors as $author)
                    <option
                        value="{{ $author['id'] }}"
                        @if(request()->query('author') == $author['id'])
                            selected
                        @endif>
                        {{ $author['name'] }}
                    </option>
                @endforeach
            </select>

            <label class="mr-2" for="Tag">Tag</label>
            <select
                class="mr-2 cursor-pointer appearance-none w-48 bg-gray-200 text-gray-700 py-2 px-2 pr-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-none dark:bg-gray-800 dark:text-white"
                name="tag"
                id="Tag">
                <option value>Select</option>
                @foreach($tags as $tag)
                    <option
                        value="{{ $tag['id'] }}"
                        @if(request()->query('tag') == $tag['id'])
                            selected
                        @endif>
                        {{ $tag['title'] }}
                    </option>
                @endforeach
            </select>

            <label class="mr-2" for="Sort">Sort By</label>
            <select
                class="mr-2 cursor-pointer appearance-none w-48 bg-gray-200 text-gray-700 py-2 px-2 pr-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-none dark:bg-gray-800 dark:text-white"
                name="sort"
                id="Sort">
                <option value>Select</option>
                @foreach($sorts as $index => $sort)
                    <option
                        value="{{ $index }}"
                        @if(request()->query('sort') == $index))
                           selected
                        @endif>
                        {{ $sort }}
                    </option>
                @endforeach
            </select>
        </div>

        <button
            class="w-48 rounded-md bg-primary-500 py-2 px-2 fon4-medium text-white sm:py-0 hover:bg-primary-700 dark:hover:bg-primary-480 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 dark:ring-offset-black"
            type="submit">Filter
        </button>
    </form>
</div>
