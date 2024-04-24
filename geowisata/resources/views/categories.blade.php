@extends('partials.navbar')

@section('container')

        <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-dar">
            Post Categories
        </h1>

        @foreach ($categories as $category)
            <ul>
                <li>
                    <p>By. Geowisata <a href="/categories/{{$category->slug}}">{{$category->name}}</a></p>
                    <h5>{{$post["address"]}}</h5>
                </li>
            </ul>

        @endforeach

@endsection
