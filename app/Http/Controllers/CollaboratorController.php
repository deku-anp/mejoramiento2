<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;

use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    //

    public function create(){
        return view('colaborador.create');
    }

    public function store(Request $request){
        $collaborator= new Collaborator();

        $collaborator->nif=$request->nif;
        $collaborator->nombre=$request->nombre;
        $collaborator->save();
        return $collaborator;
    }

    public function listar(){
        
        $collaborators = Collaborator::orderBy('id', 'desc')->get();
        return view('colaborador.listar', compact('collaborators'));

    }

    public function edit(Collaborator $collaborator){//Encuentro el Curso
        
        return view('colaborador.edit',compact('collaborator'));
    }

    //Update
    public function update(Request $request,Collaborator $collaborator){
        
        $collaborator->nif=$request->nif;
        $collaborator->nombre=$request->nombre;

        $collaborator->save();
        return redirect()->route('collaborator.listar');
    }

    public function show($id){
        
        //$id
        $collaborator = Collaborator::find($id);
        return view('colaborador.show',compact('collaborator'));
    }

    public function destroy(Collaborator $collaborator){
        
        $collaborator->delete();
        return redirect()->route('collaborator.listar');
    }
}
