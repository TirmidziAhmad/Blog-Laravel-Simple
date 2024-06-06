@extends('layouts.app')

@section('content')
<div class="container">
  @foreach ($posts as $post)
  <article class="blog-post">
    <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at }} by <a href="#">Mark</a></p>
    <p>{{ $post->content }}</p>
 </article>
 <a href="{{ url("posts") }}">kembali</a>

@endforeach

@endsection