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

    <div class="w-1/2 px-2">
        <button id="openContactForm"
            class="w-full bg-blue-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-300 dark:hover:bg-gray-600">Berikan
            Ulasan
        </button>
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
                            <input
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                type="hidden" name="wisata_id" value="{{ $wisata->id }}" readonly>

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