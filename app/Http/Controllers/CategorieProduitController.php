<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorieProduit;

class CategorieProduitController extends Controller
{    
    public function index()//retoure des donnes()
    {
        $categorieproduit= CategorieProduit::all();
        
    } 

    public function createAndSave(Request $request){
        $data = $request->all();
        $categorieproduit = new CategorieProduit();
        $categorieproduit->libelle = $data['libelle'];
        $categorieproduit->code = $data['code'];
       
           $categorieproduit->save();

                  return response()->json([
                    "message"=> "Creation Categorie produit",
                    'donnees'=>$data,
                                ],201);
 }

    public function update(Request $request, $id){
        
        $categorieproduit= CategorieProduit::findOrFail($id);
        $test=$categorieproduit->update($request->all());
        if ($test) {
            return response([
                'message'=> 'mise a jour Categorie produit',
                'donnees'=> $categorieproduit
            ]);
        } else {
            return response([
                'message'=> 'Erreur update  Categorie produit',
                'donnees'=> $categorieproduit
            ]);
        }
     }

    public function destroy(Request $request, $id){

        $categorieproduit= CategorieProduit::findOrFail($id);
        $categorieproduit->delete();
        return response([
            'message'=> 'suppression Categorie produit',
            'donnees'=> $categorieproduit
        ], 204);
    }

   
}
