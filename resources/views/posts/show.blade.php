@extends('layouts.app')

@section('content')
<div class="container">
  <article class="blog-post">
    <h2 class="display-5 link-body-emphasis mb-1">{{ $view_data[1] }}</h2>
    <p class="blog-post-meta">{{ date('d M Y ', strtotime($view_data[3])) }} by <a href="#">Mark</a></p>
    <p>{{ $view_data[2] }}</p>
 </article>
 <a href="{{ url("posts") }}">kembali</a>

@endsection