@extends('admin.layout');
@section('title', 'Pengumuman | Admin Panel FPS ITB 2021');

@section('isi')
    <h1 class="m-5"> Daftar Pengumuman </h5>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Kategori</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">Tanggal Update Terakhir</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $beritas as $brt)
            <tr>
                <th scope="row">{{$brt->id}}</th>
                <td>{{$brt->kategori}}</td>
                <td>{{$brt->judul}}</td>
                <td style="max-width:400px;">{{$brt->isi_berita}}</td>
                <td>{{$brt->updated_at}}</td>
                <td class="d-inline">
                    <a href="/admin-panel/pengumuman/{{$brt->id}}/edit" style="text-decoration:none;" class="badge bg-success">Edit</a>
                    <form action="/admin-panel/pengumuman/{{$brt->id}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" style="text-decoration:none;" class="badge bg-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        
    </tbody>
    </table>
    <a href="{{url('admin-panel/pengumuman/tambah')}}" style="text-decoration:none; margin-left:85%;" class="badge bg-primary">Add New Pengumuman</a>
@endsection