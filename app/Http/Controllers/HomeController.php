<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\portopolio;
use App\Models\contact;

class HomeController extends Controller
{
    //
    function show(){
        $data['profil'] = profil::first();
        $data['portopolio'] = portopolio::all();
        $data['contact'] = contact::first();
        return view('home',$data);
    }
}
