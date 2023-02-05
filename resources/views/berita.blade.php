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
                    <h1 class="text-center">BERITA TERKINI</h1>
                </div>
                <div class="card-body col-lg-12">
                    <div class="row justify-content-center">
                        @foreach ($berita as $brt)
                            
                        <div class="card mx-4 my-4" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $brt->judul }}</h5>
                                <p class="card-text"> {!! html_entity_decode(substr($brt->deskripsi,0,60)) !!} ...</p>
                                <a href="{{ route('Hberita',$brt->id) }}" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
