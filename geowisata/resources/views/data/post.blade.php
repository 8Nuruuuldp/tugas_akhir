@extends('partials.navbar')

@section('container')

@foreach ($posts as $post)

        <h1 class="mb-4 max-w-2xl text-4xl dark:text-dark">
        {{$post->title}}</h1>

        <a href="/categories/{{$post->category->slug}}"></a> {{$post->category->name}}

        <h5>{{$post["address"]}}</h5>

        {!!$post->body !!}

@endforeach

@endsection
