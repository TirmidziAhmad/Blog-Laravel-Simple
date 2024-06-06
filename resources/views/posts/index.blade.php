@extends('layouts.app')

@section('content')
          <div class="container">
        <h1><b>asdfasd</b>Blog</h1>
        <a href="{{ url("posts/create") }}"><button type="button" class="btn btn-success mb-3"> buat postingan</button></a>
        @foreach ($postsTxtIntoArr as $post)
        @php
            $post = explode(",",$post);
        @endphp
        <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">{{ $post[1] }}</h5>
              <p class="card-text">{{ $post[2] }}</p>
              <p class="card-text"><small class="text-body-secondary">Last Updated {{ date('d M Y ', strtotime($post[3])) }}</small></p>
              <a href="{{ url("posts/{$post[0]}") }}"><button type="button" class="btn btn-primary">Selengkapnya</button></a>
            </div>
        </div>
        @endforeach
    </div>
@endsection