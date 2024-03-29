<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;


//relacion uno a uno (un local pertenece a un usuario, el user_id foraneo esta en local)
    public function user()
    {
       return $this->belongsTo(User::class);
    }

        //relacion de muchos a muchos
        //pongo esto local_tipocomprobantes porque genere mi tabla terminado en s, debi generar local_tipocomprobante
    public function tipocomprobantes(){
        return $this->belongsToMany(Tipocomprobante::class, 'local_tipocomprobantes', 'local_id', 'tipocomprobante_id' )->withPivot('default','serie');
    }

    //relacion de muchos a muchos
    public function productatributes(){
        return $this->belongsToMany(Productatribute::class)->withTimestamps()->withPivot('stock', 'stockmin', 'pricesale', 'pricewholesale', 'pricesalemin');
    }


}
