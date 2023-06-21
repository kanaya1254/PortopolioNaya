@extends('template')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mt-5 ">
        <div class="container-fluid">
            <div class="col-md-12">
                <form action="">
                    <div class="mb-3">
                        <label for="" class="form-label">NAMA PORTOPOLIO</label>
                        <input type="text" name="nama_portopolio" id="nama_portopolio" value="{{ $portopolio->nama_portopolio}}" class="form-control" placeholder="masukan nama">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">KATEGORI</label>
                        <input type="text" name="kategori" id="kategori" class="form-control" value="{{ $portopolio->kategori}}" placeholder="masukan kategori">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">DESKRIPSI</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $portopolio->deskripsi }}"placeholder="masukan deskripsi">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">FOTO</label>
                        <input type="file" name="foto" id="foto" class="form-control" placeholder="masukan poto">
                    </div>
                    <div class="my-3">

                        <input type="submit" value="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>
</html>
@endsection
