@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach($popularMovies as $movie) 

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/demonslayer.jpg" alt="Demon Slayer"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">{{$movie->title}}
                        </a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="
                                Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                                01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star" />
                                    <g>
                            </svg>
                            <span class="ml-1">6.7</span>
                            <span class="mx-2">|</span>
                            <span>9 April 2023</span>
                        </div>
                        <div class="text-gray-400 text-sm ">
                            Action, Adventure, Fantasy, Thriller
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/spiderman2021.jpg" alt="Spider Man 2021"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Spider-Man: No Way Home
                        </a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="
                                Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                                01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star" />
                                    <g>
                            </svg>
                            <span class="ml-1">8.2</span>
                            <span class="mx-2">|</span>
                            <span>15 December 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm ">
                            Action, Adventure, Fantasy, Sci-Fi
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/godzillavskong.jpg" alt="Godzilla vs Kong"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Godzilla vs. Kong</a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="
                                Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                                01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star" />
                                    <g>
                            </svg>
                            <span class="ml-1">6.3</span>
                            <span class="mx-2">|</span>
                            <span>24 Maret 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm ">
                            Action, Sci-Fi, Thriller
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/frozen2.jpg" alt="Spider Man 2021"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Frozen II
                        </a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="
                                Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                                01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star" />
                                    <g>
                            </svg>
                            <span class="ml-1">6.8</span>
                            <span class="mx-2">|</span>
                            <span>20 November 2019</span>
                        </div>
                        <div class="text-gray-400 text-sm ">
                            Animation, Adventure, Comedy, Drama, Family, Fantasy, Musical
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/godzillakingofthemonsters.jpg" alt="Godzilla King of the Monsters"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Godzilla: King of the Monsters
                        </a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="
                                Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                                01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star" />
                                    <g>
                            </svg>
                            <span class="ml-1">6.0</span>
                            <span class="mx-2">|</span>
                            <span>29 Mei 2019</span>
                        </div>
                        <div class="text-gray-400 text-sm ">
                            Action, Adventure, Fantasy, Sci-Fi
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="container mx-auto px-4 pt-16">
        <div class="now-playing-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/demonslayer.jpg" alt="Demon Slayer"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Demon Slayer: Kimetsu No Yaiba
                            - To the Swordsmith Village
                        </a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="
                                Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                                01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star" />
                                    <g>
                            </svg>
                            <span class="ml-1">6.7</span>
                            <span class="mx-2">|</span>
                            <span>9 April 2023</span>
                        </div>
                        <div class="text-gray-400 text-sm ">
                            Action, Adventure, Fantasy, Thriller
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/spiderman2021.jpg" alt="Spider Man 2021"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Spider-Man: No Way Home
                        </a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="
                                Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                                01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star" />
                                    <g>
                            </svg>
                            <span class="ml-1">8.2</span>
                            <span class="mx-2">|</span>
                            <span>15 December 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm ">
                            Action, Adventure, Fantasy, Sci-Fi
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/godzillavskong.jpg" alt="Godzilla vs Kong"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Godzilla vs. Kong
                        </a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="
                                Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                                01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star" />
                                    <g>
                            </svg>
                            <span class="ml-1">6.3</span>
                            <span class="mx-2">|</span>
                            <span>24 Maret 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm ">
                            Action, Sci-Fi, Thriller
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/frozen2.jpg" alt="Frozen 2"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Frozen II</a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="
                                Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                                01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star" />
                                    <g>
                            </svg>
                            <span class="ml-1">6.8</span>
                            <span class="mx-2">|</span>
                            <span>20 November 2019</span>
                        </div>
                        <div class="text-gray-400 text-sm ">
                            Animation, Adventure, Comedy, Drama, Family, Fantasy, Musical
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/godzillakingofthemonsters.jpg" alt="Godzilla King of the Monsters"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Godzilla: King of the Monsters
                        </a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="
                                Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                                01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star" />
                                    <g>
                            </svg>
                            <span class="ml-1">6.0</span>
                            <span class="mx-2">|</span>
                            <span>29 Mei 2019</span>
                        </div>
                        <div class="text-gray-400 text-sm ">
                            Action, Adventure, Fantasy, Sci-Fi
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
