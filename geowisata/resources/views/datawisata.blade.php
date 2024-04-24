@extends('partials.navbar')

@section('container')

@foreach ($posts as $post)

        <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-dar">
            <a href="posts/{{$post->slug}}">{{$post->title}}</a>
        </h1>
        <p>By. Geowisata <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        <h5>{{$post["address"]}}</h5>


@endforeach

@endsection
