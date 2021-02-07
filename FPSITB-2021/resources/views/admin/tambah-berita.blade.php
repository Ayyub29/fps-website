@extends('admin.layout');
@section('title', 'Tambah Pengumuman | Admin Panel FPS ITB 2021');

@section('isi')
    
    <div class="m-3">
             <h5> Tambah Pengumuman Baru </h5>
        <form method="POST" action="{{url('admin-panel/pengumuman')}}">
            @csrf
            <div class="w-25 p-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="{{old(kategori)}}">
            </div>
            <div class="w-25 p-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{old(judul)}}">
            </div>
            <div class="w-75 p-3">
                <label for="Isi" class="form-label">Isi Pengumuman</label>
                <input type="text" class="form-control h-25" id="Isi" name="isi_berita" value="{{old(isi_berita)}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection