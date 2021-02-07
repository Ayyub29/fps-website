@extends('admin.layout');
@section('title', 'Edit Pengumuman | Admin Panel FPS ITB 2021');

@section('isi')
    
    <div class="m-3">
             <h5> Edit Pengumuman </h5>
        <form method="POST" action="/admin-panel/pengumuman/{{$beritas->id}}">
            @method('patch')
            @csrf
            <div class="w-25 p-3">
                <label for="kategori" class="form-label" >Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="{{$beritas->kategori}}">
            </div>
            <div class="w-25 p-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{$beritas->judul}}">
            </div>
            <div class="w-75 p-3">
                <label for="Isi" class="form-label">Isi Pengumuman</label>
                <input type="text" class="form-control h-25" id="Isi" name="isi_berita" value="{{$beritas->isi_berita}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection