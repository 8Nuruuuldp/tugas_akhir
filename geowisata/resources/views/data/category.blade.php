
@extends('partials.navbar')

@section('container')

        <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-dar">
         {{$category}}
        </h1>

        @foreach ($posts as $post)

            <h1 class="mb-4 max-w-2xl text-4xl dark:text-dark">
                {{$post->title}}</h1>
                <a href="/posts/{{$post->slug}}">{{$post->title}}</a></p>
            <h5>{{$post["address"]}}</h5>

        @endforeach

@endsection
