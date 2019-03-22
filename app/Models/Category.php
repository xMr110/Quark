<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['title','description','image_path','industry_id'];


    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
