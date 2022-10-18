<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'catgegory_id',
        'article_id',
         
    ];

    function article_category(){
        return $this->hasMany(Article_Category::class);
    }
}
