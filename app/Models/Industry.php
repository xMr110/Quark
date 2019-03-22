<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable =['title','description','effectArea','image_path'];


    public function literatures()
    {
        return $this->hasMany(Literature::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

}
