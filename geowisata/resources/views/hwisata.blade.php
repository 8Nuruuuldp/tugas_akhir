<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Geowisata</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <script src="https://cdn.maptiler.com/maptiler-geocoding-control/v1.2.0/leaflet.umd.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-geocoding-control/v1.2.0/style.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>
    <nav class="sticky top-0 z-5 bg-white">
        <div class="flex flex-wrap items-center justify-between px-12 py-4">
            <img src="/img/logo.svg" alt="Bandung Geowisata" width="120" />

            <div class="flex md:hidden">
                <button id="hamburger">
                    <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png"
                        width="40" height="40" />
                    <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png"
                        width="40" height="40" />
                </button>
            </div>

            <div
                class="toggle hidden md:flex w-full md:w-auto text-right text-bold mt-5 md:mt-0 border-t-2 border-blue-900 md:border-none">
                <a href="/"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Beranda</a>
                <a href="/#tentang"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Tentang</a>
                <a href="/#rekomendasi"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Rekomendasi</a>
                <a href="/#petawisata"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Peta
                    Wisata</a>
                <a href="/#kontak"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Kontak</a>
            </div>
    </nav>

    <!-- info/detail wisata -->    
    <section>
        <div class="bg-gray-100 dark:bg-gray-800 py-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">


                        <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                            @if (isset($wisata) && isset($wisata->gambar))
                            <img class="w-full h-full object-cover" src="{{ asset('img/' . $wisata->gambar) }}"
                                alt="Foto wisata">
                            @else
                            <p>Tidak ada gambar tersedia.</p>
                            @endif
                        </div>
                        <!-- Rencana penambahan button -->
                        <div class="flex -mx-2 mb-4">
                            <div class="w-1/2 px-2">
                                @if (isset($wisata) && isset($wisata->latitude) && isset($wisata->longitude))
                                <button
                                    class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">
                                    <a
                                        href="https://www.google.com/maps/place/{{ $wisata->latitude }},{{ $wisata->longitude }}">Dapatkan
                                        Arah</a>
                                </button>
                                <!-- @else
                                <p>Tidak ada lokasi tersedia.</p> -->
                                @endif
                            </div>
                            <div class="w-1/2 px-2">
                                <button id="openContactForm"
                                    class="w-full bg-blue-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-300 dark:hover:bg-gray-600">Berikan
                                    Ulasan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex-1 px-4">
                        @if (isset($wisata))
                        <h2 class="text-4xl font-bold text-gray-800 dark:text-white mb-2">{{ $wisata->nama_tempat }}
                        </h2>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">{{ $wisata->alamat }}</p>
                        @else
                        <p>Tidak ada data wisata yang ditemukan.</p>
                        @endif
                        <div class="mr-4">

                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <p class="ms-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                <a href="#"
                                    class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73
                                    reviews</a>
                            </div>
                        </div>


                        <div class="mr-4 mt-2">
                            @if (isset($wisata))
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <p class="ms-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                <a href="#"
                                    class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73
                                    reviews</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- review -->
    <div class="mt-5 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6">
        <h3 class="text-lg font-bold text-[#333]">Reviews(10)</h3>
        <div class="grid md:grid-cols-2 gap-12 mt-6">
            <div>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <p class="text-sm text-[#333] font-bold">5.0</p>
                        <svg class="w-5 fill-[#333] ml-1" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <div class="bg-gray-400 rounded w-full h-2 ml-3">
                            <div class="w-2/3 h-full rounded bg-[#333]"></div>
                        </div>
                        <p class="text-sm text-[#333] font-bold ml-3">66%</p>
                    </div>

                    <div class="flex items-center">
                        <p class="text-sm text-[#333] font-bold">4.0</p>
                        <svg class="w-5 fill-[#333] ml-1" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <div class="bg-gray-400 rounded w-full h-2 ml-3">
                            <div class="w-1/3 h-full rounded bg-[#333]"></div>
                        </div>
                        <p class="text-sm text-[#333] font-bold ml-3">33%</p>
                    </div>

                    <div class="flex items-center">
                        <p class="text-sm text-[#333] font-bold">3.0</p>
                        <svg class="w-5 fill-[#333] ml-1" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <div class="bg-gray-400 rounded w-full h-2 ml-3">
                            <div class="w-1/6 h-full rounded bg-[#333]"></div>
                        </div>
                        <p class="text-sm text-[#333] font-bold ml-3">16%</p>
                    </div>

                    <div class="flex items-center">
                        <p class="text-sm text-[#333] font-bold">2.0</p>
                        <svg class="w-5 fill-[#333] ml-1" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <div class="bg-gray-400 rounded w-full h-2 ml-3">
                            <div class="w-1/12 h-full rounded bg-[#333]"></div>
                        </div>
                        <p class="text-sm text-[#333] font-bold ml-3">8%</p>
                    </div>

                    <div class="flex items-center">
                        <p class="text-sm text-[#333] font-bold">1.0</p>
                        <svg class="w-5 fill-[#333] ml-1" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <div class="bg-gray-400 rounded w-full h-2 ml-3">
                            <div class="w-[6%] h-full rounded bg-[#333]"></div>
                        </div>
                        <p class="text-sm text-[#333] font-bold ml-3">6%</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="flex items-start">

                    <div class="ml-3">
                        <h4 class="text-sm font-bold text-[#333]">John Doe</h4>
                        <div class="flex space-x-1 mt-1">
                            <svg class="w-4 fill-[#333]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#333]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#333]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                            </svg>
                            <p class="text-xs !ml-2 font-semibold text-[#333]">2 mins ago</p>
                        </div>
                        <p class="text-sm mt-4 text-[#333]">Lorem ipsum dolor sit amet, consectetur adipisci elit, sed
                            eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <button type="button"
                    class="w-full mt-10 px-4 py-2.5 bg-transparent hover:bg-gray-50 border border-[#333] text-[#333] font-bold rounded">Read
                    all reviews</button>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Modal button-->
    <div class="flex justify-center items-center h-screen">
        <div id="contactFormModal" class="fixed z-10 inset-0 overflow-y-auto hidden backdrop-blur-sm">
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white w-1/2 p-6 rounded shadow-md">
                    <div class="flex justify-end">
                        <!-- Close Button -->
                        <button id="closeContactForm" class="text-gray-700 hover:text-red-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <h2 class="text-2xl font-bold mb-4">Ulasan</h2>
                    <!-- rating bintang
                    <div x-data="{ currentVal: 3 }" class="flex items-center justify-center gap-1">
                        <label for="oneStar" class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
                            <span class="sr-only">one star</span>
                            <input x-model="currentVal" id="oneStar" type="radio" class="sr-only" name="rating"
                                value="1">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 24 24"
                                fill="currentColor" class="w-10 h-10"
                                :class="currentVal > 0 ? 'text-amber-500' : 'text-slate-700 dark:text-slate-300'">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd">
                            </svg>
                        </label>

                        <label for="twoStars" class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
                            <span class="sr-only">two stars</span>
                            <input x-model="currentVal" id="twoStars" type="radio" class="sr-only" name="rating"
                                value="2">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 24 24"
                                fill="currentColor" class="w-10 h-10 "
                                :class="currentVal > 1 ? 'text-amber-500' : 'text-slate-700 dark:text-slate-300'">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd">
                            </svg>
                        </label>

                        <label for="threeStars"
                            class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
                            <span class="sr-only">three stars</span>
                            <input x-model="currentVal" id="threeStars" type="radio" class="sr-only" name="rating"
                                value="3">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 24 24"
                                fill="currentColor" class="w-10 h-10"
                                :class="currentVal > 2 ? 'text-amber-500' : 'text-slate-700 dark:text-slate-300'">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd">
                            </svg>
                        </label>

                        <label for="fourStars" class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
                            <span class="sr-only">four stars</span>
                            <input x-model="currentVal" id="fourStars" type="radio" class="sr-only" name="rating"
                                value="4">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 24 24"
                                fill="currentColor" class="w-10 h-10"
                                :class="currentVal > 3 ? 'text-amber-500' : 'text-slate-700 dark:text-slate-300'">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd">
                            </svg>
                        </label>

                        <label for="fiveStars" class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
                            <span class="sr-only">five stars</span>
                            <input x-model="currentVal" id="fiveStars" type="radio" class="sr-only" name="rating"
                                value="5">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 24 24"
                                fill="currentColor" class="w-10 h-10"
                                :class="currentVal > 4 ? 'text-amber-500' : 'text-slate-700 dark:text-slate-300'">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd">
                            </svg>
                        </label>
                    </div>
                     end rating bintang -->
                    <form action="{{ url('/ulasan/store')}}" method="post">
                        {{ csrf_field() }}
                        <!--<div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full p-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full p-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                            <textarea id="message" name="message"
                                class="w-full p-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
                            Send Message
                        </button>-->
                        <div class="mb-4 font-[Poppins]">
                            @if(isset($ulasan) && $ulasan->wisata_id)
                            <input
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                type="hidden" name="wisata_id" value="{{ $ulasan->wisata_id }}" readonly>
                            @endif
                        </div>
                        <div class="mb-4 font-[Poppins]">
                            <label for="nama" class="block text-black font-extrabold mb-2">Nama Lengkap <span
                                    class="text-red-600">*</span></label>
                            <input type="text" id="nama_pengulas" name="nama_pengulas"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Masukan nama Anda">

                        </div>
                        <div class="mb-4 font-[Poppins]">
                            <label for="email" class="block text-black font-extrabold mb-2">Email <span
                                    class="text-red-600">*</span></label>
                            <input type="email" id="email_pengulas" name="email_pengulas"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Contoh: janesmith@gmail.com">
                        </div>
                        <div class=" mb-4 font-[Poppins]">
                            <label for="email" class="block text-black font-extrabold mb-2">Rating <span
                                    class="text-red-600">*</span></label>
                            <select type="number" id="rating" name="rating"
                                class="w-full px-4 py-2 border rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Pilih Rating">
                                <option value="">Pilih Rating</option>
                                @for ($i = 1; $i <= 5; $i++) <option value="{{ $i }}">{{ $i }} <i
                                        class="fas fa-star"></i>
                                    </option>
                                    @endfor
                            </select>
                        </div>
                        <div class="mb-4 font-[Poppins]">
                            <label for="pesan" class="block text-black font-extrabold mb-2">Ulasan Anda <span
                                    class="text-red-600">*</span></label>
                            <textarea id="ulasan" name="ulasan" rows="4"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Ketik ulasan Anda disini"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-green-600 text-white px-8 py-2 rounded-lg hover:bg-green-700">Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--ulasan-->

    <script>
    // Notifikasi Pesan Pada Form Kontak
    document.addEventListener('DOMContentLoaded', function() {
        var successMessage = document.getElementById('successMessage');

        if (successMessage) {
            successMessage.style.display = 'block';
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000); // Menyembunyikan pesan setelah 5 detik
        }
        // JavaScript to toggle the modal
        const openContactFormButton = document.getElementById('openContactForm');
        const closeContactFormButton = document.getElementById('closeContactForm');
        const contactFormModal = document.getElementById('contactFormModal');

        openContactFormButton.addEventListener('click', () => {
            contactFormModal.classList.remove('hidden');
        });

        closeContactFormButton.addEventListener('click', () => {
            contactFormModal.classList.add('hidden');
        });
    });

    //Hamburger Menu
    document.getElementById("hamburger").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
            navToggle.item(i).classList.toggle("hidden");
        }
    };
    </script>
</body>

</html>