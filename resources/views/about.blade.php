@extends('layouts.main')

@section('container')
  <h1>About Us</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $email }}</p>
  <img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle">
@endsection






