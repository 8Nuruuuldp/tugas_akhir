@extends('partials.navbar')

@section('container')


        <h1 class="mb-4 max-w-2xl text-4xl dark:text-dark">
        {{$post->title}}</h1>

        <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}}</a>

        <h5>{{$post["address"]}}</h5>

        {!!$post->body !!}


@endsection
