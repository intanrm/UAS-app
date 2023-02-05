@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Tambah Kategori</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($kategori->count() == 0)
                            <tr>
                                <h4>Tidak Ada Data</h4>
                            </tr>
                        @else
                            @foreach ($kategori as $ktr)
                                <tr>
                                    <td>{{ $ktr->id }}</td>
                                    <td>{{ $ktr->name }}</td>
                                    <td class="d-flex">
                                        <a data-toggle="modal" data-target="#exampleModal{{ $ktr->id }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('kategori.destroy', $ktr->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kategori.store') }}" method="post">
                        @csrf
                        <div class="col form-input">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukan Nama Kategori...">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach ($kategori as $kater)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{ $kater->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('kategori.update',$kater->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="col form-input">
                                <label for="">Nama Kategori</label>
                                <input type="text" name="name" class="form-control" value={{ $kater->name }}>
                            </div>
                            <button type="submit" class="btn btn-warning mt-4">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
