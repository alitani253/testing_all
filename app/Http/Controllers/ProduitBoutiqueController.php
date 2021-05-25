<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\ProduitBoutique;
use Illuminate\Http\Request;

class ProduitBoutiqueController extends Controller
{
    public function index()//retoure des donnes()
    {
        $produitboutique= ProduitBoutique::all();
        return $produitboutique;
    }

    public function createAndSave(Request $request){
        $data = $request->all();
        $produitboutique= new ProduitBoutique();
        $produitboutique->prix_vent = $data['prix_vent'];
        $produitboutique->qntstock = $data['qntstock'];
        $produitboutique->id_boutique = $data['id_boutique'];
        $produitboutique->id_produit = $data['id_produit'];
        $test = $produitboutique->save();
          
         if ($test) {
            return response()->json([
                "message"=> "Creation d'un Api reussi",
                   "donnees"=>$data,
                       ],201);
         }else {
            return response()->json([
                "message"=> "Message erreur",
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
        $produitboutique= ProduitBoutique::findOrFail($id);
       $test =  $produitboutique->update($request->all());
        if ($test) {
            return response([
                'message'=> 'mise a jour api_crud reussi',
                'donnees'=> $produitboutique
            ]);
        } else {
            return response([
                'message'=> 'Erreur update data',
                'donnees'=> $produitboutique
            ]);
        }
        
       
    }
    public function destroy(Request $request, $id){

        $produitboutique= ProduitBoutique::findOrFail($id);
        $produitboutique->delete();
        return response([
            //'message'=> 'suppression api_crud'
            'donnees'=> $produitboutique
        ], 204);
    }

}
