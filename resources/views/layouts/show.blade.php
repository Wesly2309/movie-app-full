@extends('layouts.app')

@section('content')
    <div class="movie info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/demonslayer.jpg" alt="Demon Slayer" class="w-64 md:w-96">
            <div class="md:ml-24">
              <h2 class="text-4xl font-semibold">Demon Slayer: Kimetsu No Yaiba - To the Swordsmith Village (2023)</h2>
              <div class="flex flex-wrap items-center text-gray-400 text-sm mt-4">
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
                <span class="mx-2">|</span>
                <span>Action, Adventure, Fantasy, Thriller</span>
            </div>

            <p class="text-gray-300 mt-8">
                Tanjiro finds himself eye-to-eye on a strong upper rank demon, Gyutaro, and it is his goal to defeat him with all his comrades. Upon getting stabbed under his chin, he barely slices his head off at the same time Zenitsu sliced Daki. Because of the upper moon's defeat, the demon leader, Muzan, assembles the rest of the upper moons in the infinity castle to discuss the situation. Afterwards, there was a flashback regarding the mysterious Tanjiro-like swordsman that Muzan fears. Tanjiro then wakes up from a 2-month long coma, and seemed to have that flashback during that time frame. To end off the movie, Tanjiro meets the new Hashira that are introduced, Mitsuri Kanroji, the love Hashira, and Muichiro Tokito, the mist Hashira.
            </p>

            <div class="mt-12">
                <h4 class="text-white font-semibold">Featured Cast</h4>
                <div class="flex mt-4">
                    <div>
                        <div>Haruo Sotozaki</div>
                        <div class="text-sm text-gray-400">Director</div>
                    </div>
                    <div class="ml-8">
                        <div>Akifumi Fujio</div>
                        <div class="text-sm text-gray-400">Producer</div>
                    </div>
                    <div class="ml-8">
                        <div>Koyoharu Gotouge</div>
                        <div class="text-sm text-gray-400">Writer</div>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-2 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                    <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.516-4.5-6-4.5v9zM12 2C6.48. 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                    <i class="mr-3 fa-sharp fa-regular fa-circle-play fa-2xl"></i>
                    <span class="mr-3">Play Trailer</span>
                </button>
            </div>
        </div>
    </div>
    
    <div class="movie-cast border-b border-gray 800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/natsukihanae.jpg" alt="Natsuki Hanae"
                        class="hover:opacity-75 transition
                        ease-in-out duration-150">
                    </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Natsuki Hanae</a>
                <div class="flex items-center text-gray-400 mt-1">
                    <span>Tanjiro Kamado</span>
                </div>
            </div>
        </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/akarikito.jpg" alt="Akari Kito"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Akari Kito</a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <span>Netzuko Kamado</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/yoshitsugumatsuoka.jpg" alt="Yoshitsugu Matsuoka"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Yoshitsugu Matsuoka
                        </a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <span>Inosuke Hashibira</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/hiroshimono.jpg" alt="Hiro Shimono"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Hiro Shimono</a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <span>Zenitsu Agatsuma</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/katsuyukikonishi.jpg" alt="Katsuyuki Konishi"
                            class="hover:opacity-75 transition
                        ease-in-out duration-150" />
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 text-white hover:text-gray-300">Katsuyuki Konishi
                        </a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <span>Tengen Uzui</span>
                        </div>
                    </div>
                </div>
            </div>
                    <h2 class="text-4xl font-semibold mt-8">Images</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/demonslayer.jpg" alt="Natsuki Hanae"
                                    class="hover:opacity-75 transition
                                ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <div class="flex items-center text-gray-400 mt-1"></div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/demonslayerphoto.jpg" alt="Akari Kito"
                                class="hover:opacity-75 transition
                                ease-in-out duration-150" />
                            </a>
                            <div class="mt-2">
                                <div class="flex items-center text-gray-400 mt-1">
                                    <div class="flex items-center text-gray-400 mt-1"></div>         
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/demonslayerphoto1.jpg" alt="Tanjiro Kamado"
                                class="hover:opacity-75 transition
                                ease-in-out duration-150" />
                            </a>
                            <div class="mt-2">
                                <div class="flex items-center text-gray-400 mt-1"> 
                                    <div class="flex items-center text-gray-400 mt-1"></div>         
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/tanjirokamado.jpg" alt="Tanjiro Kamado"
                                class="hover:opacity-75 transition
                                ease-in-out duration-150" />
                            </a>
                            <div class="mt-2">
                                <div class="flex items-center text-gray-400 mt-1">
                                    <div class="flex items-center text-gray-400 mt-1"></div>         
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/tanjirokamado1.jpg" alt="Tanjiro Kamado"
                                class="hover:opacity-75 transition
                                ease-in-out duration-150" />
                            </a>
                            <div class="mt-2">
                                <div class="flex items-center text-gray-400 mt-1"> 
                                    <div class="flex items-center text-gray-400 mt-1"></div>         
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                
        </div>
    @endsection