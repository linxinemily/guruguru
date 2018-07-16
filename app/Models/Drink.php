<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    public function shop()
    {
    	return $this->belongsTo(Shop::class);
    }
}
