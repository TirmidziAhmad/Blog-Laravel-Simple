@extends('layouts.app')

@section('content')
          <div class="container">
        <h1><b>asdfasd</b>Blog</h1>
        <a href="{{ url("posts/create") }}"><button type="button" class="btn btn-success mb-3"> buat postingan</button></a>
        @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->content }}</p>
              <p class="card-text"><small class="text-body-secondary">Created at {{ $post->created_at }}</small></p>
              <a href="{{ route('show', $post->id) }}"><button type="button" class="btn btn-primary">Selengkapnya</button></a>
              <a href="{{ route('edit', $post->id) }}"><button type="button" class="btn btn-warning">Edit</button></a>
              <form action="{{  route('destroy', $post->id)  }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
            </div>
        </div>
        @endforeach
    </div>
@endsection