<?php

namespace App\Models;
/**
 * @property integer $id
 * @property string $libelle
 * @property string $code
 * @property string $created_at
 * @property string $updated_at
 */

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieProduit extends Model
{

    use HasFactory;
    protected $fillable = ['libelle', 'code','created_at', 'updated_at'];
    public function produit(){
        return $this->hasMany(Produit::class);
    }
}
