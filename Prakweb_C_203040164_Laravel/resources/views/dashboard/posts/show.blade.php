@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h2 class="mb-3">{{ $post->title }}</h2>
        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to my post</a>
        <a href="" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
        <a href="" class="btn btn-danger"><span data-feather="x-circle" class="align-text-bottom"></span> Delete</a>
      {{-- <h5>{{ $post["author"] }}</h5> --}}
      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>
      <a class="btn btn-primary mt-4" href="/posts">Back</a>
    </div>
  </div>
</div>
@endsection