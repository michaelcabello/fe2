<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante_Product extends Model
{
    use HasFactory;
    protected $table = "comprobante_producto";

    protected $guarded = ['id', 'created_at', 'updated_at'];






}