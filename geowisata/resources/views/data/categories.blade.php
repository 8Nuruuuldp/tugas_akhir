@extends('partials.navbar')

@section('container')

        <h1 class="mb-4 max-w-2xl text-4xl dark:text-dark">
            Kategori Wisata
        </h1>

        @foreach ($categories as $category)
            <ul>
                <li>
                    <a href="/categories/{{$category->slug}}">{{$category->name}}</a>
                </li>
            </ul>

        @endforeach

@endsection
