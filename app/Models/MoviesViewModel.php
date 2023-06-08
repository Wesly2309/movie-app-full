<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MoviesViewModel extends Model
{
    public $popularMovies;
    public $nowPlayingMovies;
    public $genres;
    public function  __construct($popularMovies, $nowPlayingMovies, $genres) 
    {
        $this->popularMovies = $popularMovies;
        $this->nowPlayingMovies = $nowPlayingMovies;
        $this->genres = $genres;
    }

    public function popularMovies () 
    {
        return $this->formatMovies($this->popularMovies);
    }

    public function nowPlayingMovies() 
    {
        return $this->formatMovies($this->nowPlayingMovies);
    }

    public function genres() 
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }

    public function formatMovie($movies) 
    {
        return collect($movies)->map(function($movie) {
            $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function($value) {
                return [$value => $this->genre()->get($value)];
            })->implode(', ');

        return collect($movie)->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
            'vote_average' => $movie['vote_average'] * 10 . '%',
            'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
            'genres' => $genresFormatted
        ])->only([
            'poster_path', 'id', 'genre_ids' , 'title' , 'vote_average' , 'overview' , 'release_date' , 'genres'
        ]);
    });
    }
    
}
