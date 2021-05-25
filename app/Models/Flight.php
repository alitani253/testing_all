<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'my_flights';
    protected $primaryKey = 'flight_id';
    public $timestamps = false;//pour desactiver le  created_at et le updated_at
    protected $dateFormat = 'U';//Cette propriété détermine comment les attributs de date sont stockés dans la base de données ainsi que leur format lorsque le modèle est sérialisé dans un tableau ou JSON
    const CREATED_AT = 'creation_date';//pour associer la date et l'heure de la personne qui est saisi
    const UPDATED_AT = 'updated_date';//pour associer la date et l'heure de la personne qui est saisi
    protected $connection = 'mysql';//Si vous souhaitez spécifier une connexion de base donnée différente
    protected $attributes = [
        'delayed' => false,];//Si vous souhaitez définir les valeurs par défaut
    /********************************************CRUD IN ELOQUENT******************************************************* */    
    
    
    




}
