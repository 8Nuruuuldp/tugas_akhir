<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="content">
        <div class="pl-5 pr-5 mt-6 ml-2 mr-4 mb-8">
            <div id="info_wisata">
                <div>
                    @if (session('success'))
                    <div id="successMessage" class="bg-green-500 text-white p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ url('/detailwisata/{id}'), $wisata->id }}" method="POST">
                        @csrf

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
    </section>
</body>
</html>