@extends('layouts.main')

@section('container')
  <h1 class="mb-5">Post Categories</h1>

  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4 mb-4">
          <a href="/posts?category={{ $category->slug }}" class="text-decoration-none">
            <div class="card bg-dark text-white">
              @if ($category->image)
                <img class="img-fluid" src="{{ asset('storage/' . $category->image) }}" class="card-img" alt="{{ $category->name }}">  
              @else
                <img src="https://source.unsplash.com/200x100?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
              @endif
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title flex-fill text-center py-3 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
              </div>
            </div>
          </a>
        </div>
      @endforeach 
    </div>
  </div>
@endsection
