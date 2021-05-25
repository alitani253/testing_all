<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()//retoure des donnes()
    {
        $commande= Commande::all();
        return $commande;
    }

    public function createAndSave(Request $request){
        $data = $request->all();
        $commande= new Commande();
        $commande->id_client = $data['id_client'];
        $commande->id_livreur = $data['id_livreur'];
        $commande->date_commande = $data['date_commande'];
        $commande->num_commande = $data['num_commande'];
        $test = $commande->save();
          
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
        $commande= Commande::findOrFail($id);
       $test =  $commande->update($request->all());
        if ($test) {
            return response([
                'message'=> 'mise a jour api_crud reussi',
                'donnees'=> $commande
            ]);
        } else {
            return response([
                'message'=> 'Erreur update data',
                'donnees'=> $commande
            ]);
        }
        
       
    }
    public function destroy(Request $request, $id){

        $commande= Commande::findOrFail($id);
        $commande->delete();
        return response([
            //'message'=> 'suppression api_crud'
            'donnees'=> $commande
        ], 204);
    }

}
