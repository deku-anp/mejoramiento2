<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function create(){
        return view('cliente.create');
    }

    public function store(Request $request){
        $client= new Client();

        $client->codigo=$request->codigo;
        $client->tfno=$request->tfno;
        $client->domicilio=$request->domicilio;
        $client->num_social=$request->num_social;

        $client->save();
        return $client;
    }

    public function listar(){
        
        $clients = Client::orderBy('id', 'desc')->get();
        return view('cliente.listar', compact('clients'));

    }

    public function edit(Client $client){//Encuentro el Curso
        
        return view('cliente.edit',compact('client'));
    }

    //Update
    public function update(Request $request,Client $client){
        
        $client->codigo=$request->codigo;
        $client->tfno=$request->tfno;
        $client->domicilio=$request->domicilio;
        $client->num_social=$request->num_social;

        $client->save();
        return redirect()->route('client.listar');
    }

    public function show($id){
        
        //$id
        $client = Client::find($id);
        return view('cliente.show',compact('client'));
    }

    public function destroy(Client $client){
        
        $client->delete();
        return redirect()->route('client.listar');
    }

}
