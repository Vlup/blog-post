@extends('layouts.main')

@section('container')
  <h1>Halaman Home!</h1>  
  <form action="/api/posts" method="get">
    <button type="submit">API</button>  
  </form> 
@endsection
