@extends('layouts.main')

@section('container')
<article>
  <h2>{{ $post->title }}</h2>
  <p> <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
  {{-- <h5>{{ $post["author"] }}</h5> --}}
  {!! $post->body !!}
</article>
    <a class="btn btn-primary mt-4" href="/posts">Back</a>
@endsection