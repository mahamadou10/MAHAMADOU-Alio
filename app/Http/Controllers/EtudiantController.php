<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantController extends Controller
{

    public function create()
    {
        //
    }


    //fonction pour ajouter un  etudiant
    public function add(Request $request)
    {
         $this->validate($request, [
            'nom'            =>      'required',
            'prenom'         =>      'required'

        ]);
        Etudiant::create($request->all());

        //return home
        return back()->with('status',trans('etudiant.msgenregistrement'));
    }

    

    //fonction pour voir un etudiant
    public function show($id)
    {
        $etudiant = Etudiant::findorfail($id);

        return view('etudiant.show',compact('etutudiant'));
    }


    //fonction pour editer un etudiant
    public function edit($id)
    {
        $etudiant = Etudiant::findorfail($id);
        
        return view('etudiant.edit',compact('etudiant')); 
    }

    

    //fonction pour updater un etudiant
    public function update(Request $request, $id)
    {
        $etudiant           =   Etudiant::findorfail($id);
        $etudiant->nom      =   $request->input('nom');
        $etudiant->prenom   =   $request->input('prenom');
        $etudiant->save();

        return back()->with('status',trans('etudiant.msgmiseajourok')); 
    }

    
    //fonction pour supprimer un etudiant
    public function destroy($id)
    {
        //
    }
}
