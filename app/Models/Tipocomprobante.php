<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipocomprobante extends Model
{
    use HasFactory;

    //relacion de muchos a muchos
    public function locals(){
        return $this->belongsToMany(Local::class, 'local_tipocomprobantes', 'tipocomprobante_id','local_id' )->withPivot('default','serie');
    }
}
