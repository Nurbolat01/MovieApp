@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <!-- Popular movie beging -->
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <!-- start here  -->
                @foreach($popularMovies as $movie)
                    <x-movie-card :movie="$movie"/>
                @endforeach

            </div>
        </div> <!-- Popular Movie End-->

        <!-- Now playing Movies -->
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <!-- start here  -->
                @foreach($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach
            </div>
        </div>
    </div>
@endsection