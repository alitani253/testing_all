<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{   


    public function index()//retoure des donnes()
    {
        $produit= Produit::all();
        return $produit;
    }

    public function createAndSave(Request $request){
        $data = $request->all();
        $produit= new Produit();
        $produit->id_categorie_produits = $data['id_categorie_produits'];
        $produit->libelle = $data['libelle'];
        $produit->code_barre = $data['code_barre'];
        $produit->image = $data['image'];
        $produit->qr_code = $data['qr_code'];
        
        $test=$produit->save();
          
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

    $produit= Produit::findOrFail($id);
    $test =  $produit->update($request->all());
    $produit->libelle=$request->input('libelle');
    
    if ($test) {
            return response([
                'message'=> 'mise a jour de Produit réussi',
                'donnees'=> $produit
            ]);
        } else {

            return response([
                'message'=> 'Erreur update data',
                'donnees'=> $produit
            ]);
        }   
    }



    public function destroy(Request $request, $id){

        $produit= Produit::findOrFail($id);
        $produit->delete();
        return response([
        'message'=> 'suppression de Produit réussi',
        'donnees'=> $produit
        ], 204);
    }




}
