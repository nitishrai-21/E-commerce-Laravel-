<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable= ['name', 'description', 'size', 'image', 'category_id'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
