<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//retoure des donnes()
    {
        $user= User::all();
        return $user;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
     public function createAndSave(Request $request)//save the methode
    {
        $data = $request->all();
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        if ($data['role']) {
            $user->role = $data['role'];
        }else {
            $user->role = 3; // 3 is client by create from app angular 
        }
        if ($user) {
            return response()->json([
                "message"=> "Creation USER est reussi",
                   "donnees"=>$user,
                   $user->save(),
                       ],201);
                           
        } else {
            return response()->json([
                "message"=> "Erreur veuillez ressayer !!!",
                   "donnees"=>$data,
                    ],500);
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
     /*
    
    public function edit($id)
    {
        //
    }
    
    */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        $user= User::findOrFail($id);
       $test =  $user->update($request->all());
        if ($test) {
            return response([
                'message'=> 'mise a jour de User est reussi',
                'donnees'=> $user
            ]);
        } else {
            return response([
                'message'=> 'Erreur update data',
                'donnees'=> $user
            ]);
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::findOrFail($id);
        $user->delete();
        return response([
            'message'=> 'suppression de User est reussi',
            'donnees'=> $user
        ], 200);
    }
}
    

