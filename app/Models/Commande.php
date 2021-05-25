<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 *  @property integer $id
 *  @property integer $id_client
 *  @property integer $id_livreur
 *  @property string $date_commande
 * @property string $num_commande
 * @property string $created_at
 * @property string $updated_at
 */
class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['id_client', 'id_livreur','date_commande', 'num_commande','created_at', 'updated_at'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
}
