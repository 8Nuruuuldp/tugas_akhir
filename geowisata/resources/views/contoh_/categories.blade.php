@extends('partials.navbar')


@section('container')

<section class="bg-[url('https://s3-alpha-sig.figma.com/img/de5b/5546/050cf70a4ca38cffc613cccedce5cd85?Expires=1714953600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=kVyEowSJavZqStt83zEkH2UC1MIE6aZNN-Ln5rrbLUIZP~iR7en6s4jhaSFIFBO-qd0WwbsxyDmUz3Mimwn95r33knsG-NPhx6IHriqpueXAAEOMOmlj8itD9fcHrVPUBqtA9Ywch~vuS6~OCd3FNELiSKFyM3HA7UahbcYK5Bo63zxvWMxHZmX9Kss5jwWuWsa6lQO-GDZudhFsMX1pco7TYmZJ67xPgiNcj9g6fZ4LtozKJUh9wZfqjz9O~0fefznEgB5OAirPOqotKAMPteOFCHZG6VjJBnTf18CO8fckqt66dnsNOPcmOanmOr9BbAudVFj1~8oMMuVAH2IV6w__')]
flex justify-center items-center ">
    <div class="text-center grid py-8 px-12 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 ">
        <div class="place-self-center text-center mr-auto">
            <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">BANDUNG</h1>
            <h4 class="mb-4 max-w-2xl text-3xl font-extrabold leading-none md:text-3xl xl:text-4xl dark:text-white">KOTA SEJUTA PESONA</h4>
            <p class="items-center text-center mb-6 max-w-2xl font-light text-white lg:mb-8 md:text-lg lg:text-xl dark:text-white">
            Ayo jelajahi kota Bandung dan temukan berbagai pesonanya. Kamu dapat menekan tombol dibawah untuk menemukan berbagai objek wisata yang menarik di kota Bandung
            </p>
            <a href="/petawisata" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center bg-white text-gray-900 rounded-lg border border-gray-300 hover:bg-grey-100 focus:ring-4 focus:ring-gray-100 dark:text-dark dark:border-white dark:hover:bg-grey-700 dark:focus:ring-grey-800">
                Temukan Tempat Wisata
            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
</section>


        <h1 class="mb-5 text-center font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-dark">
            Kategori Wisata
        </h1>

        @foreach ($categories as $category)
            <ul class="max-w-2xl text-4xl dark:text-dark">
                <li>
                    <a href="/categories/{{$category->slug}}">{{$category->name}}</a>
                </li>
            </ul>

        @endforeach

@endsection
