<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    public $popularActors;
    protected $page;
    public function __construct($popularActors) 
    {
        $this->popularActors = $popularActors;
    }

    public function popularActors()
    {
        return collect($this->popularActors)->map(function($actor) {
        return collect($actor)->merge([
            'profile_path' => $actor['profile_path'],
            'known_for' => collect($actor['known_for'])->pluck('original_title')->implode(', '),
        ])->only([
            'name' , 'id' , 'profile_path' , 'known_for'
        ]);
    });
    }
}


