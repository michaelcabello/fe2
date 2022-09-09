<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'state','image'
    ];

    //Relacion uno a muchos
    public function productfamilies(){
        return $this->hasMany(Productfamilie::class);
    }

    //Relacion muchos a muchos
    public function categories(){
        return $this->belongsToMany(Category::class);
    }




}
