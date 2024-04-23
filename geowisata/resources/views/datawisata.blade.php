@extends('partials.navbar')

@section('container')

@foreach ($posts as $post)
    <article class="mb-5">
        <h1>
            <a href="posts/{{$post["slug"]}}">{{$post["title"]}}</a>
        </h1>
        <h5>{{$post["address"]}}</h5>
    </article>
@endforeach

@endsection
