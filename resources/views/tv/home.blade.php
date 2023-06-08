@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-tv">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow" :genres="$genres" />
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mx-auto py-24">
        <div class="now-playing-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Top Rated Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($topRatedTv as $tv)
<<<<<<< HEAD
                    <x-tv-card :tvshow="$tvshow" :genres="$genres" />
                @endforeach
=======
                    @foreach ($topRatedTv as $tv)
                        <x-tv-card :tvshow="$tvshow" :genres="$genres" />
                    @endforeach
>>>>>>> f515e74acf72739b84ec577db3114113b62530a6
            </div>
        </div>
    </div>
@endsection