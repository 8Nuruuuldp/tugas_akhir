<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Geowisata</title>
    <!-- Link Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Link Font-awosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <!-- Start Navbar -->
    <nav class="flex items-center justify-between px-12 py-4 bg-transparent shadow-lg">
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

    <!-- Start Content -->
    <section class="content">
        <div class="container mx-auto px-4 py-8">

            <!-- Start Content-Header -->
            <div class="content-header">
                <div class="text-center p-5">
                    <h2 class="text-4xl font-extrabold mb-4 text-green-600">Lorem</h2>
                    <p class="mb-6 text-gray-700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, dolorem quis inventore odio
                        excepturi, laborum repudiandae corporis quasi aliquid consectetur praesentium expedita
                        doloremque
                        laboriosam minima in cumque quibusdam minus id. Iste blanditiis rerum fuga aspernatur suscipit
                        quo
                        laboriosam a porro pariatur magnam repudiandae, obcaecati quaerat, nulla quidem, sapiente
                        voluptatum
                        eaque!
                    </p>
                    <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6 mb-5">
                        <p class="text-gray-700 flex items-center">
                            <i class="fas fa-phone-alt mr-2 text-green-600"></i><strong class="text-green-600">Telepon :
                            </strong> &nbsp; (123) 456-7890
                        </p>
                        <p class="text-gray-700 flex items-center">
                            <i class="fas fa-envelope mr-2 text-green-600"></i><strong class="text-green-600">Email :
                            </strong> &nbsp;
                            Bdg@gmail.com
                        </p>
                        <p class="text-gray-700 flex items-center">
                            <i class="fab fa-twitter mr-2 text-green-600"></i><strong class="text-green-600">Twitter :
                            </strong> &nbsp; @bandunggeowisata
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Content-Header -->

            <!-- Start Content-Body -->
            <div class="content-body">
                <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-extrabold mb-6 text-green-600">Hubungi Kami</h2>
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-500">Nama <span
                                    class="text-red-600">*</span></label>
                            <input type="text" id="nama" name="nama" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-500">Email <span
                                    class="text-red-600">*</span></label>
                            <input type="email" id="email" name="email" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="pesan" class="block text-sm font-medium text-gray-500">Pesan <span
                                    class="text-red-600">*</span></label>
                            <textarea id="pesan" name="pesan" rows="4" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full bg-green-700 text-white font-semibold py-2 px-4 rounded-md shadow hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Content-Body -->
            
        </div>
    </section>
    <!-- End Content -->

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