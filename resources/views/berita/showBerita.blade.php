@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body ">
                <form action="{{ route('berita.update', $berita->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col">
                            <label for="">Judul Berita</label>
                            <input name="judul" placeholder="Masukan Judul Berita.." class="form-control"
                                value="{{ $berita->judul }}" />
                        </div>
                        <div class="col">
                            <label for="">Kategori</label>
                            <Select class="form-control" name="kategori_id" required>
                                @if ($kategori->count() == 0)
                                    <option value="">SILAHKAN ISI MENU KATEGORI DULU</option>
                                @else
                                    @if ($berita->kategori_id != $kat)
                                        <option style="color: red" value="">Silahkan Isi Ulang Data Kategori</option>
                                    @else
                                        <option value="{{ $berita->kategori_id }}">{{ $berita->Kategori->name }}</option>
                                    @endif
                                    @foreach ($kategori as $kat)
                                        <option value="{{ $kat->id }}">{{ $kat->name }}</option>
                                    @endforeach
                                @endif

                            </Select>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <Textarea id="editor" name="deskripsi" class="form-control ckeditor">{{ $berita->deskripsi }}</Textarea>
                    </div>

                    <div class="col mt-4">
                        <button class="btn btn-warning" type="submit">Update Berita</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
