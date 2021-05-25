<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property integer $id
 * @property integer $id_produit_boutique
 * @property integer $id_commande
 * @property double $pu
 * @property integer $qnt
 * @property string $created_at
 * @property string $updated_at
 */

class DetailleCommande extends Model
{
    use HasFactory;
    protected $fillable = ['id_produit_boutique','id_commande','pu','qnt','created_at', 'updated_at'];

    public function ProduitBoutique()
    {
        return $this->hasMany(ProduitBoutique::class);
    }
        
    public function commande(){
        return $this->belongsTo(Commande::class);
    }
}
