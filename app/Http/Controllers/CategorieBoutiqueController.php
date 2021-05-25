<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorieBoutique;


class CategorieBoutiqueController extends Controller
{   

    public function index()//retoure des donnes()
    {
        $categorieboutique= CategorieBoutique::all();
        return $categorieboutique;
    }

    public function createAndSave(Request $request){
        $data = $request->all();
        $categorieboutique = new CategorieBoutique();
        $categorieboutique->libelle = $data['libelle'];
        $test=$categorieboutique->save();

     if ($test) {
         return response()->json([
            "message"=> "Creation du CategorieBoutique est reussi !!!",
                "donnees"=>$data,
                    ],201);
     }else {
        return response()->json([
            "message"=> "erreur de saisie",
                "donnees"=>$data,
                    ]);
    }
                                

    }

    public function store(Request $request)//save the methode
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function update(Request $request, $id){
        
        $categorieboutique= CategorieBoutique::findOrFail($id);
        $test= $categorieboutique->update($request->all());
        
         if ($test) {
            return response([
                'message'=> 'mise a jour du CategorieBoutique est reussi !!!',
                'donnees'=> $categorieboutique
            ]);
        } else {
            return response([
                'message'=> 'Erreur update data',
                'donnees'=> $categorieboutique
            ]);
        }
    }

    public function destroy(Request $request, $id){

        $categorieboutique= CategorieBoutique::findOrFail($id);
        $test=$categorieboutique->delete();
    
    
        if ($test) {
            return response([
                'message'=> 'Suppresion du CategorieBoutique est reussi',
                'donnees'=> $categorieboutique
            ]);
        } else {
            return response([
                'message'=> 'Erreur Suppresion data',
                'donnees'=> $categorieboutique
            ]);
        }
    
    
    
    
    
    
    }
}
