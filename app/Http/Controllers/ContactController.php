<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;


class ContactController extends Controller
{
    //
    function show(){
        $contact = contact::first();
        if ($contact){
            $data =[
                'nama' => $contact->nama,
                'email' => $contact->email,
                'no_hp' => $contact->no_hp,
                'action' => '/contact/update/'.$contact->id
            ];
            return view('contact', $data );
    }else{
        $data = [
            'nama'=>'',
            'email'=>'',
            'no_hp'=>'',
            'action' => 'contact/create/'
        ];
        return view('contact', $data);
    }
}
   

function create(Request $req){
    $validate = $this->validate($req,[
        'nama' => 'required|string',
        'email' => 'required|string',
        'no_hp' => 'required|string'

    ]);
    contact::create($validate);

    return redirect('contact');
}
function hapus($id){
    contact::where('id',$id)->delete();
    return redirect('contact');
}
function edit($id){
    $data['contact'] = contact::find($id);
    $data['action'] =url('contact/update').'/'.$data['contact']->id;
    $data['tombol'] ="Update";
    return view('contact',$data);
}

function update(Request $req){
    $data = contact::where('id',$req->id)->first();
    contact::where('id',$req->id)->update([
            'nama' => $req->nama,
            'email' => $req->email,
            'no_hp' => $req->no_hp
    ]);


    return redirect('contact');
}


}
