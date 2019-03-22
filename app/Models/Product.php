<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['title','description','techInfo','image_path','category_id','video_path','pdf_path','company','partner_id'];


    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
