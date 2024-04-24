@extends('partials.navbar')

@section('container')

@foreach ($posts as $post)

        <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-dar">
        {{$post->title}}</h1>

        <p>By. Geowisata {{$post->category->name}}</p>

        <h5>{{$post["address"]}}</h5>

        {!!$post->body !!}

@endforeach

@endsection
