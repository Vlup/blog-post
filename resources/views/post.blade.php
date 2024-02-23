@extends('layouts.main')

@section('container')
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h2 class="mb-3">{{ $post->title }}</h2>
        <p>
          By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in 
          <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>
        @if ($post->image)
          <div style="max-height: 400px; overflow:hidden;">
            <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">    
          </div>
        @else
          <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
        @endif
        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
        <h5 class="mb-5 pb-3"><a href="/posts" class=" text-decoration-none" >Back to Posts</a></h5>
      </div>
    </div>
  </div>
@endsection