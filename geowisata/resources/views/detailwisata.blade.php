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

    <!-- Link Icon Footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <!-- navbar -->
    <nav class="sticky top-0 z-5 bg-white">
        <div class="flex flex-wrap items-center justify-between px-12 py-4">
            <img src="/img/logo.svg" alt="Bandung Geowisata" width="100" />

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

    <!--content-->
    <section>
        <div class="container mx-auto w-full max-w-screen-xl px-4 py-8 font-[Poppins]">
            <div class="flex flex-wrap">
                <div class="mr-10 ml-10 flex items-center">
                    @if ($wisata)
                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="">
                                <img class="w-full h-full rounded-2xl

" src="{{ asset('img/' . $wisata->gambar) }}"
                                    alt="Foto Objek Wisata">
                                <p class="text-center ">{{ $wisata->nama_tempat }}</p>
                                <p class="text-center mt-2 mb-4">Sumber : {{ $wisata->sumber }}</p>
                            </div>
                            <div class="space-y-1">
                                <h1 class="text-gray-900 font-bold text-5xl mt-5 border-t">
                                    {{ $wisata->nama_tempat }}
                                </h1>
                                <h3 class="text-gray-900 font-regular text-lg">{{ $wisata->alamat }}</h3>
                                <div class="border-t border-b">
                                    <h3 class="font-bold">Deskripsi:</h3>
                                    <p>{{ $wisata->deskripsi }}</p>
                                </div><br>
                                <div class="border-b">
                                    <h3 class="font-bold">Waktu Operasional:</h3>
                                    <p>{{ $wisata->waktu_operasional }}</p>
                                </div><br>
                                <div>
                                    <h3 class="font-bold border-b">Cari info lebih banyak tentang
                                        {{ $wisata->nama_tempat }}?</h3>
                                    <p>{{ $wisata->link_pendukung }}</p>
                                </div>
                                <div class="flex">
                                    <button
                                        class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:duration-300 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        <a
                                            href="https://www.google.com/maps/dir/?api=1&origin=Current+Location&destination={{ $wisata->latitude }},{{ $wisata->longitude }}">
                                            Tunjukkan Arah </a>
                                    </button>
                                    <button id="openContactForm"
                                        class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:duration-300 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-4">
                                        Beri Ulasan
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- MODAL --}}
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

                    <form action="{{ url('/ulasan/store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="mb-4 font-[Poppins]">
                            <input
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                type="hidden" name="wisata_id" value="{{ $wisata->id }}" readonly>

                        </div>
                        <div class="mb-4 font-[Poppins]">
                            <label for="nama" class="block text-black font-extrabold mb-2">Nama Lengkap
                                <span class="text-red-600">*</span></label>
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
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }} <i
                                            class="fas fa-star"></i>
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-4 font-[Poppins]">
                            <label for="pesan" class="block text-black font-extrabold mb-2">Ulasan Anda
                                <span class="text-red-600">*</span></label>
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
        {{-- END MODAL --}}
    </section>

    <!--ulasan-->




    <!--data ulasan-->
    <section class="mt-20 mr-20 ml-20">
        <h2 class="text-3xl text-gray-800 text-bold">Ulasan</h2>
        <hr class="border-t border-gray-300 my-4 animate-pulse">
        <div>
            @foreach ($ulasan as $ulasan)
                <div class="bg-white p-6 rounded-lg shadow-md mb-4">
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/50" alt="avatar" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <h2 class="text-lg font-medium text-gray-800">{{ $ulasan->nama_pengulas }}</h2>
                            <div class="flex items-center">
                                <svg class="fill-current text-yellow-500 w-4 h-4 mr-1" viewBox="0 0 20 20">
                                    <path
                                        d="M10 12.14l9.9-4.57a1 1 0 0 0 0-1.13L10 4.86A1 1 0 0 0 9.01 4L8 3H7a1 1 0 0 0 0 2h1a1 1 0 0 0 .99 1L7 8.99a1 1 0 0 0 0 1.13L9.9 12l-7.99 3.57a1 1 0 0 0 0 1.13L10 19.14A1 1 0 0 0 11 19h8a1 1 0 0 0 1-1v-2a1 1 0 0 0-.99-1z" />
                                </svg>
                                <span class="text-gray-700">{{ $ulasan->rating }}</span>
                            </div>
                            <p class="text-gray-600 mt-2">
                                {{ $ulasan->ulasan }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-white font-[Poppins] p-2">
        <div class="container mx-auto w-full max-w-screen-xl px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Column 1 -->
                <div>
                    <a href="#beranda" class="flex items-center mb-3">
                        <img src="/img/logo.svg" class="h-14 mr-3" alt="Bandung Geowisata" />
                    </a>
                    <p class="text-gray-700 text-sm">
                        Bandung Geowisata adalah layanan yang menyediakan informasi dan titik lokasi mengenai objek
                        wisata yang ada di kota bandung.
                    </p>
                </div>
                <!-- Column 2 -->
                <div>
                    <h2 class="mb-5 font-semibold text-gray-900">Kontak Kami</h2>
                    <ul class="text-gray-700 text-sm">
                        <li class="mb-3">
                            <a href="mailto:bgeowisata@gmail.com" target="_blank" class="hover:underline"><i
                                    class="fas fa-envelope"></i>&nbsp; Email: bgeowisata@gmail.com</a>
                        </li>
                        <li class="mb-3">
                            <a href="https://wa.me/085182619614?text=Hallo%20Admin%20mohon%20bantu%20Saya%20perihal"
                                target="_blank" class="hover:underline"><i class="fas fa-phone"></i>&nbsp; Phone
                                Number:
                                +62 851-8261-9614</a>
                        </li>
                    </ul>
                </div>
                <!-- Column 3 -->
                <div>
                    <h2 class="mb-5 font-semibold text-gray-900">Media Sosial</h2>
                    <ul class="text-gray-700 text-sm">
                        <li class="mb-3">
                            <a href="https://www.instagram.com/bgeowisata" target="_blank" class="hover:underline"><i
                                    class="fab fa-instagram"></i>&nbsp; Instagram: @bgeowisata</a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.twitter.com/bgeowisata" target="_blank" class="hover:underline"><i
                                    class="fab fa-twitter"></i>&nbsp; Twitter: @bgeowisata</a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.facebook.com/profile.php?id=61560469682604&mibextid=ZbWKwL"
                                class="hover:underline"><i class="fab fa-facebook"></i>&nbsp; Facebook: Bandung
                                Geowisata</a>
                        </li>
                    </ul>
                </div>
                <!-- Column 4 -->
                <div>
                    <h2 class="mb-5 font-semibold text-gray-900">Menu Cepat</h2>
                    <ul class="text-gray-700 text-sm">
                        <li class="mb-3">
                            <a href="/" class="hover:underline">Beranda</a>
                        </li>
                        <li class="mb-3">
                            <a href="/#tentang" class="hover:underline">Tentang</a>
                        </li>
                        <li class="mb-3">
                            <a href="/#rekomendasi" class="hover:underline">Rekomendasi</a>
                        </li>
                        <li class="mb-3">
                            <a href="/#petawisata" class="hover:underline">Peta Wisata</a>
                        </li>
                        <li class="mb-3">
                            <a href="/#kontak" class="hover:underline">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-8 border-gray-200" />
            <div class="text-center">
                <span class="text-sm text-gray-500">© 2024 <a href="#" class="hover:underline">Bandung
                        Geowisata™</a>.
                    All Rights Reserved.</span>
            </div>
        </div>
    </footer>


    <script>
        // Notifikasi Pesan Pada Form Ulasan
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
