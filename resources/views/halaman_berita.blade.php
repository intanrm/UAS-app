<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Berita</title>
</head>

<body>

    <div class="container-fluid mt-2">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">{{ $berita->judul }}</h2>
                </div>
                <div class="card-body col-lg-12">
                    <h3 style="color:blue">Kategori Berita:
                        @if ($berita->kategori_id != $kat)
              <P style="color: red">Tidak Ada Kategori</P>
                
              @else
              <P>{{ $berita->Kategori->name }}</P>
              @endif
                        
                    </h3>
                    <div class="container mx-4">
                        <p>{!! html_entity_decode($berita->deskripsi) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
