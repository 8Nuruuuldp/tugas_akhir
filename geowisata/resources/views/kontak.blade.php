<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Geowisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- Start Navbar -->
    <nav class="flex items-center justify-between px-12 py-4 bg-transparent">
        <img src="#" alt="Bandung Geowisata" width="120" />

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
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Beranda</a>
            <a href="#"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Tentang</a>
            <a href="#"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Rekomendasi</a>
            <a href="/petawisata"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Peta
                Wisata</a>
            <a href="/kontak"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Kontak</a>
        </div>

        @auth
        <a href="/dashboard"
            class="toggle hidden md:flex w-full md:w-auto px-4 py-2 text-right bg-green-700 hover:bg-green-500 text-white md:rounded">Dashboard</a>
        @else
        <a href="/login"
            class="toggle hidden md:flex w-full md:w-auto px-4 py-2 text-right bg-green-700 hover:bg-green-500 text-white md:rounded">Masuk</a>
        @endauth
    </nav>
    <!-- End Navbar -->

    <!-- Start Footer -->
    <section class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <footer class="bg-white h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <div class="mx-auto w-full max-w-screen-xl">
                <div class=" md:mb-0 py-12 px-16">
                    <a href="#" class="flex items-center">
                        <img src="#" class="h-8 me-3" alt="Bandung Geowisata" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-slate-900">Bandung
                            Geowisata</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 px-16 py-8 lg:py-8 md:grid-cols-4">

                    <div>
                        <h2 class="mb-6  font-semibold text-gray-900 uppercase dark:text-slate-900">Kontak Kami</h2>
                        <ul class="text-gray-500 dark:text-gray-600 font-medium">
                            <li class="mb-4">
                                <a href="#" class=" hover:underline">Tentang Kami</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Sosial Media</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6  font-semibold text-gray-900 uppercase dark:text-slate-900">Menu</h2>
                        <ul class="text-gray-500 dark:text-gray-600 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Tentang Bandung</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Rekomendasi</a>
                            </li>
                            <li class="mb-4">
                                <a href="/petawisata" class="hover:underline">Peta Wisata</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            </div>
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400 content-center">© 2024 <a
                    href="#" class="hover:underline">Bandung Geowisata™</a>. All Rights Reserved.</span>
        </footer>
    </section>
    <!-- End Footer -->
    
</body>

</html>