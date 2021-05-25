<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avis;


class AvisController extends Controller
{
    public function index()//retoure des donnes()
    {
        $avis= Avis::all();
        return $avis;
    }

    public function createAndSave(Request $request){
        $data = $request->all();
        $avis = new Avis();
        $avis->id_client = $data['id_client'];
        $avis->id_livraison = $data['id_livraison'];
        $avis->description = $data['description'];
        $avis->note = $data['note'];
       
        $test=$avis->save();

            
        if ($test) {
            return response()->json([
                "message"=> "Creation du Avis est reussi !!!",
                   "donnees"=>$data,
                       ],201);
         }else {
            return response()->json([
                "message"=> "Message erreur",
                   "donnees"=>$data,
                       ]);
         }
    
    
    
    
    
    
    }

    public function update(Request $request, $id){
        $avis= Avis::findOrFail($id);
        $test =  $avis->update($request->all());
         if ($test) {
             return response([
                 'message'=> 'mise a jour du Avis est reussi !',
                 'donnees'=> $avis
             ]);
         } else {
             return response([
                 'message'=> 'Erreur update data',
                 'donnees'=> $avis
             ]);
         }
         
        
     }

     public function destroy(Request $request, $id){

        $avis= Avis::findOrFail($id);
        $test=$avis->delete();
           
        if ($test) {
            return response([
                'message'=> 'Suppresion du Avis est reussi',
                'donnees'=> $avis
            ]);
        } else {
            return response([
                'message'=> 'Erreur suppresion data',
                'donnees'=> $avis
            ]);
        }
    
    }
}
