<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *  @property integer $id
 * @property integer $id_boutiquier
 * @property integer $id_categorie_boutique
 *  @property string $nom
 * @property string $email
 * @property string $adresse
 * @property float $tva
 * @property string $longitude
 * @property string $attributes
 * @property string $created_at
 * @property string $updated_at
 */

class Boutique extends Model
{
    use HasFactory;
protected $fillable = ['id_categorie_boutique','id_boutiquier','nom','email','adresse','tva','longitude','attributes','created_at', 'updated_at'];
   
    public function categorieBoutique(){
    return $this->belongsTo(CategorieBoutique::class);
    }   
    
    public function produitBoutique()
        {
    return $this->hasMany(Detaille_Commande::class);
        }
    
    public function users(){
            return $this->belongsTo(User::class);
    }   
                
}
