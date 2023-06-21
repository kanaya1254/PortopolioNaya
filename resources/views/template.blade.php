<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
         body{
        
            background-color: rgb(224, 187, 228);

            
        }
        
    </style>
</head>
<body>
<div class="navbar navbar-expand-lg navbar-dark shadow  text-white" style="background-color: #957DAD">
  
    <div class=" container-fluid">
    𝙺𝚊𝚗𝚊𝚢𝚊 𝙰𝚞𝚕𝚒𝚢𝚊
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-label="toggle-navigation" aria-controls="mynavbar" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">

            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                    <a href="home" class="nav-link {{Request::segment(1)=='home'?'active':''}}">home</a>
                </li>
                <li class="nav-item">
                    <a href="profil" class="nav-link {{Request::segment(1)=='profil'?'active':''}}">profil</a>
                </li>
                <li class="nav-item">
                    <a href="portopolio" class="nav-link {{Request::segment(1)=='portopolio'?'active':''}}">portopolio</a>
                </li>
                <li class="nav-item">
                    <a href="contact" class="nav-link {{Request::segment(1)=='contact'?'active':''}}">contact</a>
                </li>
                <li class="nav-item">
                <a href="user/logout" class="nav-link">keluar</a>
                </li>
            </ul>
        </div>
            </div>
        </div>
          <div class="container mt-4">
            @yield('content')
          </div>
    </body>
</html>
<script src="{{asset('js/bootstrap.min.js')}}"></script> 

