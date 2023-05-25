<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActorsViewModel;
use Illuminate\Support\Facades\Http;

class ActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popularActors = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/person/popular')
            ->json()["results"];

            
            // $titlesArray = json_decode(Http::withToken(config('services.tmdb.token'))
            // ->get('https://api.themoviedb.org/3/person/popular'));


            $results = json_decode(Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/person/popular'), true);

            dd($results['id']['known_for']['title']);

            // $titles = collect($titlesArray)->mapwithKeys(function ($title) {
        //     // return [$title['id'] => $title['title']];
        // });
       

                    
        return view('actors.home' , compact('popularActors', 'results'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}



