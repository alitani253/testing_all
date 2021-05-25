<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boutique;


class BoutiqueController extends Controller
{

    public function index()//retoure des donnes()
    {
        $boutique= Boutique::all();
        return $boutique;
    }

    public function createAndSave(Request $request){
        $data = $request->all();
        $boutique= new Boutique();
        $boutique->id_categorie_boutique = $data['id_categorie_boutique'];
        $boutique->id_boutiquier = $data['id_boutiquier'];
        $boutique->nom = $data['nom'];
        $boutique->email = $data['email'];
        $boutique->adresse = $data['adresse'];
        $boutique->tva = $data['tva'];
        $boutique->longitude = $data['longitude'];
        $boutique->attributes = $data['attributes'];
        
        $test=$boutique->save();
         if ($test) {
             return response()->json([
                  "message"=> "Creation du Boutique est reussi !",
                        "donnees"=>$data,
                           ],201);
        }else {
            return response()->json([
             "message"=> "Message erreur saisie",
                "donnees"=>$data,
                 ]);
        }                      
    }

    public function store(Request $request)//save the methode
    {
        //
    }

    public function show()
    {
        
    }

    public function update(Request $request, $id){
        $boutique= Boutique::findOrFail($id);
        $test=$boutique->update($request->all());
        if ($test) {
            return response([
                'message'=> 'mise a jour du Boutique est reussi !!!',
                'donnees'=> $boutique
            ]);
        } else {
            return response([
                'message'=> 'Erreur update data',
                'donnees'=> $boutique
            ]);
        }
    }

    public function destroy(Request $request, $id){

        $boutique= Boutique::findOrFail($id);
        $test= $boutique->delete();
       
       
       if ($test) {
            return response([
                'message'=> 'Suppresion du Boutique est reussi !',
                'donnees'=> $boutique
            ]);
        } else {
            return response([
                'message'=> 'Erreur Suppresion data',
                'donnees'=> $boutique
            ]);
        }    
    
    }

}
