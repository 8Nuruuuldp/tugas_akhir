@extends('partials.navbar')

@section('container')

@foreach ($posts as $post)
 <article class="mb-5 border-bottom">
        <h1 class="mb-4 max-w-2xl text-4xl dark:text-dark"
        class="text-decoration-none">
            <a href="posts/{{$post->slug}}">{{$post->title}}</a>
        </h1>

        <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a>
        <h5>{{$post["address"]}}</h5>

        <a href="posts/{{$post->slug}}">Selengkapnya</a>
</article>

@endforeach

@endsection
