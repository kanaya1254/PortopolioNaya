@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORTOPILIO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            font-family: Arial;
            background-color: rgb(224, 187, 228);
            
        }
        
    </style>
</head>
<body>
  <form action="{{ url('home') }}" method="post" enctype="multipart/form-data">
    @csrf
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #957DAD;">
        <div class="container">
          <a class="navbar-brand" href="#">Kanaya auliya</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#profil">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#portopolio">Portopolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a href="template" class="nav-link active">keluar</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--akhir navbar-->

      <!--home-->
      <section id="profil" class="pt-3">
        <div class="container-fluid p-3 mt-3" style="background-color: #957DAD">
          <h3 class="fw-bold mb-3 text-center text-white">PROFIL</h3>
          <div class=" text-center p-5">
          <img src="/storage/{{ $profil->foto }}" alt="" width="200" height="200" class="img-thubnail rounded-circle">
                <h2 class="fw-bold mt-3">{{ $profil->nama}}</h2>
                <p class="fw-bold fs-4 mt-2">{{$profil->ttl}}</p>
          </div>
          
        </div>
      </section>
      <!--akhir home-->
      <!--about me-->

      <section id="about" class="pt-5">
        <div class="container">
         <div class="pt-5 text-center" style="background-color: #957DAD	">
          <h3 class="fw-bold mb-3 text-white">ABOUT ME</h3>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <p>{{$profil->about}}</p>
            </div>
          </div>
         </div>
        </div>

      </section>
      <!--akhir about me-->
      <!-- <section id="about" class="pt-5">
        <div class="container">
          <div class="pt-5 text-center">
            <h3 class="fw-bold mb-3">About Me</h3>
              <div class="row justify-content-center">
                <div class="col-md-4">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas pariatur itaque doloremque voluptas nesciunt non porro fugit nisi fuga quam labore assumenda a ad tenetur, sed laborum expedita sapiente inventore?</p>
                </div>
                <div class="col-md-4">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat totam molestias corporis rerum optio culpa aspernatur inventore officiis incidunt minus tempora excepturi amet aperiam, ut, velit autem fugit dicta tenetur.</p>
                </div>
              </div>
          </div>
        </div> -->
      <!-- </section> -->
      <!--project-->
        <section id="portopolio" class="pt-5">
          <div class="container">
            <div class="p-5 text-bg- text-center" style="background-color: #957DAD	">
              <h3 class="fw-bold mb-3 text-white">PORTOPOLIO</h3>
              <div class="row justify-content-center">
              @foreach ($portopolio as $item)
                <div class="col-md-4 mb-3 text-center">
                  <div class="card mt-5 ms-4" style="width: 18rem;">
                    <img src="/storage/{{$item->foto}}" class=" card-img-top" alt="Project 1">
                    <div class="card-body">
                      <p class="card-text ">{{$item->deskripsi}}.</p>
                    </div>
                  </div>
                </div> 
              @endforeach              
        </section>
      <!--akhir project-->
      <!--awal kontak-->
      <section id="contact" class="pt-5" >
        <div class="container p-5" style="background-color: #957DAD	">
          <h2 class="text-center fw-bold text-white">CONTACT</h2>
          <div class="row justify-content-center" >
            <form action="" method="post" >
              <div class="md-6 text-white">
                <label for="" class=" fw-bold" >NAMA</label>
                <input type="text" name="nama" class="form-control" value="{{$contact->nama}}">
              </div></br>
              <div class="md-3 mb-3 mt-4 text-white">
                <label for="" class="fw-bold ">EMAIL</label>
                <input type="text" name="email" class="form-control" value="{{$contact->email}}">
              </div>
              <div class="md-6 mt-3 text-white">
                <label for="" class=" fw-bold">NO HP</label>
                <input type="text" name="no_hp" class="form-control" value="{{$contact->no_hp}}" >
              </div>
            </form>
        </div>
      </section>
      <!--AKHIR KONTAK-->
      
      <!--footer-->
      <div class="container-fluid" 	style="background-color : #957DAD">
        <footer class="py-3 my-3" border-top>
          <p class="text-center">&copy; 2023 <a href="" target="_blank" class="fw-bold text-decoration-none">Kanaya Auliya</a></p>
        </footer>
      </div>
      <!--akhir footer-->
    </form>
</body> 
<script src="js/bootstrap.bundle.js"></script>
</html>
@endsection
