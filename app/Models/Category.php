<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
         
    ];
    function Category(){
        return $this->hasMany(belongsTo::class,'catgegory_id');
    }
}
