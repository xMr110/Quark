<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable=['image_path','title','description','link'];


    public function products()
    {
       return $this->hasMany(Product::class);
    }
}

