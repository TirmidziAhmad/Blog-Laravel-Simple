@extends('layouts.app')

@section('content')

        <div class="container">
            <h1>Edit Postingan</h1>
            <div class="container">
              @foreach($posts as $post)
              {{-- @php(dd($post)) --}}
              <form method="POST" action="{{ url("posts/$post->id") }}" >
                @csrf
                @method('PUT') 
                </div>
                <div class="mb-3">
                  <label class="form-label" id="title">Judul</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                  <label for="content" class="form-label" id="content" >Konten</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" >{{ $post->content }}"</textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ url("posts") }}" class="btn btn-primary">Kembali</a>
            </form>
            @endforeach
            </div>
        </div>
@endsection
