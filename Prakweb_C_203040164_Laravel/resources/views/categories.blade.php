@extends('layouts.main')

@section('container')
  <h1 align="center" class="mb-5">Post Categories</h1>


  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4">
          <a href="/categories/{{ $category->slug }}">
            <div class="card text-bg-dark">
              <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
              <div class="card-img-overlay">
                <h5 class="card-title" style="background-color: rgba(0, 0, 0, 0.5)">{{ $category->name }}</h5>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>

@endsection



