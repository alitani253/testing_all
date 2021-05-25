<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property integer $id
 * @property double $prix_vent
 * @property integer $qntstock
 * @property integer $id_boutique
 * @property integer $id_produit
 * @property string $created_at
 * @property string $updated_at
 */

class ProduitBoutique extends Model
{
    use HasFactory;
    protected $fillable = ['prix_vent','qntstock','id_boutique','id_produit','created_at', 'updated_at'];
    
    

    public function boutique(){
        return $this->belongsTo(Boutique::class);
    }

    public function produit(){
        return $this->belongsTo(Produit::class);
    }

   
}
