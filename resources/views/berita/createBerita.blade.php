@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body ">
                <form action="{{ route('berita.store') }}" method="post">
                    @csrf
           
                        <div class="row">
                            <div class="col">
                                <label for="">Judul Berita</label>
                                <input name="judul" placeholder="Masukan Judul Berita.." class="form-control" />
                            </div>
                            <div class="col">
                                <label for="">Kategori</label>
                                <Select class="form-control" name="kategori_id">
                                    @if ($kategori->count() == 0 )
                                    <option value="">SILAHKAN ISI MENU KATEGORI DULU</option>
                                    @else
                                    @foreach ($kategori as $kat)
                                    <option value="{{ $kat->id }}">{{ $kat->name }}</option>
                                    @endforeach
                                        
                                    @endif
                                   
                                </Select>
                            </div>
                        </div>
                        <div class="col mt-4">
                            <Textarea id="editor" name="deskripsi" class="form-control ckeditor"></Textarea>
                        </div>
                        
                        <div class="col mt-4">
                            <button class="btn btn-primary" type="submit">Simpan BErita</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
