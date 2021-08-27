<div class="relative mt-2 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full text-sm w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
    <div class="absolute top-0"><!-- it's gonna be svg here --></div>
    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>
    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-800 w-64 rounded mt-4">
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border text-sm border-gray-700">
                            <a href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                                @if ($result['poster_path'])
                                    <img class="w-8" src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="" class="w-8">
                                @endif
                                <span class="ml-4">{{ $result['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else 
                <div class="px-3 py-3">
                    There is no results for {{ $search }}
                </div>
            @endif
        </div>
    @endif
</div>
