<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Literature extends Model
{
    protected $fillable=['title','description','attachment'];


    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

}
