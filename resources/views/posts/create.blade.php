@extends('layouts.app')

@section('content')

        <div class="container">
            <h1>Buat postingan baru</h1>
            <div class="container">
                <form method="POST" action="{{ url('posts') }}" >
                @csrf
                </div>
                <div class="mb-3">
                  <label class="form-label" id="title">Judul</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                </div>
                <div class="mb-3">
                  <label for="content" class="form-label" id="content" name="content">Konten</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ url("posts") }}" class="btn btn-primary">Kembali</a>
            </form>
            </div>
        </div>
@endsection
