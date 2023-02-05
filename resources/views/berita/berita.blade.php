@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah Berita</a>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if ($berita == null)
            <tr >
              <h1>BELUM ADA BERITA</h1>
            </tr>
            @else
            
            <tr>
            @foreach ($berita as  $brt)
              <td>1</td>
              <td>{{ $brt->judul }}</td>
              @if ($brt->kategori_id != $kat)
              <td style="color: red">Silahkan Isi Ulang Data Kategori</td>
                
              @else
              <td>{{ $brt->kategori->name }}</td>
              @endif
              <td class="d-flex px-2">
                <a href="{{ route('Hberita',$brt->id) }}" class="btn btn-success">Lihat</a>
                <a href="{{ route('berita.show', $brt->id) }}" class="btn btn-warning">Edit</a>

                <form action="{{ route('berita.destroy',$brt->id) }}" method="post">
                  <button type="submit"  class="btn btn-danger">Hapus</button></form>
              </td>
            </tr>
              
            @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection