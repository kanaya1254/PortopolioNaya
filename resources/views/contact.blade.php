@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

                <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <form action="{{ $action }}">
                        <div class="mb-3">
                            <label for="form" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $nama }}" placeholder="Masukan nama">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control" value="{{$email}}" placeholder="masukan email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">No Hp</label>
                            <input type="text" name="no_hp" id="no_hp"  class="form-control" value="{{$no_hp}}" placeholder="masukan no hp">
                        </div>
                    <div class="my-3">

                        <input type="submit" value="simpan" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
        
    </div>
</section>

    
</body>
</html>
@endsection