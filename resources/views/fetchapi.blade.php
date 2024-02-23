@extends('layouts.main')

@section('container')
  <h1>Fetch!</h1>  
@endsection

<script>
    $url = "http://127.0.0.1:8000/api/v1/posts";
    fetch($url)
    .then((response) => console.log(response.json()))
</script>
